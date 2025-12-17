<?php
/**
 * Генерация HTML-кода для слайдера
 *
 * @param string $flink       Адрес сервера (например, "example.com")
 * @param string $name4       Часть пути на сервере (например, "images")
 * @param string $folder      Папка с изображениями (например, "gallery1")
 * @param string $folder_full Папка с изображениями для разных разрешений (например, "gallery1_full")
 * @param string $name        Имя или описание изображения
 * @param string $ext         Расширение файлов (например, "jp2")
 * @return string             HTML-код для слайдера
 */
function generateSlider($flink, $name3, $folder, $folder_full, $name) {
    // Путь к папке с изображениями

	
   $baseDir = $_SERVER['DOCUMENT_ROOT'] . "/images/msk"; // Пример: /var/www/site/images
    $imageDir = "$baseDir/$name3/$folder";
	
     
    if (!is_dir($imageDir)) {
        return "Папка не найдена: $imageDir"; // Покажите путь в ошибке
    }

    // Сначала ищем .jpg
    $ext = 'jpg';
    $files = scandir($imageDir);
    $images = array_filter($files, function($file) use ($ext) {
        $fileExt = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        return $fileExt === strtolower($ext);
    });
    
    // Если .jpg не найдены, ищем .jp2
    if (empty($images)) {
        $ext = 'jp2';
        $images = array_filter($files, function($file) use ($ext) {
            $fileExt = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            return $fileExt === strtolower($ext);
        });
    }
    
    // Если и .jp2 не найдены, возвращаем сообщение
    if (empty($images)) {
        return "<p>В папке нет изображений с расширением .jpg или .jp2.</p>";
    }

    // Сортируем файлы по имени
    natsort($images);

    // Генерация HTML-кода для слайдера
    $html = '<ul class="slides">';
    foreach ($images as $image) {
        $imageName = pathinfo($image, PATHINFO_FILENAME); // Имя файла без расширения
        $html .= '
        <li>
            <a href="https://' . $flink . '/' . $name3 . '/' . $folder_full . '/' . $imageName . '.' . $ext . '" class="pP[l]" title="' . $name . '">
                <img class=get  data-src="https://' . $flink . '/' . $name3 . '/' . $folder . '/' . $imageName . '.' . $ext . '" alt="' . $name . '">
            </a>
        </li>';
    }
    $html .= '</ul>';

    return $html;
}


echo generateSlider($flink, $name3, $folder, $folder_full, $name);
?>