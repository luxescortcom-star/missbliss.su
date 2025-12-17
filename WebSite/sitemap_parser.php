<?php
// Включим вывод ошибок для отладки
error_reporting(E_ALL);
ini_set('display_errors', 1);

class SitemapParser {
    private $cacheFile = __DIR__ . '/redirect_cache.json';
    private $sitemaps = [
        'main' => __DIR__ . '/sitemap.xml'  // Используем локальный файл
    ];

    // Города на главном домене
    private $mainDomainCities = ['ekaterinburg', 'krasnodar', 'saint-petersburg', 'new-york', 'moscow'];

    // Основные страницы (не должны попадать в attractive)
    private $mainPages = [
        'all_escort_models', 'casting', 'contact', 'about', 'rates', 'vip',
        'en/all_escort_models', 'en/casting', 'en/contact', 'en/about',
        'en/rates', 'en/occupazione', 'en/vip'
    ];

    public function parseAndBuildCache() {
        $cache = [
            'domains' => [
                'main' => 'missbliss.su',
                'cities' => [
                    'saint-petersburg' => [
                        'aliases' => ['st-petersburg', 'петербург'],
                        'domain' => 'missbliss.su'
                    ],
                    'moscow' => [
                        'aliases' => ['moscow', 'msk', 'москва'],
                        'domain' => 'missbliss.su'
                    ],
                    'ekaterinburg' => [
                        'aliases' => ['ekaterinburg', 'екатеринбург'],
                        'domain' => 'missbliss.su'
                    ],
                    'krasnodar' => [
                        'aliases' => ['краснодар', 'krd', 'крд'],
                        'domain' => 'missbliss.su'
                    ],
                    'new-york' => [
                        'aliases' => ['nyc', 'new-york', 'нью-йорк'],
                        'domain' => 'missbliss.su'
                    ]
                ]
            ],
            'routes' => [
                'sections' => ['attractive', 'favorites', 'vip-models', 'elite-models', 'en']
            ],
            'models' => [
                'main' => [
                    'pages' => [],
                    'en' => []
                ]
            ]
        ];

        foreach ($this->sitemaps as $city => $sitemapPath) {
            $this->parseSingleSitemap($sitemapPath, $city, $cache);
        }

        file_put_contents($this->cacheFile, json_encode($cache, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        echo "Cache updated successfully!\n";
    }

    private function parseSingleSitemap($filePath, $city, &$cache) {
        echo "Loading sitemap from: $filePath\n";
        
        if (!file_exists($filePath)) {
            throw new Exception("Sitemap file not found: $filePath");
        }

        $xml = simplexml_load_file($filePath);
        if ($xml === false) {
            throw new Exception("Failed to parse sitemap file: $filePath");
        }

        // Инициализация структур для города
        if (!isset($cache['models'][$city])) {
            $cache['models'][$city] = [
                'attractive' => [],
                'favorites' => [],
                'en' => []
            ];
        }

        $urlCount = 0;
        foreach ($xml->url as $urlNode) {
            $loc = (string)$urlNode->loc;
            $this->processUrl($loc, $city, $cache);
            $urlCount++;
        }
        
        echo "Processed $urlCount URLs from $city sitemap\n";
    }

    private function processUrl($url, $city, &$cache) {
        $path = parse_url($url, PHP_URL_PATH);
        $parts = explode('/', trim($path, '/'));
        
        // Определяем язык и тип страницы
        $isEnglish = in_array('en', $parts);
        $isVipModels = in_array('vip-models', $parts);
        $isEliteModels = in_array('elite-models', $parts);
        $originalName = end($parts);

        // Определяем фактический город с учетом новой структуры
        $actualCity = $city;
        
        // Для новой структуры с vip-models и elite-models
        if ($actualCity === 'main') {
            // Для английских URL в elite-models
            if ($isEnglish && $isEliteModels) {
                foreach ($parts as $part) {
                    if (in_array($part, $this->mainDomainCities)) {
                        $actualCity = $part;
                        break;
                    }
                }
            }
            // Для русских URL в vip-models
            elseif (!$isEnglish && $isVipModels) {
                foreach ($parts as $part) {
                    if (in_array($part, $this->mainDomainCities)) {
                        $actualCity = $part;
                        break;
                    }
                }
            }
            // Для старых URL (до редиректа) - английские
            elseif ($isEnglish && !$isEliteModels) {
                $cityCandidate = $parts[1] ?? '';
                if (in_array($cityCandidate, $this->mainDomainCities)) {
                    $actualCity = $cityCandidate;
                }
            }
            // Для старых URL (до редиректа) - русские
            elseif (!$isEnglish && !$isVipModels) {
                $cityCandidate = $parts[0] ?? '';
                if (in_array($cityCandidate, $this->mainDomainCities)) {
                    $actualCity = $cityCandidate;
                }
            }
        }

        // Обработка главных страниц (main)
        if ($actualCity === 'main') {
            // Для английских страниц
            if ($isEnglish) {
                if (count($parts) === 2 && $parts[0] === 'en' && in_array("en/{$parts[1]}", $this->mainPages)) {
                    $cache['models']['main']['en'][$parts[1]] = "/en/{$parts[1]}/";
                    return;
                }
            }
            // Для неанглийских страниц
            elseif (count($parts) === 1 && in_array($parts[0], $this->mainPages)) {
                $cache['models']['main']['pages'][$parts[0]] = "/{$parts[0]}/";
                return;
            }

            // Если это не главная страница, выходим
            return;
        }

        // Нормализация названия города
        $cityMap = [
            'msk' => 'moscow',
            'spb' => 'saint-petersburg',
            'ekb' => 'ekaterinburg',
            'krasnodar' => 'krasnodar',
            'nyc' => 'new-york'
        ];
        $actualCity = $cityMap[$actualCity] ?? $actualCity;

        // Определяем раздел
        $section = $this->detectSection($parts, $isEnglish, $isVipModels || $isEliteModels);
        if (!$section) return;

        // Извлекаем имя модели/страницы
        $name = $this->extractName($parts, $section);
        if (!$name || $name === $section) return;

        // Формируем путь с учетом новой структуры
        $basePath = $this->buildBasePath($actualCity, $section, $name, $isEnglish, $isVipModels, $isEliteModels);

        // Добавляем в кэш
        if ($isEnglish) {
            if (!isset($cache['models'][$actualCity]['en'][$section])) {
                $cache['models'][$actualCity]['en'][$section] = [];
            }
            $cache['models'][$actualCity]['en'][$section][$originalName] = $basePath;
        } else {
            if (!isset($cache['models'][$actualCity][$section])) {
                $cache['models'][$actualCity][$section] = [];
            }
            $cache['models'][$actualCity][$section][$originalName] = $basePath;
        }

        // Добавляем нормализованную версию для поиска
        $normalizedName = str_replace(['_', '-'], '', $originalName);
        if ($originalName !== $normalizedName) {
            if ($isEnglish) {
                $cache['models'][$actualCity]['en'][$section][$normalizedName] = $basePath;
            } else {
                $cache['models'][$actualCity][$section][$normalizedName] = $basePath;
            }
        }
    }

    private function detectSection(&$parts, $isEnglish, $hasModelFolder) {
        $sections = ['attractive', 'favorites'];

        // Проверка главных страниц
        foreach ($parts as $part) {
            if (in_array($part, $this->mainPages) || ($isEnglish && in_array("en/$part", $this->mainPages))) {
                return null;
            }
        }

        // Ищем разделы в URL (игнорируем папки моделей)
        $ignoreFolders = array_merge(['vip-models', 'elite-models'], $this->mainDomainCities);
        
        foreach ($parts as $key => $part) {
            if (in_array($part, $sections) && !in_array($part, $ignoreFolders)) {
                unset($parts[$key]);
                return $part;
            }
        }

        return 'attractive'; // По умолчанию
    }

    private function extractName($parts, $section) {
        $ignore = array_merge(
            ['en', 'saint-petersburg', 'moscow', 'ekaterinburg', 'krasnodar', 'new-york', 'vip-models', 'elite-models'],
            $this->mainPages
        );

        foreach (array_reverse($parts) as $part) {
            if (!in_array($part, $ignore) && $part !== '' && $part !== $section) {
                return strtolower($part);
            }
        }
        return null;
    }

    private function buildBasePath($city, $section, $name, $isEnglish, $isVipModels = false, $isEliteModels = false) {
        $pathParts = [];

        // Определяем базовую папку в зависимости от языка и структуры
        if ($isEnglish) {
            $pathParts[] = 'elite-models';
        } else {
            $pathParts[] = 'vip-models';
        }

        // Добавляем город
        $pathParts[] = $city;
        
        // Добавляем раздел и имя
        $pathParts[] = $section;
        $pathParts[] = $name;

        return '/' . implode('/', $pathParts) . '/';
    }
}

// Запуск парсера
try {
    $parser = new SitemapParser();
    $parser->parseAndBuildCache();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    
    // Дополнительная информация для отладки
    echo "PHP Version: " . PHP_VERSION . "\n";
    echo "Current directory: " . __DIR__ . "\n";
    echo "Sitemap file exists: " . (file_exists(__DIR__ . '/sitemap.xml') ? 'Yes' : 'No') . "\n";
    echo "Cache file writable: " . (is_writable(__DIR__) ? 'Yes' : 'No') . "\n";
    exit(1);
}