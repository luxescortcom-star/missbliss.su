<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once $_SERVER['DOCUMENT_ROOT'] . '/GalleryManager.php';

// Получаем аргументы командной строки
$city = $argv[1] ?? '';
$picsFolio = $argv[2] ?? '';
$name = $argv[3] ?? '';

if (empty($city) || empty($picsFolio)) {
    exit(1);
}

// Подключаемся к БД
try {
    $pdo = new PDO(
        "mysql:host=sql305.infinityfree.com;dbname=if0_40406087_missbliss;charset=utf8",
        "if0_40406087",
        "Graniate795",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    $pdo = null;
}

$galleryManager = new GalleryManager($pdo);

try {
    // Создаем полный кэш в фоновом режиме
    $structure = $galleryManager->getModelStructure($city, $picsFolio, $name);
    error_log("Асинхронный кэш создан для: $city/$picsFolio");
} catch (Exception $e) {
    error_log("Ошибка асинхронного создания кэша для $city/$picsFolio: " . $e->getMessage());
}
?>