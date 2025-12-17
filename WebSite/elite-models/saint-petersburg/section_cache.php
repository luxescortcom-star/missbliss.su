<?php
// Включаем вывод ошибок
error_reporting(E_ALL);
ini_set('display_errors', 0);


// Базовый URL для изображений
$flink = 'm-b.su/spb'; // Замените на ваш удаленный сервер

// Папка для кэша
$cacheDir = __DIR__ . '/cache';
$cacheFile = $cacheDir . '/section_cache.html';
$cacheLifetime = 600; // Время жизни кэша в секундах (1 час)

// Создаем папку для кэша, если её нет
if (!is_dir($cacheDir)) {
    if (!mkdir($cacheDir, 0755, true)) {
        die("Не удалось создать папку для кэша: {$cacheDir}");
    }
}

// Проверяем, есть ли актуальный кэш
if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheLifetime) {
    // Если кэш актуален, выводим его
    echo "<!-- Используем кэш -->\n";
    echo file_get_contents($cacheFile);
} else {
    // Если кэш устарел или отсутствует, формируем секцию заново
    echo "<!-- Формируем новый кэш -->\n";

    // Папки для сканирования
    $folders = ['favorites', 'attractive'];
    $imagesBasePath = $_SERVER['DOCUMENT_ROOT'] . '/images/spb'; // Локальный путь к изображениям
    $output = ''; // Переменная для хранения HTML-кода

    // Функция для извлечения переменных из PHP-файла
    function extractVariables($filePath) {
        $content = file_get_contents($filePath);
        $variables = [];
        // Ищем переменные в стандартном формате PHP
        preg_match('/\$name\s*=\s*["\']([^"\']+)["\']\s*;/', $content, $nameMatch);
        preg_match('/\$picsFolio\s*=\s*["\']([^"\']+)["\']\s*;/', $content, $picsFolioMatch);
        preg_match('/\$name1\s*=\s*["\']([^"\']+)["\']\s*;/', $content, $name1Match);
        preg_match('/\$blur\s*=\s*(true|false|null)\s*;/', $content, $blurMatch);

        if ($nameMatch && $picsFolioMatch && $name1Match) {
            $variables['name'] = $nameMatch[1];
            $variables['picsFolio'] = $picsFolioMatch[1];
            $variables['name1'] = $name1Match[1];
            $variables['blur'] = isset($blurMatch[1]) ? filter_var($blurMatch[1], FILTER_VALIDATE_BOOLEAN) : false;
        }
        return $variables;
    }

    // Функция для поиска изображения
    function findImage($basePath, $picsFolio, $name) {
        $imageFormats = ['jp2', 'jpg', 'webp'];
        $imagePath = '';
        foreach ($imageFormats as $format) {
            $imageName = "{$name}@1x.{$format}";
            $fullPath = "{$basePath}/{$picsFolio}/{$imageName}";
            if (file_exists($fullPath)) {
                $imagePath = $imageName; // Используем только имя файла
                break;
            }
        }
        return $imagePath;
    }

    // Сканируем папки
    foreach ($folders as $folder) {
        $files = scandir(__DIR__ . '/' . $folder);

        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                $filePath = __DIR__ . "/{$folder}/{$file}";
                $variables = extractVariables($filePath);

                if (!empty($variables)) {
                    // Ищем изображение
                    $imageName = findImage($imagesBasePath, $variables['picsFolio'], $variables['name']);

                    if ($imageName) {
                        // Формируем относительный путь с использованием $flink
                        $imagePath = "{$flink}/{$variables['picsFolio']}/{$imageName}";

                        // Добавляем класс blur, если переменная $blur = true
                        $blurClass = $variables['blur'] ? 'blur' : '';

                        // Формируем HTML-код
                        $output .= "
                        <div class='box-crew'>
                            <a href='../../{$folder}/{$variables['name']}/'>
                                <img data-lazy=\"/images/loader.gif\" data-srcset='https://{$imagePath}' data-sizes='100vw' class='{$blurClass}'>
                                <span>{$variables['name1']}</span>
                            </a>
                        </div>";
                    }
                }
            }
        }
    }

    // Формируем итоговый HTML
    $html = "<h1 class='other'>Other girls <span>from Saint Petersburg</span></h1>
	<section class='lazy slider' data-sizes='100vw'>{$output}</section>";

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