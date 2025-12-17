<?php
// Включаем вывод ошибок
error_reporting(E_ALL);
ini_set('display_errors', 0);

// Получаем текущий URL
$currentUrl = $_SERVER['REQUEST_URI'];
$baseDomain = 'https://missbliss.su';

// Анализируем URL для определения параметров
$isEnglishVersion = (strpos($currentUrl, '/en/') !== false || strpos($currentUrl, '/elite-models/') !== false);
$isVipSection = (strpos($currentUrl, '/vip-models/') !== false || strpos($currentUrl, '/elite-models/') !== false);

// Определяем, находимся ли мы в корне сайта или английской версии (общий раздел)
$isGeneralSection = !$isVipSection;

// Определяем базовую папку для сканирования в зависимости от языка
$baseScanFolder = $isEnglishVersion ? 'elite-models' : 'vip-models';

// Определяем город, папку и модель из URL
$cityFromUrl = null;
$folderFromUrl = null;
$modelFromUrl = null;

// Список доступных городов и папок
$availableCities = ['moscow', 'saint-petersburg', 'ekaterinburg', 'krasnodar', 'new-york', 'rostov-on-don'];
$availableFolders = ['favorites', 'attractive'];

// Извлекаем город, папку и модель из URL
$urlParts = explode('/', trim($currentUrl, '/'));
foreach ($urlParts as $index => $part) {
    if (in_array($part, $availableCities)) {
        $cityFromUrl = $part;
        // Проверяем следующий элемент на наличие папки
        if (isset($urlParts[$index + 1]) && in_array($urlParts[$index + 1], $availableFolders)) {
            $folderFromUrl = $urlParts[$index + 1];
            // Проверяем следующий элемент на наличие модели
            if (isset($urlParts[$index + 2])) {
                $modelFromUrl = $urlParts[$index + 2];
            }
        }
        break;
    }
}

// Проверяем глобальные папки (без города)
if (!$cityFromUrl) {
    foreach ($urlParts as $index => $part) {
        if (in_array($part, $availableFolders)) {
            $folderFromUrl = $part;
            // Проверяем следующий элемент на наличие модели
            if (isset($urlParts[$index + 1])) {
                $modelFromUrl = $urlParts[$index + 1];
            }
            break;
        }
    }
}

// Определяем имя кэш-файла на основе параметров
$cacheSuffix = '';
if ($cityFromUrl) {
    $cacheSuffix .= '' . $cityFromUrl;
}
if ($folderFromUrl) {
    $cacheSuffix .= '_' . $folderFromUrl;
}
if ($modelFromUrl) {
    $cacheSuffix .= '_' . $modelFromUrl;
}
if ($isEnglishVersion) {
    $cacheSuffix .= '_en';
}
if ($isVipSection) {
    $cacheSuffix .= '_vip';
}
if ($isGeneralSection) {
    $cacheSuffix .= '_general';
}

// Папка для кэша
$cacheDir = __DIR__ . '/cache/section';
$cacheFile = $cacheDir . '/' . $cacheSuffix . '.html';
$cacheLifetime = 3600; // 1 час

// Создаем папку для кэша, если её нет
if (!is_dir($cacheDir)) {
    if (!mkdir($cacheDir, 0755, true)) {
        die("Не удалось создать папку для кэша: {$cacheDir}");
    }
}

// Проверяем, есть ли актуальный кэш
if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheLifetime) {
    echo "<!-- Используем кэш раздела {$cacheSuffix} -->\n";
    echo file_get_contents($cacheFile);
} else {
    echo "<!-- Формируем новый кэш раздела {$cacheSuffix} -->\n";

    // Базовый список городов и их папок
    $baseCities = [
        'moscow' => ['favorites', 'attractive'],
        'saint-petersburg' => ['favorites', 'attractive'],
        'ekaterinburg' => ['favorites', 'attractive'],
        'krasnodar' => ['favorites', 'attractive'],
        'new-york' => ['favorites'],
        'rostov-on-don' => ['favorites']
    ];

    // Фильтруем cities на основе URL
    $cities = [];
    if ($cityFromUrl) {
        if ($folderFromUrl) {
            $cities[$cityFromUrl] = [$folderFromUrl];
        } else {
            $cities[$cityFromUrl] = $baseCities[$cityFromUrl];
        }
    } elseif ($folderFromUrl) {
        foreach ($baseCities as $city => $folders) {
            if (in_array($folderFromUrl, $folders)) {
                $cities[$city] = [$folderFromUrl];
            }
        }
    } else {
        $cities = $baseCities;
    }

    $output = '';

    // Функция для извлечения переменных из PHP-файла
    function extractVariables($filePath) {
        $content = file_get_contents($filePath);
        $variables = [];

        $patterns = [
            'name' => '/\$name\s*=\s*["\']([^"\']+)["\']\s*;/',
            'name1' => '/\$name1\s*=\s*["\']([^"\']+)["\']\s*;/',
            'picsFolio' => '/\$picsFolio\s*=\s*["\']([^"\']+)["\']\s*;/',
            'blur' => '/\$blur\s*=\s*(true|false|null)\s*;/',
            'vip' => '/\$vip\s*=\s*["\']([^"\']*)["\']\s*;/',
            'fxt' => '/\$fxt\s*=\s*["\']([^"\']*)["\']\s*;/',
            'city' => '/\$city\s*=\s*["\']([^"\']*)["\']\s*;/',
        ];

        foreach ($patterns as $key => $pattern) {
            if (preg_match($pattern, $content, $matches)) {
                $variables[$key] = $matches[1];
            } else {
                $variables[$key] = null;
            }
        }

        // Преобразуем $blur в булевое значение
        if (isset($variables['blur'])) {
            $variables['blur'] = filter_var($variables['blur'], FILTER_VALIDATE_BOOLEAN);
        } else {
            $variables['blur'] = false;
        }

        // Проверяем обязательные переменные
        if (empty($variables['name']) || empty($variables['name1']) || empty($variables['picsFolio'])) {
            return [];
        }

        return $variables;
    }

    // Функция для генерации URL профиля
    function generateProfileUrl($city, $folder, $pageName, $isEnglishVersion = false, $isBlurred = false) {
        // Если изображение размытое (blur = true), ведем в VIP-каталог
        if ($isBlurred) {
            if ($isEnglishVersion) {
                return '/elite-models/' . $city . '/' . $folder . '/' . $pageName . '/';
            } else {
                return '/vip-models/' . $city . '/' . $folder . '/' . $pageName . '/';
            }
        } else {
            if ($isEnglishVersion) {
                return '../../' . $folder . '/' . $pageName . '/';
            } else {
                return '../../' . $folder . '/' . $pageName . '/';
            }
        }
    }

    // Функция для получения названия города в правильном падеже
    function getCityName($cityCode, $isEnglish = false) {
        $cityNames = [
            'ru' => [
                'moscow' => 'Москвы',
                'saint-petersburg' => 'Санкт-Петербурга',
                'ekaterinburg' => 'Екатеринбурга',
                'krasnodar' => 'Краснодара',
                'new-york' => 'Нью-Йорка',
                'rostov-on-don' => 'Ростова-на-Дону'
            ],
            'en' => [
                'moscow' => 'Moscow',
                'saint-petersburg' => 'Saint Petersburg',
                'ekaterinburg' => 'Ekaterinburg',
                'krasnodar' => 'Krasnodar',
                'new-york' => 'New York',
                'rostov-on-don' => 'Rostov-on-Don'
            ]
        ];

        $lang = $isEnglish ? 'en' : 'ru';
        return $cityNames[$lang][$cityCode] ?? $cityCode;
    }

    // Собираем все карточки
    $allCards = [];
    foreach ($cities as $city => $folders) {
        foreach ($folders as $folder) {
            $folderPath = __DIR__ . "/{$baseScanFolder}/{$city}/{$folder}";

            if (!is_dir($folderPath)) {
                continue;
            }

            $files = scandir($folderPath);
            foreach ($files as $file) {
                if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                    $filePath = "{$folderPath}/{$file}";
                    $variables = extractVariables($filePath);

                    if (!empty($variables)) {
                        $pageName = pathinfo($file, PATHINFO_FILENAME);

                        // Пропускаем текущую модель, если мы на её странице
                        if ($modelFromUrl && $pageName === $modelFromUrl &&
                            $cityFromUrl === $city && $folderFromUrl === $folder) {
                            continue;
                        }

                        // Фильтруем модели в зависимости от раздела
                        if ($isGeneralSection) {
                            // В общем разделе: не показываем VIP-модели
                            if ($variables['vip'] === 'true') {
                                continue; // Пропускаем VIP-модели в общем разделе
                            }
                        }
                        // В VIP-разделе показываем ВСЕХ (никакой фильтрации)

                        $allCards[] = [
                            'variables' => $variables,
                            'city' => $city,
                            'folder' => $folder,
                            'pageName' => $pageName
                        ];
                    }
                }
            }
        }
    }

    // Перемешиваем карточки для разнообразия
    shuffle($allCards);

    // Берем первые 12 карточек (или меньше, если всего меньше)
    $displayCards = array_slice($allCards, 0, 12);

    // Генерируем HTML для слайдера
    foreach ($displayCards as $card) {
        $variables = $card['variables'];
        $city = $card['city'];
        $folder = $card['folder'];
        $pageName = $card['pageName'];

        // Базовый URL для изображений
        $flink = 'm-b.su/' . ($variables['city'] ?? 'spb');

        // Расширение файла
        $extension = !empty($variables['fxt']) ? $variables['fxt'] : 'jp2';

        // Формируем имя файла изображения
        $imageName = $variables['name'] . '@1x.' . $extension;
        $imagePath = "{$flink}/{$variables['picsFolio']}/{$imageName}";

        // Класс размытия - применяем только в общем разделе
        $blurClass = ($isGeneralSection && $variables['blur']) ? 'blur' : '';

        // URL профиля - для размытых изображений ведем в VIP-каталог
        $profileUrl = generateProfileUrl($city, $folder, $pageName, $isEnglishVersion, $variables['blur']);

        $output .= "
        <div class='box-crew'>
            <a href='{$profileUrl}'>
                <img data-lazy=\"/loader.gif\" data-srcset='https://{$imagePath}' data-sizes='100vw' class='{$blurClass}'>
                <span>{$variables['name1']}</span>
            </a>
        </div>";
    }

    // Определяем город для заголовка
    $displayCity = $cityFromUrl;
    if (!$displayCity && count($cities) == 1) {
        // Если город не указан в URL, но отображается только один город
        $displayCity = array_keys($cities)[0];
    }

    // Текст заголовка в зависимости от языка и города
    if ($displayCity) {
        $cityName = getCityName($displayCity, $isEnglishVersion);
        if ($isEnglishVersion) {
            $titleText = 'Other girls';
            $cityText = 'from ' . $cityName;
        } else {
            $titleText = 'Другие девочки';
            $cityText = 'из ' . $cityName;
        }
    } else {
        // Если город не определен (показываем все города)
        if ($isEnglishVersion) {
            $titleText = 'Other girls';
            $cityText = 'from different cities';
        } else {
            $titleText = 'Другие девочки';
            $cityText = 'из разных городов';
        }
    }

    // Формируем итоговый HTML
    $html = "<h1 class='other'>{$titleText} <span>{$cityText}</span></h1>
    <section class='lazy slider' data-sizes='100vw'>{$output}</section>";

    // Сохраняем результат в кэш
    if (file_put_contents($cacheFile, $html) === false) {
        error_log("Не удалось сохранить кэш в файл: {$cacheFile}");
    }

    // Выводим HTML-секцию
    echo $html;
}
?>