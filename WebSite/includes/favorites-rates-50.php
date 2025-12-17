<?php
// Подключаем файл с курсом валют
require_once __DIR__.'/rates/currency_config.php';

// Функция для округления до ближайших 500
function roundTo1000($number) {
    return round($number / 10000) * 10000;
}

// Функция для получения текущего курса и пересчета цен
function calculatePrices($usdRate) {
    // Базовые цены в долларах
    $pricesInUSD = [
        'date_2h' => 500,       // Свидание 2 ч.
        'first_1h' => 300,      // Первое впечатление 60 мин.
        'romantic_6h' => 1100,   // Романтичное свидание (6ч.)
        'more_3h' => 800,       // Немного больше времени (3ч.)
        'dinner_4h' => 900,      // Свидание с ужином (4ч.)
        'sunset_12h' => 1700,    // От заката до рассвета (12ч.)
        'full_24h' => 2200,      // В омут с головой (24 часа)
        'extra_night' => 1700,   // каждая следующая ночь
        'long_term' => 1000       // При заказе от 5 дней
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
$prices = calculatePrices($currentUsdRate);

// Выводим таблицу с ценами
echo '<div class=table-title>
</div>
<div class="fee">
<h3><a href="../"> Фаворитки</a></h3>
<h4><span> '.$prices['date_2h'].'</span> ₽ Свидание 2 ч.</h4>
</div>
<ul>
<li><b> '.$prices['first_1h'].'</b> ₽ Первое впечатление 60 мин.
<li><b> '.$prices['romantic_6h'].'</b> ₽ романтичное свидание (6ч.)
<li><br><!--noindex--><a href="#fee" title="Подробные цены" rel="nofollow" class="btn fee"><i class="fas fa-ruble-sign"></i> Подробные цены </a><!--/noindex-->
</ul>
   <!--noindex--><a href="#x" class="overlay" rel="nofollow" id="fee"></a><!--/noindex-->
   <div class="popup">
   <div class="pricing-table-second clearfix">
     <h2>'. $name1 . '</h2>
<div class="fee">
<h3><span> '.$prices['date_2h'].'</span>₽ Свидание 2 ч.</h3>
</div>
<ul class="more">
<li><span> '.$prices['first_1h'].' ₽ </span><b>Первое впечатление (60 мин.)</b>
<li><span> '.$prices['more_3h'].' ₽ </span><b>Немного больше времени (3ч.)</b>
<li><span> '.$prices['dinner_4h'].' ₽ </span><b>Свидание с ужином (4ч.)</b>
<li><span> '.$prices['romantic_6h'].' ₽ </span><b>Романтичное свидание (6ч.)</b>
<li><span> '.$prices['sunset_12h'].' ₽ </span><b>От заката до рассвета (12ч.)</b>
<li><span> '.$prices['full_24h'].' ₽ </span><b>В омут с головой (24 часа)</b>
<li><span> '.$prices['extra_night'].' ₽ </span><b>каждая следующая ночь *</b>
<li><p>* При заказе от 5 дней - <b> '.$prices['long_term'].' ₽</b> в сутки<br></p>
</ul><br>';


?>