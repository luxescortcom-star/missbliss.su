<?php
function generateSlider($flink, $blink, $picsFolio, $folder, $folder_full, $city, $name1, $baseDir = null) 
{
    // Подключаем Mobile_Detect
    require_once $_SERVER['DOCUMENT_ROOT'] . '/mobile-detect/Mobile_Detect.php';
    $detect = new Mobile_Detect;
    
    // Определяем тип устройства для кэширования
    $deviceType = 'desktop'; // по умолчанию
    if ($detect->isMobile()) {
        $deviceType = 'mobile';
    } elseif ($detect->isTablet()) {
        $deviceType = 'tablet';
    }

    // Если базовый путь не указан, используем DOCUMENT_ROOT
    if ($baseDir === null) {
        $baseDir = $_SERVER['DOCUMENT_ROOT'] . "/$blink";
    }

    // Папка для кэша
    $cacheDir = $_SERVER['DOCUMENT_ROOT'] . "/cache/$city";
    if (!is_dir($cacheDir)) {
        mkdir($cacheDir, 0755, true); // Создаем папку, если её нет
    }

    // Имя файла кэша (теперь включает тип устройства)
    $cacheFile = $cacheDir . '/' . $picsFolio . '_' . $city . '_' . $deviceType . '_slider_cache.html';
    $cacheLifetime = 604800; // Время жизни кэша в секундах (1 неделя)

    // Проверяем, есть ли актуальный кэш
    if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheLifetime) {
        // Если кэш актуален, возвращаем его
        echo "<!-- Используем кэш для устройства: $deviceType -->\n";
        return file_get_contents($cacheFile);
    } else {
        // Если кэш устарел или отсутствует, формируем секцию заново
        echo "<!-- Формируем новый кэш для устройства: $deviceType -->\n";
    }

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
    $allowedExtensions = ['jpg', 'jpeg', 'jp2', 'webp'];
    $images = array_filter($files, function($file) use ($allowedExtensions) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        return in_array($ext, $allowedExtensions);
    });

    // Если изображений нет, возвращаем сообщение
    if (empty($images)) {
        return "<p>В папке нет изображений с допустимыми расширениями.</p>";
    }

    // Определяем приоритетное расширение для вывода
    $priorityExtensions = ['jpg', 'jp2', 'jpeg', 'webp'];
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
    <a href="https://{$flink}/{$picsFolio}/{$folder_full}/{$imageName}.{$selectedExtension}" class="pP[l]" title="{$name1}">
        <img src="https://{$flink}/{$picsFolio}/{$folder}/{$imageName}.{$selectedExtension}" alt="{$name1}">
    </a>
</li>
HTML;
            $isFirst = false; // Снимаем флаг после первой картинки
        } else {
            // Остальные картинки для медленной загрузки
            $html .= <<<HTML
<li>
    <a href="https://{$flink}/{$picsFolio}/{$folder_full}/{$imageName}.{$selectedExtension}" class="pP[l]" title="{$name1}">
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
    $cacheDir = $_SERVER['DOCUMENT_ROOT'] . "/cache";
    if (is_dir($cacheDir)) {
        // Удаляем все файлы во всех подпапках кэша
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($cacheDir, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::CHILD_FIRST
        );
        
        foreach ($files as $fileinfo) {
            if ($fileinfo->isFile()) {
                unlink($fileinfo->getRealPath());
            }
        }
        
        echo "Кэш успешно очищен.";
    } else {
        echo "Папка кэша не найдена.";
    }
    exit;
}

// Определяем папки в зависимости от устройства
require_once $_SERVER['DOCUMENT_ROOT'] . '/mobile-detect/Mobile_Detect.php';
$detect = new Mobile_Detect;

if ($detect->isMobile()) {
    $lazy = 'class="lazyload"';
    $data = 'data-';
    $folder_full = 'f2';
    $folder_b = 'b2/';
} elseif ($detect->isTablet()) {
    $lazy = 'class="lazyload"';
    $data = 'data-';
    $folder_full = 'f2';
    $folder_b = 'b2/';
} else {
    $lazy = 'class="lazyload"';
    $data = 'data-';
    $folder_b = 'b3/';
    $folder_full = 'f3';
}

echo generateSlider($flink, $blink, $picsFolio, $folder, $folder_full, $city, $name1);
?>