<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



require_once $_SERVER['DOCUMENT_ROOT'] . '/GalleryManager.php';

// Упрощенная функция подключения к БД
function getDBConnection() {
    static $pdo = null;
    
    if ($pdo === null) {
        try {
            $pdo = new PDO(
                "mysql:host=sql305.infinityfree.com;dbname=if0_40406087_missbliss;charset=utf8",
                "if0_40406087",
                "Graniate795",
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_TIMEOUT => 5,
                    PDO::ATTR_PERSISTENT => false
                ]
            );
        } catch (PDOException $e) {
            error_log("Ошибка подключения к БД: " . $e->getMessage());
            return null;
        }
    }
    
    return $pdo;
}

// Создаем менеджер
$pdo = getDBConnection();
$galleryManager = new GalleryManager($pdo);





// Упрощенная проверка кэша
function isModelCached($city, $picsFolio) {
    $cacheDir = $_SERVER['DOCUMENT_ROOT'] . '/cache/gallery_structure';
    $cacheKey = preg_replace('/[^a-zA-Z0-9_-]/', '_', $city . '_' . $picsFolio);
    $cacheFile = $cacheDir . '/' . substr($cacheKey, 0, 100) . '.json';
    
    return file_exists($cacheFile) && (time() - filemtime($cacheFile)) < 7776000;
}

function generateSlider($flink, $blink, $picsFolio, $folder, $folder_full, $name1, $city, $baseDir = null) {
    global $galleryManager;
    
    // Определяем тип устройства
    require_once $_SERVER['DOCUMENT_ROOT'] . '/mobile-detect/Mobile_Detect.php';
    $detect = new Mobile_Detect;
    $deviceType = 'desktop';
    if ($detect->isMobile()) {
        $deviceType = 'mobile';
    } elseif ($detect->isTablet()) {
        $deviceType = 'tablet';
    }
    
    try {
        // Получаем латинское имя из глобальной переменной $name
        global $name;
        
        // Получаем структуру модели с передачей латинского имени
        $structure = $galleryManager->getModelStructure($city, $picsFolio, $name);
        
        // Получаем данные для папки превью
        $previewData = $galleryManager->getFolderData($city, $picsFolio, $folder);
        // Получаем данные для папки полноразмерных изображений
        $fullsizeData = $galleryManager->getFolderData($city, $picsFolio, $folder_full);
        
        if (!$previewData || empty($previewData['files'])) {
            return "<p>В папке $folder нет изображений.</p>";
        }
        
        $files = $previewData['files'];
        
    } catch (Exception $e) {
        return "<p>Ошибка: " . $e->getMessage() . "</p>";
    }
    
    // Остальной код функции без изменений...
    $html = '<ul class="slides">';
    $isFirst = true;
    
    foreach ($files as $imageName => $imageExt) {
        // Для полноразмерных изображений используем то же имя, но расширение из папки полноразмерных
        $fullsizeExt = $fullsizeData['files'][$imageName] ?? $imageExt;
        
        if ($isFirst) {
            $html .= <<<HTML
<li>
    <a href="https://{$flink}/{$picsFolio}/{$folder_full}/{$imageName}.{$fullsizeExt}" class="pP[l]" title="{$name1}">
        <img src="https://{$flink}/{$picsFolio}/{$folder}/{$imageName}.{$imageExt}" alt="{$name1}">
    </a>
</li>
HTML;
            $isFirst = false;
        } else {
            $html .= <<<HTML
<li>
    <a href="https://{$flink}/{$picsFolio}/{$folder_full}/{$imageName}.{$fullsizeExt}" class="pP[l]" title="{$name1}">
        <img class="get" data-src="https://{$flink}/{$picsFolio}/{$folder}/{$imageName}.{$imageExt}" alt="{$name1}">
    </a>
</li>
HTML;
        }
    }
    
    $html .= '</ul>';
    return $html;
}

// Определяем папки в зависимости от устройства
require_once $_SERVER['DOCUMENT_ROOT'] . '/mobile-detect/Mobile_Detect.php';
$detect = new Mobile_Detect;

if ($detect->isMobile()) {
    $folder_full = 'f2';
    $folder_b = 'b2/';
} elseif ($detect->isTablet()) {
    $folder_full = 'f2';
    $folder_b = 'b2/';
} else {
    $folder_b = 'b3/';
    $folder_full = 'f3';
}

// Выводим слайдер
echo generateSlider($flink, $blink, $picsFolio, $folder, $folder_full, $name1, $city);

if (isset($_GET['list_cache'])) {
    try {
        $cacheList = $galleryManager->getCacheFilesList();
        echo "<h3>Кэш-файлы:</h3>";
        echo "<table border='1' style='border-collapse: collapse;'>";
        echo "<tr><th>Файл</th><th>Город</th><th>Модель</th><th>Имя</th><th>Файлов</th><th>Размер</th><th>Обновлен</th></tr>";
        foreach ($cacheList as $cache) {
            echo "<tr>";
            echo "<td>{$cache['filename']}</td>";
            echo "<td>{$cache['model_city']}</td>";
            echo "<td>{$cache['model_name']}</td>";
            echo "<td>{$cache['display_name']}</td>";
            echo "<td>{$cache['total_files']}</td>";
            echo "<td>" . round($cache['file_size'] / 1024, 2) . " KB</td>";
            echo "<td>{$cache['modified']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    } catch (Exception $e) {
        echo "Ошибка: " . $e->getMessage();
    }
    exit;
}

if (isset($_GET['force_update'])) {
    $city = $_GET['city'] ?? '';
    $picsFolio = $_GET['picsFolio'] ?? '';
    $name = $_GET['name'] ?? ''; // Добавляем параметр name
    
    try {
        $structure = $galleryManager->forceUpdateModel($city, $picsFolio, $name);
        echo "Модель $picsFolio успешно обновлена. Всего файлов: " . $structure['total_files'];
    } catch (Exception $e) {
        echo "Ошибка при обновлении: " . $e->getMessage();
    }
    exit;
}

if (isset($_GET['clear_cache'])) {
    $city = $_GET['city'] ?? null;
    $picsFolio = $_GET['picsFolio'] ?? null;
    
    $galleryManager->clearCache($city, $picsFolio);
    echo "Кэш успешно очищен.";
    exit;
}
?>