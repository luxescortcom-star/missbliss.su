<?php

class IPGeolocation {
    private static $cacheDir = __DIR__ . '/ip_cache';
    private static $cacheTime = 30 * 24 * 3600; // 30 дней
    private static $apiToken = '05da5adc01fff4'; // Ваш токен
    
    /**
     * Получает информацию о местоположении по IP
     */
    public static function getIPInfo($ip) {
        // Логируем начало запроса
        error_log("IPGeolocation::getIPInfo called for IP: $ip");
        
        // Создаем директорию для кэша если нет
        if (!is_dir(self::$cacheDir)) {
            mkdir(self::$cacheDir, 0755, true);
        }
        
        $cacheFile = self::$cacheDir . '/' . md5($ip) . '.json';
        error_log("Cache file: $cacheFile");
        
        // Проверяем кэш
        if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < self::$cacheTime)) {
            error_log("Using cache for IP: $ip");
            $cachedData = json_decode(file_get_contents($cacheFile), true);
            if ($cachedData) {
                error_log("Cached data: " . json_encode($cachedData));
                return $cachedData;
            }
        }
        
        // Запрашиваем у ipinfo.io
        $url = "https://ipinfo.io/{$ip}/json";
        if (self::$apiToken) {
            $url .= "?token=" . self::$apiToken;
        }
        
        error_log("Requesting URL: $url");
        
        $context = stream_context_create([
            'http' => [
                'timeout' => 5,
                'header' => "User-Agent: MissBliss/1.0\r\n"
            ]
        ]);
        
        $response = @file_get_contents($url, false, $context);
        
        if ($response === false) {
            error_log("API request failed for IP: $ip");
            $error = error_get_last();
            error_log("Error: " . ($error['message'] ?? 'Unknown error'));
            
            return self::getDefaultData($ip);
        }
        
        error_log("API response: " . substr($response, 0, 500) . "...");
        
        $data = json_decode($response, true);
        
        if (!$data) {
            error_log("Failed to parse JSON response");
            return self::getDefaultData($ip);
        }
        
        if (isset($data['error'])) {
            error_log("API error: " . json_encode($data['error']));
            return self::getDefaultData($ip);
        }
        
        // Стандартизируем структуру данных
        $standardizedData = self::standardizeData($data, $ip);
        error_log("Standardized data: " . json_encode($standardizedData));
        
        // Сохраняем в кэш
        file_put_contents($cacheFile, json_encode($standardizedData, JSON_UNESCAPED_UNICODE));
        error_log("Data cached to: $cacheFile");
        
        return $standardizedData;
    }
    
    /**
     * Стандартизирует структуру данных от ipinfo.io
     */
    private static function standardizeData($data, $ip) {
        error_log("Standardizing data for IP: $ip");
        error_log("Raw data: " . json_encode($data));
        
        $result = [
            'ip' => $ip,
            'city' => $data['city'] ?? 'не определен',
            'region' => $data['region'] ?? 'не определен',
            'country' => $data['country'] ?? 'не определена',
            'country_name' => self::getCountryName($data['country'] ?? ''),
            'loc' => $data['loc'] ?? '',
            'timezone' => $data['timezone'] ?? '',
            'org' => $data['org'] ?? ''
        ];
        
        error_log("Standardized result: " . json_encode($result));
        return $result;
    }
    
    /**
     * Получает название страны по коду
     */
    private static function getCountryName($countryCode) {
        error_log("Getting country name for code: $countryCode");
        
        $countries = [
            'RU' => 'Россия',
            'US' => 'США',
            'DE' => 'Германия',
            'FR' => 'Франция',
            // Добавьте другие страны по необходимости
        ];
        
        $result = $countries[$countryCode] ?? $countryCode;
        error_log("Country name result: $result");
        return $result;
    }
    
    /**
     * Данные по умолчанию при ошибке
     */
    private static function getDefaultData($ip) {
        error_log("Returning default data for IP: $ip");
        return [
            'ip' => $ip,
            'city' => 'не определен',
            'region' => 'не определен',
            'country' => 'ru',
            'country_name' => 'Russia',
            'loc' => '',
            'timezone' => '',
            'org' => ''
        ];
    }
    
    /**
     * Получает код страны для intlTelInput
     */
    public static function getCountryCode($ip) {
        error_log("IPGeolocation::getCountryCode called for IP: $ip");
        
        $data = self::getIPInfo($ip);
        $countryCode = strtolower($data['country'] ?? 'ru');
        
        error_log("Final country code: $countryCode (from: " . ($data['country'] ?? 'empty') . ")");
        
        return $countryCode;
    }
}

?>