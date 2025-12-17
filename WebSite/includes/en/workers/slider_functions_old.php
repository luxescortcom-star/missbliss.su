<?php
function generateSlider($flink, $blink, $picsFolio, $folder, $name1, $name, $city, $baseDir = null) 
{
    // Если базовый путь не указан, используем DOCUMENT_ROOT
    if ($baseDir === null) {
        $baseDir = $_SERVER['DOCUMENT_ROOT'] . "/$blink";
    }
	
	    // Папка для кэша
    $cacheDir = $_SERVER['DOCUMENT_ROOT'] . "/en/cache/$city/";
    if (!is_dir($cacheDir)) {
        mkdir($cacheDir, 0755, true); // Создаем папку, если её нет
    }

    // Имя файла кэша (на основе переменной $name1)
    $cacheFile = $cacheDir . '/' . $picsFolio. '_' . $city . '_slider_cache.html';
    $cacheLifetime = 3600; // Время жизни кэша в секундах (1 час)

    // Проверяем, есть ли актуальный кэш
    if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheLifetime) {
        // Если кэш актуален, возвращаем его
		 echo "<!-- Используем кэш -->\n";
        return file_get_contents($cacheFile);
    }
else {
    // Если кэш устарел или отсутствует, формируем секцию заново
    echo "<!-- Формируем новый кэш -->\n";}

    // Полный путь к папке
    $imageDir = "$baseDir/$picsFolio/$folder";

    // Проверяем, существует ли папка
    if (!is_dir($imageDir)) {
        return "<p>Ошибка: Папка $imageDir не найдена.</p>";
    }

    // Получаем список файлов в папке
    $files = scandir($imageDir);
    if ($files === false) {
        return "<p>Ошибка чтения папки.</p>";
    }

    // Фильтруем файлы по допустимым расширениям
    $allowedExtensions = ['jp2', 'jpg', 'jpeg', 'webp'];
    $images = array_filter($files, function($file) use ($allowedExtensions) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        return in_array($ext, $allowedExtensions);
    });

    // Если изображений нет, возвращаем сообщение
    if (empty($images)) {
        return "<p>В папке нет изображений с допустимыми расширениями.</p>";
    }

    // Определяем приоритетное расширение для вывода
    $priorityExtensions = ['jp2', 'jpg', 'jpeg', 'webp'];
    $selectedExtension = null;

    foreach ($priorityExtensions as $ext) {
        foreach ($images as $image) {
            if (strtolower(pathinfo($image, PATHINFO_EXTENSION)) === $ext) {
                $selectedExtension = $ext;
                break 2; // Выходим из обоих циклов
            }
        }
    }

    // Если ни одно из приоритетных расширений не найдено, используем первое доступное
    if ($selectedExtension === null) {
        $selectedExtension = strtolower(pathinfo($images[0], PATHINFO_EXTENSION));
    }

    // Сортируем файлы по имени
    natsort($images);

    // Убираем дубликаты (файлы с одинаковыми именами, но разными расширениями)
    $uniqueImages = [];
    foreach ($images as $image) {
        $imageName = pathinfo($image, PATHINFO_FILENAME); // Имя файла без расширения
        if (!isset($uniqueImages[$imageName])) {
            $uniqueImages[$imageName] = $image; // Сохраняем только уникальные имена
        }
    }

    // Генерация HTML-кода для слайдера
    $html = '<ul class="slides">';
    $isFirst = true; // Флаг для первой картинки

    foreach ($uniqueImages as $imageName => $image) {
        if ($isFirst) {
            // Первая картинка для быстрой загрузки
            $html .= <<<HTML
<li>
    <a href="https://{$flink}/{$picsFolio}/{$imageName}.{$selectedExtension}" class="pP[l]" title="{$name1}">
        <img src="https://{$flink}/{$picsFolio}/{$folder}/{$imageName}.{$selectedExtension}" alt="{$name1}">
    </a>
</li>
HTML;
            $isFirst = false; // Снимаем флаг после первой картинки
        } else {
            // Остальные картинки для медленной загрузки
            $html .= <<<HTML
<li>
    <a href="https://{$flink}/{$picsFolio}/{$imageName}.{$selectedExtension}" class="pP[l]" title="{$name1}">
        <img class="get" data-src="https://{$flink}/{$picsFolio}/{$folder}/{$imageName}.{$selectedExtension}" alt="{$name1}">
    </a>
</li>
HTML;
        }
    }

    $html .= '</ul>';
	
    // Сохраняем результат в кэш
    file_put_contents($cacheFile, $html);

    return $html;
}

// Очистка кэша по запросу
if (isset($_GET['clear_cache'])) {
    $cacheDir = $_SERVER['DOCUMENT_ROOT'] . "/en/cache/$city/";
    if (is_dir($cacheDir)) {
        array_map('unlink', glob("$cacheDir/*")); // Удаляем все файлы в папке кэша
        echo "Кэш успешно очищен.";
    } else {
        echo "Папка кэша не найдена.";
    }
    exit;
}


echo generateSlider($flink, $blink, $picsFolio, $folder,  $name1, $name,   $city);


?>