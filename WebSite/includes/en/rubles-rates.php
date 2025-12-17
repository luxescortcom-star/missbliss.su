<?php

// Подключаем файл с курсом валют
require_once __DIR__.'/../rates/currency_config.php';

// Функция для округления до ближайших 1000
function roundTo1000($number) {
    return round($number / 1000) * 1000;
}

// Функция для округления до ближайших 10000
function roundTo10000($number) {
    return round($number / 10000) * 10000;
}

// Функция для получения текущего курса и пересчета цен
function calculateAttractivePrices($usdRate) {
    // Базовые цены в долларах
    $pricesInUSD = [
        'date_2h' => 350,       // Свидание 2 ч.
        'first_1h' => 250,      // Первое впечатление 60 мин.
        'romantic_6h' => 800,   // Романтичное свидание (6ч.)
        'more_3h' => 450,       // Немного больше времени (3ч.)
        'dinner_4h' => 550,      // Свидание с ужином (4ч.)
        'sunset_12h' => 1000,    // От заката до рассвета (12ч.)
        'full_24h' => 1500,      // В омут с головой (24 часа)
        'extra_night' => 1000,   // каждая следующая ночь
        'long_term' => 700       // При заказе от 5 дней
    ];
    
    // Пересчитываем цены в рубли с округлением
    $pricesInRUB = [];
    foreach ($pricesInUSD as $key => $price) {
        $pricesInRUB[$key] = roundTo10000($price * $usdRate);
    }
    
    return $pricesInRUB;
}
// Функция для получения текущего курса и пересчета цен
function calculateFavoritesPrices($usdRate) {
    // Базовые цены в долларах
    $pricesInUSD = [
        'date_2h' => 500,       // Свидание 2 ч.
        'first_1h' => 300,      // Первое впечатление 60 мин.
        'romantic_6h' => 1000,   // Романтичное свидание (6ч.)
        'more_3h' => 700,       // Немного больше времени (3ч.)
        'dinner_4h' => 800,      // Свидание с ужином (4ч.)
        'sunset_12h' => 1500,    // От заката до рассвета (12ч.)
        'full_24h' => 2000,      // В омут с головой (24 часа)
        'extra_night' => 1500,   // каждая следующая ночь
        'long_term' => 900       // При заказе от 5 дней
    ];
    
    // Пересчитываем цены в рубли с округлением
    $pricesInRUB = [];
    foreach ($pricesInUSD as $key => $price) {
        $pricesInRUB[$key] = roundTo1000($price * $usdRate);
    }
    
    return $pricesInRUB;
}

// Получаем текущий курс из подключенного файла
$currentUsdRate = $GLOBALS['currentUsdRate'] ?? 90; // Значение по умолчанию, если курс не установлен

// Получаем актуальные цены
$prices = calculateAttractivePrices($currentUsdRate);
$prices1 = calculateFavoritesPrices($currentUsdRate);

echo '
<div class="simpleTabsContent">
<div class="pricing-table-second clearfix">
<div class=column>
<div class=table-title>
<h1 style="cursor: pointer; cursor: hand;"><a href="/en/attractive/">Attractive</a></h1>
</div>
<div class=header>
<h2><span>'.$prices['date_2h'].'</span>₽ up to 2 hrs</h2>
</div>
<ul>
<li><span> '.$prices['first_1h'].'₽ </span> The First Impression (60 min.)
<li><span> '.$prices['more_3h'].'₽ </span> A little more time (up to 3 hrs)
<li><span> '.$prices['dinner_4h'].'₽ </span> A date with dinner (up to 4 hrs)
<li><span> '.$prices['romantic_6h'].'₽ </span> Romantic evening (up to 6 hrs)
<li><span> '.$prices['sunset_12h'].'₽ </span> Long sweet nigh(up to 12 hrs)
<li><span> '.$prices['full_24h'].'₽ </span> Twenty-four hours of bliss
<li><span> '.$prices['extra_night'].'₽ </span> *Every additional overnight*
<li><p>* from 5 nights or more for each night  <b> '.$prices['long_term'].'₽</b></p>

</ul>
<div class="footer">
<a href="/en/attractive/" class="btn black">Choose <span>a Attractive</span></a>
</div>
</div>
<div class="column last">
<div class=table-title>
<h1 style="cursor: pointer; cursor: hand;"><a href="/en/favorites/">Favorites</a></h1>
</div>
<div class=header>
<h2><span>'.$prices1['date_2h'].'</span>₽ up to 2 hrs</h2>
</div>
<ul>
<li><span> '.$prices1['first_1h'].'₽ </span> The First Impression (60 min.)
<li><span> '.$prices1['more_3h'].'₽ </span> A little more time (up to 3 hrs)
<li><span> '.$prices1['dinner_4h'].'₽ </span> A date with dinner (up to 4 hrs)
<li><span> '.$prices1['romantic_6h'].'₽ </span> Romantic evening (up to 6 hrs)
<li><span> '.$prices1['sunset_12h'].'₽ </span> Long sweet nigh(up to 12 hrs)
<li><span> '.$prices1['full_24h'].'₽ </span> Twenty-four hours of bliss
<li><span> '.$prices1['extra_night'].'₽ </span> *Every additional overnight*
<li><p>* from 5 nights or more for each night  <b> '.$prices1['long_term'].'₽</b></p>

</ul>
<div class="footer">
<a hhref="/en/favorites/" class="btn black" >Choose <span>a Favorite</span></a>
</div>
</div>
</div>
</div>';
?>