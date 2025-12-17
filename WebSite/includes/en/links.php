<?php

$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];

$link = $_SERVER['REQUEST_URI'];
$link = explode('en', $link);
$result = $link[1];

$en_page = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' .$_SERVER['HTTP_HOST']. "/en" .$_SERVER["REQUEST_URI"] ;

$en_link= "/en" .$_SERVER["REQUEST_URI"] ;



$link = explode('/en', $url);
$ru_page = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' .$_SERVER['HTTP_HOST'] . $link[1];
$ru_link = $link[1];






$telegram_link = 'https://t.me/TheMissBlissAgency?text=';

$invite_text = 'Здравствуйте!%20Я%20хотел%20бы%20пригласить';

$invite_en_text = 'Hello!%20I%20would%20like%20to%20invite';

$email='office@lux-escort.com';

$telegram_text = 'Привет! Я нашел ваш контакт здесь ->';

$casting_link = 'https://missbliss.ru/casting/';

$about_link = 'https://missbliss.ru/about/';

$spb_link = 'https://missbliss.spb.ru/';

$contact_link = 'https://missbliss.ru/contact/';



$invite = '<a href="'. $telegram_link.''.$invite_text.'%20' . $name2 . '%20'. $url .'" class="btn-image" ><i class="fas fa-cocktail"></i> Пригласить ' . $name2 . ' </a> ';

$invite_en = '<a href="'. $telegram_link.''.$invite_en_text.'%20' . $name2 . '%20'. $url .'" class="btn-image" ><i class="fas fa-cocktail"></i> Invite ' . $name2 . ' </a> ';

$feedback = 'mailto:'.$email.'?subject=Я%20хочу%20оставить%20отзыв%20о%20'.$name3.'%20'.$url.'';

$feedback_en = 'mailto:'.$email.'?subject=Hello!%20I%20would%20like%20to%20Write%20a%20review%20about%20'.$name3.'%20'.$url.'';

?>