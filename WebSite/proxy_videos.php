<?php
header('Content-Type: application/json');
$url = 'https://m-b.su/get_videos.php?' . http_build_query($_GET);
echo file_get_contents($url);