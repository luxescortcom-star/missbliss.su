<?php

function generateFooterMenu($isEnglish = false ) {
    // Переменные для контактов
    $telegram = 'TheMissBlissAgency';
    $email = 'office@lux-escort.com';
    $url = urlencode($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

    // Определяем, находимся ли мы в каталоге vvp или xxx
    $isVVP = strpos($_SERVER['REQUEST_URI'], '/elite-models/') === 0;
    $isXXX = strpos($_SERVER['REQUEST_URI'], '/vip-models/') === 0;
    $isSpecialCatalog = $isVVP || $isXXX;

    // Массив пунктов меню
    $footerItems = [
        [
            'url' => $isEnglish ? 'https://missbliss.su/elite-models/new-york/favorites/natasha/' : 'https://missbliss.su/vip-models/new-york/favorites/natasha/',
            'title' => $isEnglish ? 'New York' : 'Нью-Йорк',
            'description' => $isEnglish ? 'Natasha - beautiful and charming companion in New York, USA' : 'Наташа - красивая и обворожительная спутница в Нью-Йорке, США'
        ],
        [
            'url' => $isEnglish ? 'https://missbliss.su/elite-models/saint-petersburg/' : 'https://missbliss.su/vip-models/saint-petersburg/',
            'title' => $isEnglish ? 'St. Petersburg' : 'Санкт-Петербург',
            'description' => $isEnglish ? 'Elite escorts in St. Petersburg, MissBliss escort agency SPb' : 'Элитные Эскортницы в Санкт-Петербурге, эскорт агентство МиссБлисс Спб'
        ],
		[
            'url' => $isEnglish ? 'https://missbliss.su/elite-models/moscow/' : 'https://missbliss.su/vip-models/moscow/',
            'title' => $isEnglish ? 'Moscow' : 'Москва',
            'description' => $isEnglish ? 'Elite escorts in Moscow, MissBliss escort agency Moscow' : 'Элитные Эскортницы в Москве, эскорт агентство МиссБлисс Москва'
        ],
        [
            'url' => $isEnglish ? '/en/casting/' : '/casting/',
            'title' => $isEnglish ? 'Jobs for girls' : 'Работа для девушек',
            'description' => $isEnglish ? 'Jobs for girls at MissBliss escort agency' : 'Работа для девушек в эскорт агентстве МиссБлисс'
        ],
        [
            'url' => $isEnglish ? '/en/rates/' : '/rates/',
            'title' => $isEnglish ? 'Rates' : 'Цены',
            'description' => $isEnglish ? 'Cost of escort services in Moscow, prices of MissBliss escort agency' : 'стоимость эскорт услуг в Москве, цены эскорт агентства МиссБлисс в Москва'
        ],
        [
            'url' => $isEnglish ? '/en/contact/' : '/contact/',
            'title' => $isEnglish ? 'Contact' : 'Контакт',
            'description' => $isEnglish ? 'Contacts of the escort agency' : 'Контакты эскорт агентства'
        ],
        [
            'url' => $isEnglish ? '/elite-models/' : '/vip-models/',
            'title' => $isEnglish ? 'VIP catalog' : 'VIP-каталог',
            'description' => $isEnglish ? 'Private catalog for regular VIP clients' : 'Закрытый каталог для постоянныйх VIP клиентов',
            'class' => 'footer-last'
        ]
    ];

    // Модифицируем первые три ссылки для каталогов vvp/xxx
    if ($isSpecialCatalog) {
        // Первая ссылка - New York
        $footerItems[0]['url'] = $isEnglish 
            ? 'https://missbliss.su/elite-models/new-york/favorites/natasha/' 
            : 'https://missbliss.su/vip-models/new-york/favorites/natasha/';
        
        // Вторая ссылка - St. Petersburg
        $footerItems[1]['url'] = $isEnglish 
            ? 'https://missbliss.su/elite-models/saint-petersburg/' 
            : 'https://missbliss.su/vip-models/saint-petersburg/';
        
        // Третья ссылка - Moscow
        $footerItems[2]['url'] = $isEnglish 
            ? 'https://missbliss.su/elite-models/moscow/' 
            : 'https://missbliss.su/vip-models/moscow/';
    }

    // Генерация HTML
    $footerHtml = '
                <ul class="footer-menu">';

    foreach ($footerItems as $item) {
        $class = isset($item['class']) ? ' class="' . $item['class'] . '"' : '';
        $footerHtml .= '<li' . $class . '><a href="' . $item['url'] . '" title="' . $item['description'] . '">' . $item['title'] . '</a>';
    }

// Кнопка переключения языка с флажками
$current_uri = $_SERVER["REQUEST_URI"];

if ($isEnglish) {
    // Английская → Русская версия
    $en_link = preg_replace('#^/elite-models/#', '/vip-models/', $current_uri);
    if ($en_link === $current_uri) {
        // Если не было замены vvp, то это обычная английская версия
        $en_link = preg_replace('#^/en/#', '/', $current_uri);
    }
    $en_title = 'Switch to Russian';
    $flagIcon = '<i class="ru-icon"></i>';
} else {
    // Русская → Английская версия
    $en_link = preg_replace('#^/vip-models/#', '/elite-models/', $current_uri);
    if ($en_link === $current_uri) {
        // Если не было замены XXX, то это обычная русская версия
        $en_link = '/en' . $current_uri;
    }
    $en_title = 'Переключить на английский';
    $flagIcon = '<i class="en-icon"></i>';
}

    $footerHtml .= '</ul>
                <ul class="footer-address">
                    <li><i class="fab fa-telegram-plane"></i><a href="https://t.me/TheMissBlissAgency?text=' . ($isEnglish ? 'Hello%20I%20found%20your%20contact%20here%20 ' : 'Привет!%20Я%20нашел%20ваш%20контакт%20здесь%20') . $url . '">Telegram</a>
                    <li><i class="services_icon_05"></i><!--noindex--><a href="mailto:office@lux-escort.com?subject=' . $url . '">@ Email</a><!--/noindex-->
                    <li><a href="' . $en_link . '" title="' . $en_title . '">' . $flagIcon . '</a>
                </ul>
 ';

    return $footerHtml;
}

// Массив английских разделов
$englishSections = ['/en/', '/elite-models/'];

// Определяем язык
$isEnglish = false;
foreach ($englishSections as $section) {
    if (strpos($_SERVER['REQUEST_URI'], $section) === 0) {
        $isEnglish = true;
        break;
    }
}

// Выводим футер
echo generateFooterMenu($isEnglish);
?>