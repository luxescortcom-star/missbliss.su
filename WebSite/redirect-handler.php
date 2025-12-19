<?php
/**
 * Обработчик редиректов для битых ссылок
 * Версия 1.0
 */

class RedirectHandler {
    private $cache;
    private $currentDomain;
    private $debugMode = true;
    
    public function __construct($domain) {
        $this->currentDomain = $domain;
        $this->loadCache();
    }
    
    /**
     * Загрузка кэша из JSON-файла
     */
    private function loadCache() {
        $cacheFile = __DIR__ . '/redirect_cache.json';
        if (!file_exists($cacheFile)) {
            $this->logError("Cache file not found!");
            $this->cache = $this->generateEmptyCache();
            return;
        }
        
        $this->cache = json_decode(file_get_contents($cacheFile), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->logError("Invalid cache file format!");
            $this->cache = $this->generateEmptyCache();
        }
			if (!file_exists(__DIR__ . '/redirect_cache.json')) {
    header("HTTP/1.0 404 Not Found");
    exit;
}
    }
	

    
    /**
     * Генерация пустого кэша при ошибках
     */
    private function generateEmptyCache() {
        return [
            'domains' => [
                'main' => 'missbliss.ru',
                'cities' => []
            ],
            'models' => []
        ];
    }
    
    /**
     * Основной метод обработки URL
     */
public function handleRequest($requestUri) {
    $this->logDebug("Original request: " . $requestUri);
    
    // Нормализация URL
    $cleanUri = $this->normalizeUrl($requestUri);
    
    // Парсинг URL
    $parsed = $this->parseUrl($cleanUri);
    $this->logDebug("Parsed URL: " . print_r($parsed, true));
    
    // Поиск совпадения
    $redirectUrl = $this->findBestMatch($parsed);
    
    if ($redirectUrl) {
        // Проверка чтобы избежать бесконечного редиректа
        $normalizedRedirect = rtrim(parse_url($redirectUrl, PHP_URL_PATH), '/');
        $normalizedRequest = rtrim($this->normalizeUrl($requestUri), '/');
        
        if ($normalizedRedirect === $normalizedRequest) {
            $this->logDebug("Skipping redirect to same URL: " . $redirectUrl);
            return;
        }
        
        $this->logDebug("Redirecting to: " . $redirectUrl);
        header("Location: " . $redirectUrl, true, 301);
        exit;
    }
    
    $this->show404();
}

private function normalizeUrl($url) {
    $url = strtolower($url);
    $url = preg_replace('/[?#].*$/', '', $url);
    $url = preg_replace('|/{2,}|', '/', $url);
    return rtrim($url, '/');
}

private function isModelUrl($url) {
    $parts = explode('/', trim($url, '/'));
    return count($parts) >= 3 && !preg_match('/\.\w+$/', $url);
}

    
    /**
     * Парсинг URL на компоненты
     */
private function parseUrl($url) {

    $url = rtrim($url, '/');
    $parts = explode('/', trim($url, '/'));
    
    $result = [
        'lang' => null,
        'city' => null,
        'section' => null,
        'model' => null,
        'is_xxx' => false,
        'original' => $url
    ];

    // Определение языка
    if (isset($parts[0]) && in_array($parts[0], ['en'])) {
        $result['lang'] = array_shift($parts);
    }
    
    // Поиск города
    foreach ($parts as $i => $part) {
        foreach ($this->cache['domains']['cities'] as $cityCode => $cityData) {
            if ($part === $cityCode || in_array($part, $cityData['aliases'])) {
                $result['city'] = $cityCode;
                unset($parts[$i]);
                break 2;
            }
        }
    }
    
    if (isset($parts[0]) && in_array($parts[0], $this->cache['routes']['sections'])) {
        $result['section'] = $parts[0];
        unset($parts[0]);
    }
    
    // Оставшаяся часть - модель
    $result['model'] = !empty($parts) ? end($parts) : null;
    
    return $result;
}

    private function checkPageExists($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    return ($status == 200);
}
    
    /**
     * Поиск наилучшего совпадения
     */
private function findBestMatch($parsed) {
	    // Проверяем существование модели в кэше
    if (!empty($parsedUrl['model']) && 
        !isset($this->cache['models'][$parsed['city']][$parsed['section']][$parsed['model']])) {
        // Если модели нет в кэше, обрезаем URL
        return $this->build(
            $this->resolveDomain($parsed['city']),
            [
                'section' => $parsed['section'],
                'city' => $parsed['city']
            ],
            $parsedUrl['lang'],
            $parsedUrl['is_xxx']
        );
    }
	
	
    if (!is_array($parsed)) {
        return null;
    }

    // 1. Попытка найти точное совпадение модели
    if (!empty($parsed['model'])) {
        // Ищем в указанном городе (если есть)
        if (!empty($parsed['city']) && !empty($this->cache['models'][$parsed['city']])) {
            $sectionsToCheck = [$parsed['section'] ?? 'attractive', 'favorites'];
            if ($parsed['lang']) $sectionsToCheck[] = 'en';
            
            foreach ($sectionsToCheck as $section) {
                if (!empty($this->cache['models'][$parsed['city']][$section][$parsed['model']])) {
                    return $this->buildUrl(
                        $this->resolveDomain($parsed['city']),
                        [
                            'section' => $section,
                            'model' => $parsed['model'],
                            'path' => $this->cache['models'][$parsed['city']][$section][$parsed['model']],
                            'city' => $parsed['city']
                        ],
                        $parsed['lang'],
                        $parsed['is_xxx'] ?? false
                    );
                }
            }
        }
        
        // Если не нашли в указанном городе, ищем во всех городах
        foreach ($this->cache['models'] as $city => $sections) {
            $sectionsToCheck = ['attractive', 'favorites'];
            if ($parsed['lang']) $sectionsToCheck[] = 'en';
            
            foreach ($sectionsToCheck as $section) {
                if (!empty($sections[$section][$parsed['model']])) {
                    return $this->buildUrl(
                        $this->resolveDomain($city),
                        [
                            'section' => $section,
                            'model' => $parsed['model'],
                            'path' => $sections[$section][$parsed['model']],
                            'city' => $city
                        ],
                        $parsed['lang'],
                        $parsed['is_xxx'] ?? false
                    );
                }
            }
        }
    }
	
	    // Особый случай: только язык + имя модели
    if ($parsed['lang'] && $parsed['model'] && !$parsed['city'] && !$parsed['section']) {
        foreach ($this->cache['models'] as $city => $sections) {
            foreach (['attractive', 'favorites'] as $section) {
                if (isset($sections[$section][$parsed['model']])) {
                    return $this->buildUrl(
                        $this->resolveDomain($city),
                        [
                            'section' => $section,
                            'model' => $parsed['model'],
                            'path' => $sections[$section][$parsed['model']],
                            'city' => $city
                        ],
                        $parsed['lang'],
                        false
                    );
                }
            }
        }
    }
    
    // 2. Редирект на раздел, если указан
    if (!empty($parsed['section'])) {
        $section = ($parsed['section'] === 'all_escorts_models') ? 'favorites' : $parsed['section'];
        return $this->buildSectionUrl(
            $this->resolveDomain($parsed['city'] ?? null),
            $section,
            $parsed['lang']
        );
    }
    
    // 3. Редирект на город, если указан
    if (!empty($parsed['city'])) {
        return $this->buildCityUrl(
            $this->resolveDomain($parsed['city']),
            $parsed['city'],
            $parsed['lang']
        );
    }
    
    return null;
	
	    // После нахождения совпадения проверим существование страницы
    if ($redirectUrl && !$this->checkPageExists($redirectUrl)) {
        return $this->buildSectionUrl(
            $this->resolveDomain($parsed['city'] ?? null),
            $parsed['section'] ?? 'favorites',
            $parsed['lang']
        );
    }
    
    return $redirectUrl;
}

	

private function buildCityUrl($domain, $cityCode, $lang) {
    $url = 'https://' . $domain;
    if ($lang) {
        $url .= '/' . $lang;
    }
    $url .= '/' . $cityCode . '/';
    return $url;
}

    

    
    /**
     * Поиск точного совпадения модели
     */
    private function findExactModelMatch($parsedUrl) {
        $city = $parsedUrl['city'] ?: $this->detectCityFromDomain();
        $section = $parsedUrl['section'] ?: 'attractive';
        
        if (isset($this->cache['models'][$city][$section][$parsedUrl['model']])) {
            return [
                'section' => $section,
                'model' => $parsedUrl['model'],
                'path' => $this->cache['models'][$city][$section][$parsedUrl['model']]
            ];
        }
        
        return null;
    }
    
    /**
     * Поиск похожих имен моделей
     */
    private function findSimilarModelMatch($parsedUrl) {
        $city = $parsedUrl['city'] ?: $this->detectCityFromDomain();
        $section = $parsedUrl['section'] ?: 'attractive';
        $bestMatch = null;
        $bestScore = 0;
        
        if (!isset($this->cache['models'][$city][$section])) {
            return null;
        }
        
        foreach ($this->cache['models'][$city][$section] as $model => $path) {
            similar_text($parsedUrl['model'], $model, $score);
            
            if ($score > $bestScore && $score > 70) { // Порог схожести 70%
                $bestScore = $score;
                $bestMatch = [
                    'section' => $section,
                    'model' => $model,
                    'path' => $path
                ];
            }
        }
        
        return $bestMatch;
		
		    // Добавляем проверку существования страницы
    if ($redirectUrl && !$this->checkPageExists($redirectUrl)) {
        return null; // Возвращаем null, если страница не существует
    }
    
    return $redirectUrl;
}
    
    
    /**
     * Определение города по текущему домену
     */
    private function detectCityFromDomain() {
        foreach ($this->cache['domains']['cities'] as $cityCode => $cityData) {
            if (strpos($this->currentDomain, $cityData['domain']) !== false) {
                return $cityCode;
            }
        }
        return null;
    }
    
    /**
     * Определение целевого домена
     */
    private function resolveDomain($city) {
        if ($city && isset($this->cache['domains']['cities'][$city])) {
            return $this->cache['domains']['cities'][$city]['domain'];
        }
        return $this->cache['domains']['main'];
    }
    
    /**
     * Построение URL для редиректа
     */
/**
 * Построение URL для редиректа
 */
private function buildUrl($domain, $match, $lang, $isXxx) {
    $url = 'https://' . $domain;
	
	   // Если есть полный путь, используем его
    if (!empty($match['path'])) {
        return $url . $match['path'];
    }
    
    if ($lang) {
        $url .= '/' . $lang;
    }
    
    // Для разделов "escorts" используем "favorites" в пути
    $section = ($match['section'] === 'all_escorts_models') ? 'favorites' : $match['section'];
    
    if ($match['city']) {
        $url .= '/' . $match['city'];
    }
    
    if ($section) {
        $url .= '/' . $section;
    }
    
    if ($match['model']) {
        $url .= '/' . $match['model'];
    }
    
    // Всегда добавляем конечный слэш
    return $url . '/';
}

private function getCityNameForPath($cityCode) {
    $cityNames = [
        'msk' => 'moscow',
        'spb' => 'spb',
        'ekb' => 'ekb',
        'krasnodar' => 'krasnodar'
    ];
    return $cityNames[$cityCode] ?? $cityCode;
}
	
private function getCityFromCacheStructure($modelName) {
    foreach ($this->cache['models'] as $cityCode => $sections) {
        foreach ($sections as $section => $models) {
            if (is_array($models) && array_key_exists($modelName, $models)) {
                return $cityCode;
            }
        }
    }
    return null;
}
	

private function cleanPathForUrl($path, $isXxx, $cityCode, $hasLang) {
    $parts = explode('/', trim($path, '/'));
    
    // Удаляем город, если он уже будет в URL
    if ($isXxx && $cityCode) {
        $cityAliases = array_merge([$cityCode], 
            $this->cache['domains']['cities'][$cityCode]['aliases'] ?? []);
        if (isset($parts[0]) && in_array($parts[0], $cityAliases)) {
            array_shift($parts);
        }
    }
    
    // Удаляем языковую часть, если она уже есть в URL
    if ($hasLang && isset($parts[0]) && $parts[0] === 'en') {
        array_shift($parts);
    }
    
    return '/' . implode('/', $parts) . '/';
}

/**
 * Определяет город для XXX-раздела
 */
private function determineXxxCity($match, $domain) {
    // 1. Пробуем извлечь город из пути в кэше
    $cityFromPath = $this->extractCityFromPath($match['path']);
    if ($cityFromPath) {
        return $cityFromPath;
    }
    
    // 2. Используем город из запроса, если есть
    if (!empty($match['city'])) {
        return $match['city'];
    }
    
    // 3. Определяем город по домену
    return $this->detectCityFromDomain();
}

/**
 * Подготавливает путь, удаляя город если он уже добавлен
 */
private function preparePath($path, $isXxx, $city = null) {
    if (!$isXxx || !$city) {
        return $path;
    }
    
    $parts = explode('/', trim($path, '/'));
    $cityAliases = $this->getAllCityAliases();
    
    // Если первый компонент пути - город, удаляем его
    if (isset($parts[0]) && in_array($parts[0], $cityAliases)) {
        array_shift($parts);
    }
    
    return '/' . implode('/', $parts) . '/';
}

/**
 * Получает все варианты названий городов и их алиасов
 */
private function getAllCityAliases() {
    $aliases = [];
    foreach ($this->cache['domains']['cities'] as $cityData) {
        $aliases = array_merge($aliases, $cityData['aliases']);
        $aliases[] = $cityData['domain'];
    }
    return $aliases;
}

/**
 * Удаляет город из пути, если он уже есть
 */
private function removeCityFromPath($path) {
    $parts = explode('/', trim($path, '/'));
    $cityAliases = [];
    
    // Собираем все алиасы городов
    foreach ($this->cache['domains']['cities'] as $cityData) {
        $cityAliases = array_merge($cityAliases, $cityData['aliases']);
    }
    
    // Если первый компонент - город, удаляем его
    if (isset($parts[0]) && in_array($parts[0], $cityAliases)) {
        array_shift($parts);
    }
    
    return '/' . implode('/', $parts) . '/';
}

/**
 * Извлекает город из пути, сохраненного в кэше
 */
private function extractCityFromPath($path) {
    $parts = explode('/', trim($path, '/'));
    $cityAliases = array_merge(...array_map(
        function($city) { 
            return array_merge([$city], $this->cache['domains']['cities'][$city]['aliases']);
        },
        array_keys($this->cache['domains']['cities'])
    ));
    
    foreach ($parts as $part) {
        if (in_array($part, $cityAliases)) {
            foreach ($this->cache['domains']['cities'] as $cityCode => $cityData) {
                if ($part === $cityCode || in_array($part, $cityData['aliases'])) {
                    return $cityCode;
                }
            }
        }
    }
    
    return null;
}
    
    /**
     * Построение URL для раздела
     */
    private function buildSectionUrl($domain, $section, $lang) {
        $url = 'https://' . $domain;
        
        if ($lang) {
            $url .= '/' . $lang;
        }
        
        $url .= '/' . $section . '/';
        
        return $url;
    }
    
    /**
     * Построение URL для главной страницы
     */
    private function buildHomeUrl($domain, $lang) {
        $url = 'https://' . $domain;
        
        if ($lang) {
            $url .= '/' . $lang;
        }
        
        return $url;
    }
    
/**
 * Показать 404 ошибку с учетом языковой версии
 */

private function show404() {
    // 1. Устанавливаем правильный код ответа
    http_response_code(404);
    
    // 2. Определяем путь к файлу 404 на диске
    $requestUri = $_SERVER['REQUEST_URI'] ?? '';
    $isEnglishVersion = strpos($requestUri, '/en/') === 0;
    
    // Путь должен быть абсолютным от корня сайта (через DOCUMENT_ROOT)
    $basePath = $_SERVER['DOCUMENT_ROOT'];
    $errorFile = $isEnglishVersion ? $basePath . '/en/404.php' : $basePath . '/404.php';
    
    // 3. Проверяем существование файла и подключаем его
    if (file_exists($errorFile)) {
        include($errorFile);
    } else {
        // Запасной вариант, если сам файл 404.php пропал
        echo "<h1>404 Not Found</h1><p>The page you are looking for does not exist.</p>";
    }
    
    // Прекращаем выполнение основного скрипта
    exit;
}


	
	
    /**
     * Логирование ошибок
     */
    private function logError($message) {
        error_log("[RedirectHandler ERROR] " . $message);
    }
    
    /**
     * Логирование для отладки
     */
    private function logDebug($message) {
        if ($this->debugMode) {
            error_log("[RedirectHandler DEBUG] " . $message);
        }
    }
}

// Пример использования (для тестирования)
if (php_sapi_name() === 'cli') {
    // Тестирование из командной строки
    $handler = new RedirectHandler('missbliss.ru');
    $testUrls = [
        '/en/xxx/moscow/attractive/sonia/',
        '/fans-only/moscow/masha/23.jp2',
        '/attractive/rose',
        '/unknown-model'
    ];
    
    foreach ($testUrls as $url) {
        echo "Testing: $url\n";
        $handler->handleRequest($url);
        echo "\n---\n";
    }

    } else {
    // Обычный HTTP-запрос
    try {
        $requestUri = $_SERVER['REQUEST_URI'];
        $domain = $_SERVER['HTTP_HOST'];
        
        $handler = new RedirectHandler($domain);
        $handler->handleRequest($requestUri);
    } catch (Throwable $e) { // Ловим все типы ошибок (включая Exception и Error)
        error_log("[RedirectHandler FATAL] " . $e->getMessage() . " in " . $e->getFile() . ":" . $e->getLine());
        
        // Сначала отправляем код 500
        header("HTTP/1.0 500 Internal Server Error");
        
        // Затем редирект на 404 (как fallback)
        $isEnglish = strpos($_SERVER['REQUEST_URI'] ?? '', '/en/') === 0;
        header("Location: " . ($isEnglish ? '/en/404/' : '/404/'), true, 302);
        exit;
    }
}

