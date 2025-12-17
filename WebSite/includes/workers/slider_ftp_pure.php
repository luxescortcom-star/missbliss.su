<?php
function generateSlider($flink, $blink, $picsFolio, $folder, $folder_full, $name1) 
{
    // Настройки FTP
    $ftpServer = 'zzz180.beget.tech'; // Адрес FTP-сервера
    $ftpPort = 21; // Порт FTP (по умолчанию 21)
    $ftpUser = 'zzz180_mb'; // Логин FTP
    $ftpPass = 'kBJ2UMjg!HLj'; // Пароль FTP
    $ftpRemoteDir = "/$picsFolio/$folder"; // Путь к папке на FTP

    // Папка для кэша
    $cacheDir = $_SERVER['DOCUMENT_ROOT'] . "/cache/FTP_sliders";
    if (!is_dir($cacheDir)) {
        mkdir($cacheDir, 0755, true); // Создаем папку, если её нет
    }

    // Имя файла кэша (на основе переменной $name1)
    $cacheFile = $cacheDir . '/' . $picsFolio . '_slider_cache.html';
    $cacheLifetime = 604800; // Время жизни кэша в секундах (1 неделя)

    // Проверяем, есть ли актуальный кэш
    if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheLifetime) {
        // Если кэш актуален, возвращаем его
		  echo "<!-- Используем кэш -->\n";
        return file_get_contents($cacheFile);
    }
else {
    // Если кэш устарел или отсутствует, формируем секцию заново
    echo "<!-- Формируем новый кэш -->\n";}

    // Пытаемся подключиться к FTP
    $ftpConn = ftp_connect($ftpServer, $ftpPort);
    if (!$ftpConn) {
        return "<p>Ошибка: Не удалось подключиться к FTP-серверу.</p>";
    }

    if (!ftp_login($ftpConn, $ftpUser, $ftpPass)) {
        ftp_close($ftpConn);
        return "<p>Ошибка: Не удалось авторизоваться на FTP-сервере.</p>";
    }

    // Включаем пассивный режим
    ftp_pasv($ftpConn, true);

    // Проверяем, доступна ли папка на FTP
    if (!@ftp_chdir($ftpConn, $ftpRemoteDir)) {
        ftp_close($ftpConn);
        return "<p>Ошибка: Папка $ftpRemoteDir недоступна на FTP-сервере.</p>";
    }

    // Получаем список файлов через FTP
    $files = ftp_nlist($ftpConn, $ftpRemoteDir);
    ftp_close($ftpConn); // Закрываем соединение

    // Если список файлов пуст
    if (empty($files)) {
        return "<p>Ошибка: В папке $ftpRemoteDir нет файлов.</p>";
    }

    // Фильтруем файлы по допустимым расширениям
    $allowedExtensions = ['jp2', 'jpg', 'jpeg', 'webp'];
    $images = array_filter($files, function($file) use ($allowedExtensions) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        return in_array($ext, $allowedExtensions);
    });

    // Если изображений нет, возвращаем сообщение
    if (empty($images)) {
        return "<p>Ошибка: В папке $ftpRemoteDir нет изображений с допустимыми расширениями.</p>";
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
    $cacheDir = $_SERVER['DOCUMENT_ROOT'] . "/cache/FTP_sliders";
    if (is_dir($cacheDir)) {
        array_map('unlink', glob("$cacheDir/*")); // Удаляем все файлы в папке кэша
        echo "Кэш успешно очищен.";
    } else {
        echo "Папка кэша не найдена.";
    }
    exit;
}

// Пример вызова функции
echo generateSlider($flink, $blink, $picsFolio, $folder, $folder_full, $name1);
?>