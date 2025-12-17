<?php
// async_update_db.php
ini_set('display_errors', 0);
ini_set('max_execution_time', 10);

require_once $_SERVER['DOCUMENT_ROOT'] . '/slider_functions_FTP.php';

$cacheKey = $_GET['cache_key'] ?? '';

if (empty($cacheKey)) {
    exit;
}

// Подключаемся к БД
$pdo = getDBConnection();
if (!$pdo) {
    exit;
}

try {
    // Читаем данные из файлового кэша
    $cacheDir = $_SERVER['DOCUMENT_ROOT'] . '/cache/gallery_structure';
    $cacheFile = $cacheDir . '/' . $cacheKey . '.json';
    
    if (!file_exists($cacheFile)) {
        exit;
    }
    
    $data = file_get_contents($cacheFile);
    $structure = json_decode($data, true);
    
    if (!$structure) {
        exit;
    }
    
    // Сохраняем в БД
    $jsonData = json_encode($structure, JSON_UNESCAPED_UNICODE);
    
    $stmt = $pdo->prepare("
        INSERT INTO gallery_cache (cache_key, file_data, created_at, updated_at) 
        VALUES (?, ?, NOW(), NOW())
        ON DUPLICATE KEY UPDATE file_data = ?, updated_at = NOW()
    ");
    $stmt->execute([$cacheKey, $jsonData, $jsonData]);
    
} catch (Exception $e) {
    // Логируем ошибку
    error_log("Async DB update error: " . $e->getMessage());
}
?>