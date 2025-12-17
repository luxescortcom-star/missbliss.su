<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/en/navigation.php'; // Подключаем navigation.php из той же папки
$uri = substr(substr($_SERVER['REQUEST_URI'], 1), strpos(substr($_SERVER['REQUEST_URI'], 1), '/') + 1);
$currentFile = trim($uri, '/');
$currentFile = preg_replace('/\/+/', '/', $currentFile);
echo generateNavigation($currentFile);
?>