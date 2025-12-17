<?php
// clean_sitemap.php - скрипт для очистки sitemap.xml
$sitemapPath = __DIR__ . '/sitemap.xml';
$content = file_get_contents($sitemapPath);

// Удаляем BOM и пробелы
$content = preg_replace('/^\xEF\xBB\xBF/', '', $content); // Удаляем UTF-8 BOM
$content = ltrim($content); // Удаляем пробелы в начале

// Сохраняем обратно
file_put_contents($sitemapPath, $content);
echo "Sitemap cleaned successfully!\n";