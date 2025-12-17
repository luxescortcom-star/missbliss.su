<?php
function generateLightboxLinks($city, $name3, $name, $baseDir = null) {
    // Если базовый путь не указан, используем DOCUMENT_ROOT
    if ($baseDir === null) {
        $baseDir = $_SERVER['DOCUMENT_ROOT'] . "/xxx/fans-only";
    }
	
	$shortLink = "$city/$name3";

    // Полный путь к папке
    $imageDir = "$baseDir/$shortLink";

    // Проверяем, существует ли папка
    if (!is_dir($imageDir)) {
        return "<p>Error: Folder $shortLink not found.</p>";
    }

    // Получаем список файлов в папке
    $files = scandir($imageDir);
    if ($files === false) {
        return "<p>Error reading folder.</p>";
    }

    // Фильтруем файлы по допустимым расширениям
    $allowedExtensions = ['jp2', 'jpg', 'jpeg', 'webp'];
    $images = array_filter($files, function($file) use ($allowedExtensions) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        return in_array($ext, $allowedExtensions);
    });

    // Если изображений нет, возвращаем сообщение
    if (empty($images)) {
        return "<p>There are no images with valid extensions in the folder..</p>";
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

    // Генерация HTML-кода для ссылок
    $html = '';
    $isFirst = true; // Флаг для первой картинки

    foreach ($uniqueImages as $imageName => $image) {
        if ($isFirst) {
            // Первая картинка с текстом "Fans Only!"
            $html .= <<<HTML
<a href="/xxx/fans-only/{$city}/{$name3}/{$imageName}.{$selectedExtension}" class="pP[fans-only]" title="{$name}">/// Fans Only! ///</a>
HTML;
            $isFirst = false; // Снимаем флаг после первой картинки
        } else {
            // Остальные картинки без текста
            $html .= <<<HTML
<a href="/xxx/fans-only/{$city}/{$name3}/{$imageName}.{$selectedExtension}" class="pP[fans-only]" title="{$name}"></a>
HTML;
        }
    }

    return $html;
}
echo generateLightboxLinks($city, $name3, $name);
?>