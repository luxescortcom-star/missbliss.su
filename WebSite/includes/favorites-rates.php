<?php
// Подключаем файл с курсом валют
require_once __DIR__.'/rates/currency_config.php';

// Функция для округления до ближайших 500
function roundTo1000($number) {
    return round($number / 1000) * 1000;
}

// Функция для получения текущего курса и пересчета цен
function calculatePrices($usdRate) {
    // Базовые цены в долларах
    $pricesInUSD = [
        '1' => 300,      // 1 час - Первое впечатление
        '2' => 500,      // 2 часа - Свидание
        '3' => 700,      // 3 часа - Немного больше времени
        '4' => 800,      // 4 часа - Свидание с ужином
        '5' => 900,      // 5+ часов (средняя цена)
        '6' => 1000,     // 6 часов - Романтичное свидание
        '12' => 1500,    // 12 часов - От заката до рассвета
        '24' => 2000,    // 24 часа - В омут с головой
        'extra_night' => 1500,   // каждая следующая ночь
        'long_term' => 900       // При закате от 5 дней
    ];

    // Пересчитываем цены в рубли с округлением
    $pricesInRUB = [];
    foreach ($pricesInUSD as $key => $price) {
        $pricesInRUB[$key] = roundTo1000($price * $usdRate);
    }

    return $pricesInRUB;
}

// Получаем текущий курс из подключенного файла
$currentUsdRate = $GLOBALS['currentUsdRate'] ?? 90;

// Получаем актуальные цены
$prices = calculatePrices($currentUsdRate);

// Выводим JavaScript с ценами ДО основного HTML
echo '<script>';
echo 'const PRICES = ' . json_encode($prices) . ';';
echo '</script>';

// Продолжаем вывод обычного HTML
echo '<div class=table-title>
</div>
<div class="fee">
<h3><a href="../"> Фаворитки</a></h3>
<h4><span> '.$prices['2'].'</span> ₽ Свидание 2 ч.</h4>
</div>
<ul>
<li><b> '.$prices['1'].'</b> ₽ Первое впечатление 60 мин.
<li><b> '.$prices['6'].'</b> ₽ романтичное свидание (6ч.)
<li><br><!--noindex--><a href="#fee" title="Подробные цены" rel="nofollow" class="btn fee"><i class="fas fa-ruble-sign"></i> Подробные цены </a><!--/noindex-->
</ul>
   <!--noindex--><a href="#x" class="overlay" rel="nofollow" id="fee"></a><!--/noindex-->
   <div class="popup">
   <div class="pricing-table-second clearfix">
     <h2>'. $name1 . '</h2>
<div class="fee">
<h3><span> '.$prices['2'].'</span>₽ Свидание 2 ч.</h3>
</div>
<ul class="more">
<li><span> '.$prices['1'].' ₽ </span><b>Первое впечатление (60 мин.)</b>
<li><span> '.$prices['3'].' ₽ </span><b>Немного больше времени (3ч.)</b>
<li><span> '.$prices['4'].' ₽ </span><b>Свидание с ужином (4ч.)</b>
<li><span> '.$prices['6'].' ₽ </span><b>Романтичное свидание (6ч.)</b>
<li><span> '.$prices['12'].' ₽ </span><b>От заката до рассвета (12ч.)</b>
<li><span> '.$prices['24'].' ₽ </span><b>В омут с головой (24 часа)</b>
<li><span> '.$prices['extra_night'].' ₽ </span><b>каждая следующая ночь *</b>
<li><p>* При заказе от 5 дней - <b> '.$prices['long_term'].' ₽</b> в сутки<br></p>
</ul><br>';
?>