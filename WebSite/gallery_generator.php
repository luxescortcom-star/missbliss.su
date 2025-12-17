<?php
// Включаем вывод ошибок
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

// Получаем текущий URL
$currentUrl = $_SERVER['REQUEST_URI'];
$baseDomain = 'https://missbliss.su'; // Измените на ваш домен

// Анализируем URL для определения параметров
$isEnglishVersion = (strpos($currentUrl, '/en/') !== false || strpos($currentUrl, '/elite-models/') !== false);
$isVipSection = (strpos($currentUrl, '/vip-models/') !== false || strpos($currentUrl, '/elite-models/') !== false);
$ignoreBlurAndVip = $isVipSection; // В VIP-разделах игнорируем blur и vip

// Определяем базовую папку для сканирования в зависимости от языка
$baseScanFolder = $isEnglishVersion ? 'elite-models' : 'vip-models';

// Определяем город и папку из URL
$cityFromUrl = null;
$folderFromUrl = null;

// Список доступных городов
$availableCities = ['moscow', 'saint-petersburg', 'ekaterinburg', 'krasnodar', 'new-york', 'rostov-on-don'];
$availableFolders = ['favorites', 'attractive'];

// Извлекаем город и папку из URL
$urlParts = explode('/', trim($currentUrl, '/'));
foreach ($urlParts as $index => $part) {
    if (in_array($part, $availableCities)) {
        $cityFromUrl = $part;
        // Проверяем следующий элемент на наличие папки
        if (isset($urlParts[$index + 1]) && in_array($urlParts[$index + 1], $availableFolders)) {
            $folderFromUrl = $urlParts[$index + 1];
        }
        break;
    }
}

// Проверяем глобальные папки (без города)
if (!$cityFromUrl) {
    foreach ($urlParts as $part) {
        if (in_array($part, $availableFolders)) {
            $folderFromUrl = $part;
            break;
        }
    }
}

// Определяем имя кэш-файла на основе параметров
$cacheSuffix = '';
if ($cityFromUrl) {
    $cacheSuffix .= '_' . $cityFromUrl;
}
if ($folderFromUrl) {
    $cacheSuffix .= '_' . $folderFromUrl;
}
if ($isEnglishVersion) {
    $cacheSuffix .= '_en';
}
if ($isVipSection) {
    $cacheSuffix .= '_vip';
}

// Папка для кэша
$cacheDir = __DIR__ . '/cache/gallery';
$cacheFile = $cacheDir . '/gallery_cache' . $cacheSuffix . '.html';
$cacheLifetime = 3600; // Время жизни кэша в секундах

// Создаем папку для кэша, если её нет
if (!is_dir($cacheDir)) {
    if (!mkdir($cacheDir, 0755, true)) {
        die("Не удалось создать папку для кэша: {$cacheDir}");
    }
}

// Проверяем, есть ли актуальный кэш
if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheLifetime) {
    // Если кэш актуален, выводим его
    echo "<!-- Используем кэш {$cacheSuffix} -->\n";
    echo file_get_contents($cacheFile);
} else {
    // Если кэш устарел или отсутствует, формируем секцию заново
    error_log("Формируем новый кэш для: {$cacheSuffix}");
    echo "<!-- Формируем новый кэш {$cacheSuffix} -->\n";

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
        // Если указан город, берем только его
        if ($folderFromUrl) {
            // Если указана папка, берем только ее
            $cities[$cityFromUrl] = [$folderFromUrl];
        } else {
            // Иначе берем все папки для этого города
            $cities[$cityFromUrl] = $baseCities[$cityFromUrl];
        }
    } elseif ($folderFromUrl) {
        // Если указана только папка (глобальная), берем все города с этой папкой
        foreach ($baseCities as $city => $folders) {
            if (in_array($folderFromUrl, $folders)) {
                $cities[$city] = [$folderFromUrl];
            }
        }
    } else {
        // Если ничего не указано, берем все города
        $cities = $baseCities;
    }

    $output = ''; // Переменная для хранения HTML-кода

    // Функция для вычисления возраста
    function calculateAge($birthdate, $isEnglish = false) {
        // Преобразуем дату рождения в объект DateTime
        $birthdate = new DateTime($birthdate);

        // Получаем текущую дату
        $today = new DateTime();

        // Вычисляем разницу между датами
        $age = $today->diff($birthdate);

        if ($isEnglish) {
            // Английская версия - просто "y.o."
            return "{$age->y} y.o.";
        } else {
            // Русская версия - со склонением
            $lastDigit = $age->y % 10; // Последняя цифра возраста
            $lastTwoDigits = $age->y % 100; // Последние две цифры возраста

            if ($lastTwoDigits >= 11 && $lastTwoDigits <= 14) {
                $declension = 'лет';
            } else {
                switch ($lastDigit) {
                    case 1:
                        $declension = 'год';
                        break;
                    case 2:
                    case 3:
                    case 4:
                        $declension = 'года';
                        break;
                    default:
                        $declension = 'лет';
                }
            }

            // Возвращаем возраст с правильным склонением
            return "{$age->y} $declension";
        }
    }

    // Функция для извлечения переменных из PHP-файла
    function extractVariables($filePath, $ignoreBlurAndVip = false) {
        $content = file_get_contents($filePath);
        $variables = [];

        // Ищем переменные в стандартном формате PHP
        $patterns = [
            'name' => '/\$name\s*=\s*["\']([^"\']+)["\']\s*;/',
            'name1' => '/\$name1\s*=\s*["\']([^"\']+)["\']\s*;/',
            'name2' => '/\$name2\s*=\s*["\']([^"\']+)["\']\s*;/',
            'blur' => '/\$blur\s*=\s*(true|false|null)\s*;/',
            'picsFolio' => '/\$picsFolio\s*=\s*["\']([^"\']+)["\']\s*;/',
            'dataType' => '/\$dataType\s*=\s*["\']([^"\']*)["\']\s*;/',
            'title' => '/\$title\s*=\s*["\']([^"\']*)["\']\s*;/',
            'home' => '/\$home\s*=\s*["\']([^"\']*)["\']\s*;/',
            'birthdate' => '/\$birthdate\s*=\s*["\']([^"\']*)["\']\s*;/',
            'height' => '/\$height\s*=\s*["\']([^"\']*)["\']\s*;/',
            'weight' => '/\$weight\s*=\s*["\']([^"\']*)["\']\s*;/',
            'city' => '/\$city\s*=\s*["\']([^"\']*)["\']\s*;/',
            'vip' => '/\$vip\s*=\s*["\']([^"\']*)["\']\s*;/',
            'fxt' => '/\$fxt\s*=\s*["\']([^"\']*)["\']\s*;/', // Добавляем извлечение переменной fxt
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

        // Преобразуем $vip в булевое значение
        if (isset($variables['vip'])) {
            $variables['vip'] = filter_var($variables['vip'], FILTER_VALIDATE_BOOLEAN);
        } else {
            $variables['vip'] = false;
        }

        // В VIP-разделах игнорируем blur и vip
        if ($ignoreBlurAndVip) {
            $variables['blur'] = false;
            $variables['vip'] = false;
        }

        // Проверяем, что обязательные переменные найдены
        if (empty($variables['name']) || empty($variables['name1']) || empty($variables['picsFolio']) || empty($variables['city'])) {
            error_log("Не удалось извлечь обязательные переменные из файла: $filePath");
            return [];
        }

        return $variables;
    }

    // Функция для генерации URL профиля
    function generateProfileUrl($city, $variables, $folder, $pageName, $isVipSection = false, $isEnglishVersion = false) {
        // Если мы в закрытом каталоге (VIP-разделе), формируем ссылку на закрытый каталог
        if ($isVipSection) {
            if ($isEnglishVersion) {
                // Английская версия закрытого каталога
                return '/elite-models/' . $city . '/' . $folder . '/' . $pageName . '/';
            } else {
                // Русская версия закрытого каталога
                return '/vip-models/' . $city . '/' . $folder . '/' . $pageName . '/';
            }
        }
        
        // Для открытого каталога
        // Для blur=true карточек используем /xxx/ на текущем домене
        if (!empty($variables['blur'])) {
            return '/' . ($isEnglishVersion ? 'elite-models/' : 'vip-models/') . $city . '/' . $folder . '/' . $pageName . '/';
        }

        // Для остальных карточек используем стандартные URL
        switch ($variables['city'] ?? '') {
            case 'msk':
                return '/' . ($isEnglishVersion ? 'en/' : '') . $city . '/'. $folder . '/' . $pageName . '/';
            case 'spb':
                return '/' . ($isEnglishVersion ? 'en/' : '') . $city . '/'. $folder . '/' . $pageName . '/';
            default:
                 return '/' . ($isEnglishVersion ? 'en/' : '') . $city . '/'. $folder . '/' . $pageName . '/';
        }
    }

    // Сканируем папки городов
    $cards = [];
    foreach ($cities as $city => $folders) {
        foreach ($folders as $folder) {
            // Используем правильную базовую папку в зависимости от языка
            $folderPath = __DIR__ . "/{$baseScanFolder}/{$city}/{$folder}";

            // Проверяем существование папки
            if (!is_dir($folderPath)) {
                error_log("Папка не существует: {$folderPath}");
                continue;
            }

            $files = scandir($folderPath);

            foreach ($files as $file) {
                if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                    $filePath = "{$folderPath}/{$file}";
                    error_log("Обработка файла: $filePath");

                    $variables = extractVariables($filePath, $ignoreBlurAndVip);
                    if (!empty($variables)) {
                        
                        // Пропускаем VIP модели только если не в VIP-разделе
                        if (!$ignoreBlurAndVip && $variables['vip'] === true) {
                            error_log("Пропускаем VIP модель: {$variables['name']}");
                            continue;
                        }
                        
                        error_log("Найдены переменные: " . print_r($variables, true));

                        // Формируем путь к изображениям с учетом города
                        $flink = 'https://m-b.su/' . $variables['city'];

                        // Получаем расширение из переменной $fxt, если не задано - используем 'jp2' по умолчанию
                        $extension = !empty($variables['fxt']) ? $variables['fxt'] : 'jp2';
                        error_log("Используем расширение: $extension");

                        // Извлекаем имя файла без расширения .php
                        $pageName = pathinfo($file, PATHINFO_FILENAME);

                        // Вычисляем возраст в зависимости от языка
                        if (!empty($variables['birthdate'])) {
                            $variables['age'] = calculateAge($variables['birthdate'], $isEnglishVersion);
                        } else {
                            $variables['age'] = $isEnglishVersion ? 'Age not specified' : 'Возраст не указан';
                        }

                        // Добавляем карточку в массив
                        $cards[] = [
                            'variables' => $variables,
                            'extension' => $extension,
                            'city' => $city,
                            'folder' => $folder,
                            'pageName' => $pageName,
                            'flink' => $flink
                        ];
                    }
                }
            }
        }
    }

    // Разделяем карточки на три группы: новенькие, обычные без blur, и с blur
    $newCards = [];
    $nonBlurCards = [];
    $blurCards = [];

    foreach ($cards as $card) {
        $dataType = strtolower($card['variables']['dataType'] ?? '');

        // Проверяем, содержит ли $dataType "новенькая" или "new" (регистронезависимо)
        if (strpos($dataType, 'новенькая') !== false || strpos($dataType, 'new') !== false) {
            $newCards[] = $card;
        } elseif ($card['variables']['blur']) {
            $blurCards[] = $card;
        } else {
            $nonBlurCards[] = $card;
        }
    }

    // Рандомизируем карточки
    shuffle($nonBlurCards);
    shuffle($blurCards);

    // Объединяем карточки в порядке: новенькие -> обычные без blur -> с blur
    $sortedCards = array_merge($newCards, $nonBlurCards, $blurCards);

    // Генерация HTML-кода для галереи
    $html = '<ul class="portfolio group">';
    $totalCards = count($sortedCards);

    // Тексты в зависимости от языка
    $heightText = $isEnglishVersion ? 'height' : 'рост';
    $weightText = $isEnglishVersion ? 'weight' : 'вес';

    foreach ($sortedCards as $index => $card) {
        $variables = $card['variables'];
        $extension = $card['extension'];
        $city = $card['city'];
        $folder = $card['folder'];
        $pageName = $card['pageName'];
        $flink = $card['flink'];

        // Обратный порядок нумерации: снизу вверх
        $dataId = $totalCards - $index;
        
        // Формируем тег <picture> используя переменные $name, $picsFolio и $fxt
        $picture = '<picture>
            <source media="(max-width: 499px) and (orientation: portrait)"
 ' . '' . $lazy . ' ' . $data . 'srcset="' . $flink . '/' . $variables['picsFolio'] . '/' . $variables['name'] . '@p1x.' . $extension . ' 1x,
                               ' . $flink . '/' . $variables['picsFolio'] . '/' . $variables['name'] . '@p2x.' . $extension . ' 2x,
                               ' . $flink . '/' . $variables['picsFolio'] . '/' . $variables['name'] . '@p3x.' . $extension . ' 3x" />
            <source media="(min-width: 500px) and (orientation: landscape)"
 ' . '' . $lazy . ' ' . $data . 'srcset="' . $flink . '/' . $variables['picsFolio'] . '/' . $variables['name'] . '@1x.' . $extension . ' 1x,
                               ' . $flink . '/' . $variables['picsFolio'] . '/' . $variables['name'] . '@2x.' . $extension . ' 2x,
                               ' . $flink . '/' . $variables['picsFolio'] . '/' . $variables['name'] . '@3x.' . $extension . ' 3x" />
            <img alt="' . $variables['title'] . '" src="' . $flink . '/' . $variables['picsFolio'] . '/' . $variables['name'] . '@1x.' . $extension . '"
                  title="' . $variables['title'] . '" longdesc="/' . $city . '/' . $folder . '/' . $pageName . '/#description">
        </picture>';

        // Использование в формировании карточки - передаем оба параметра
        $profileUrl = generateProfileUrl($city, $variables, $folder, $pageName, $isVipSection, $isEnglishVersion);

        // Формируем карточку
        $html .= '
    <li class="item" data-id=id-' . $dataId . ' data-type="' . $variables['dataType'] . '"><!-- ' . $variables['name1'] . ' -->
        <div class="view ' . ($variables['blur'] ? 'blur ' : '') . ' overlay">
            ' . $picture . '
            <a href="' . $profileUrl . '" title="' . $variables['title'] . '">
                <div class="mask">
                    <h3>' . $variables['name1'] . '</h3>
                    ' . ($variables['city'] == 'msk' ? '<h6>' : '<h5>') . $variables['home'] . ($variables['city'] == 'msk' ? '</h6>' : '</h5>') . '
                    <p>' . $variables['age'] . ', ' . $heightText . ': ' . $variables['height'] . ', ' . $weightText . ': ' . $variables['weight'] . '</p>
                </div>
            </a>';

        // Добавляем ссылку с иконкой, если blur равен null
        if ($variables['blur'] === false) {
            $html .= '
                <a href="' . $flink . '/' . $variables['picsFolio'] . '/' . $variables['name'] . '@3x.' . $extension . '" class="pP[MissBliss]" title="' . $variables['name1'] . '">
                    <i class="fas fa-gem"></i>
                </a>';
        }

        $html .= '
            </div>
        </li>';
    }

    $html .= '</ul>';

    // Сохраняем результат в кэш
    if (file_put_contents($cacheFile, $html) === false) {
        error_log("Не удалось сохранить кэш в файл: {$cacheFile}");
    } else {
        error_log("Кэш успешно сохранен в файл: {$cacheFile}");
    }

    // Выводим HTML-секцию
    echo $html;
}
?>