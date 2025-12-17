<?php

// Безопасное получение протокола и хоста
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';

// Инициализация переменных с безопасными значениями по умолчанию
$name2 = $name2 ?? '';
$name3 = $name3 ?? '';

// Полный URL
$url = $protocol . '://' . $host . $request_uri;

// Разделение URL на части (без query string)
$url_parts = explode('?', $url);
$clean_url = $url_parts[0];

// Обработка пути для английской версии
$link_parts = explode('/en', $request_uri);
$result = isset($link_parts[1]) ? $link_parts[1] : '';

// Английская страница
$en_link = "/en" . $request_uri;
$en_page = $protocol . '://' . $host . $en_link;

// Русская страница (убираем /en из URL)
$url_parts_for_ru = explode('/en', $clean_url);
$ru_path = isset($url_parts_for_ru[1]) ? $url_parts_for_ru[1] : '';
$ru_link = $ru_path;
$ru_page = $protocol . '://' . $host . $ru_path;

// Константы
$telegram_link = 'https://t.me/TheMissBlissAgency?text=';
$invite_text = 'Здравствуйте!%20Я%20хотел%20бы%20пригласить';
$invite_en_text = 'Hello!%20I%20would%20like%20to%20invite';
$email = 'office@lux-escort.com';
$telegram_text = 'Привет!%20Я%20нашел%20ваш%20контакт%20здесь%20';
$casting_link = 'https://missbliss.su/casting/';
$about_link = 'https://missbliss.su/about/';
$spb_link = 'https://missbliss.su/saint-petersburg/';
$contact_link = 'https://missbliss.su/contact/';

// HTML элементы с безопасными переменными
$invite = '<a href="#" class="btn-image" onclick="openInviteModal()">
    <i class="fas fa-cocktail"></i> Пригласить ' . htmlspecialchars($name2) . '
</a>';

$invite_en = '<a href="#" class="btn-image" onclick="openInviteModal()">
    <i class="fas fa-cocktail"></i> Invite ' . htmlspecialchars($name2) . '
</a>';

// Email ссылки с экранированием
$feedback = 'mailto:' . rawurlencode($email) . 
    '?subject=' . rawurlencode('Я хочу оставить отзыв о ' . $name3) . 
    '&body=' . rawurlencode('Ссылка на страницу: ' . $clean_url);

$feedback_en = 'mailto:' . rawurlencode($email) . 
    '?subject=' . rawurlencode('Hello! I would like to Write a review about ' . $name3) . 
    '&body=' . rawurlencode('Page URL: ' . $clean_url);

?>