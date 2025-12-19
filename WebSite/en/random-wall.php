<?php
$dir = __DIR__ . '/social/agency/wall/';
$allowedExtensions = ['avif', 'webp', 'jpg', 'png'];
$images = [];

if (is_dir($dir)) {
    $files = scandir($dir);
    foreach ($files as $file) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, $allowedExtensions)) {
            $images[] = $dir . $file;
        }
    }
}

if (!empty($images)) {
    $randomImage = $images[array_rand($images)];
    $contentType = mime_content_type($randomImage);
    
    $expiry = 3600;
    
    header("Content-Type: $contentType");
    header("Cache-Control: public, max-age=$expiry");
    header("Expires: " . gmdate("D, d M Y H:i:s", time() + $expiry) . " GMT");
    
    readfile($randomImage);
    exit;
} else {
    header("Location: https://m-b.su/social/agency/closed_lips.avif");
    exit;
}