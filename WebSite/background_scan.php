<?php
// background_scan.php
ini_set('display_errors', 0);
ini_set('max_execution_time', 30);

require_once $_SERVER['DOCUMENT_ROOT'] . '/slider_functions_FTP.php';

$city = $_GET['city'] ?? '';
$picsFolio = $_GET['picsFolio'] ?? '';
$name = $_GET['name'] ?? '';

if (empty($city) || empty($picsFolio)) {
    exit;
}

// Подключаем менеджер
$pdo = getDBConnection();
$galleryManager = new GalleryManager($pdo);

// Выполняем полное сканирование
try {
    $galleryManager->fullScanModel($city, $picsFolio, $name);
} catch (Exception $e) {
    // Игнорируем ошибки в фоне
}
?>