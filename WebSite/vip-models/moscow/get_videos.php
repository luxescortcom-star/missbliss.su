<?php
header('Content-Type: application/json');

$city = $_GET['city'] ?? '';
$name = $_GET['name'] ?? '';
$videoDir = __DIR__ . "/images/$city1/$name/video/";
$cacheFile = __DIR__ . "/images/$city1/$name/video_cache.json";

if (!is_dir($videoDir)) {
    die(json_encode(['error' => 'Папка с видео не найдена']));
}

// Если кэш есть и свежий — используем его
if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < 3600)) {
    $videos = json_decode(file_get_contents($cacheFile), true);
} else {
    $videos = [];
    foreach (scandir($videoDir) as $file) {
        if (preg_match('/\.(mp4|mov|avi|webm)$/i', $file)) {
            $videos[] = [
                'url' => "/images/$city1/$name/video/$file",  // Относительный путь от корня сайта
                'name' => $file,
            ];
        }
    }
    file_put_contents($cacheFile, json_encode($videos));
}

echo json_encode($videos);