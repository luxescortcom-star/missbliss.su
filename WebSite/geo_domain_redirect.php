<?php
if (!class_exists('GeoDomainRedirect')) {

class GeoDomainRedirect {
    private static $cacheDir = __DIR__ . '/geo_cache';
    private static $cacheTime = 30 * 24 * 3600; // 30 дней
    private static $testMode = false;
    private static $forcedCountry = null;
    private static $checked = false; // Оптимизация производительности
    
    // Домены
    private static $internationalDomain = 'https://missbliss.ru';
    private static $russianDomain = 'https://missbliss.su';
    
    // Коды стран для России
    private static $russianCountryCodes = ['RU', 'BY', 'KZ', 'AM', 'KG', 'AZ', 'MD', 'TJ', 'TM', 'UZ'];

    /**
     * Основной метод для редиректа по геолокации
     */
    public static function redirectByGeo() {
        // Оптимизация производительности - проверяем только один раз за запрос
        if (self::$checked) {
            return;
        }
        self::$checked = true;
        
        // Проверяем ботов
        if (self::isBot()) {
            return;
        }
        
        // Проверяем сессию чтобы не делать редирект многократно
        if (self::shouldSkipRedirect()) {
            return;
        }
        
        $country = self::getUserCountry();
        
        // Если страна определена как Россия или СНГ - используем .su, иначе .ru
        $targetDomain = in_array($country, self::$russianCountryCodes) ? 
            self::$russianDomain : self::$internationalDomain;
        
        // Редирект если текущий домен не совпадает с целевым
        $currentDomain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];
        
        if ($currentDomain !== $targetDomain) {
            self::markRedirectDone();
            header('Location: ' . $targetDomain, true, 302);
            exit;
        }
        
        // Если редирект не нужен, тоже отмечаем чтобы больше не проверять
        self::markRedirectDone();
    }

    /**
     * Проверка на ботов
     */
    private static function isBot() {
        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
        $botPatterns = [
            '/bot/i', '/crawl/i', '/spider/i', '/google/i', 
            '/yandex/i', '/bing/i', '/duckduckgo/i', '/baidu/i',
            '/slurp/i', '/exabot/i', '/facebot/i', '/ia_archiver/i'
        ];
        
        foreach ($botPatterns as $pattern) {
            if (preg_match($pattern, $userAgent)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Проверяем, нужно ли пропустить редирект (уже делали в этой сессии)
     */
    private static function shouldSkipRedirect() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        return isset($_SESSION['geo_redirect_done']) && $_SESSION['geo_redirect_done'] === true;
    }

    /**
     * Отмечаем что редирект уже выполнен
     */
    private static function markRedirectDone() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['geo_redirect_done'] = true;
    }

    /**
     * Определение страны пользователя
     */
    private static function getUserCountry() {
        if (self::$forcedCountry !== null) {
            return self::$forcedCountry;
        }

        $ip = self::$testMode ? '192.168.1.226' : $_SERVER['REMOTE_ADDR'];
        
        // Проверяем локальные IP
        if (self::isLocalIp($ip)) {
            return null;
        }
        
        $cacheFile = self::$cacheDir . '/country_' . md5($ip) . '.json';

        // Проверка и создание директории кэша
        if (!file_exists(self::$cacheDir)) {
            if (!mkdir(self::$cacheDir, 0755, true)) {
                error_log("Failed to create cache directory");
                return null;
            }
        }

        // Чтение из кэша (если файл существует и не устарел)
        if (file_exists($cacheFile)) {
            $data = json_decode(file_get_contents($cacheFile), true);
            if (isset($data['country']) && !empty($data['country']) && 
                (time() - $data['timestamp']) < self::$cacheTime) {
                return $data['country'];
            }
        }

        // Запрос к API
        if (!self::$testMode) {
            $country = self::fetchCountryFromAPI($ip);
            if ($country) {
                file_put_contents($cacheFile, json_encode([
                    'country' => $country,
                    'ip' => $ip,
                    'timestamp' => time()
                ], JSON_UNESCAPED_UNICODE));
                return $country;
            }
        }

        return null;
    }

    /**
     * Проверка локального IP
     */
    private static function isLocalIp($ip) {
        $localPatterns = [
            '/^127\./', '/^10\./', '/^172\.(1[6-9]|2[0-9]|3[0-1])\./', 
            '/^192\.168\./', '/^::1$/', '/^fc00::/', '/^fe80::/'
        ];
        
        foreach ($localPatterns as $pattern) {
            if (preg_match($pattern, $ip)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Запрос к API для определения страны
     */
    private static function fetchCountryFromAPI($ip) {
        $url = "https://ipapi.co/{$ip}/country/";
        
        try {
            $response = @file_get_contents($url, false, stream_context_create([
                'http' => [
                    'header' => "User-Agent: php\r\n",
                    'timeout' => 3
                ]
            ]));
            
            if ($response === false) {
                throw new Exception("API request failed");
            }
            
            $country = trim($response);
            return !empty($country) ? $country : null;
            
        } catch (Exception $e) {
            error_log("GeoDomainRedirect API error: " . $e->getMessage());
            return null;
        }
    }

    /**
     * Установка тестовой страны
     */
    public static function setTestCountry($country) {
        self::$forcedCountry = $country;
    }

    /**
     * Включение тестового режима
     */
    public static function setTestMode($enabled = true) {
        self::$testMode = $enabled;
    }
    
    /**
     * Очистка кэша (можно вызывать периодически)
     */
    public static function clearOldCache($olderThanDays = 30) {
        if (!file_exists(self::$cacheDir)) return;
        
        $files = glob(self::$cacheDir . '/country_*.json');
        $cutoffTime = time() - ($olderThanDays * 24 * 3600);
        
        foreach ($files as $file) {
            if (filemtime($file) < $cutoffTime) {
                unlink($file);
            }
        }
    }
}

} // Конец проверки class_exists
?>