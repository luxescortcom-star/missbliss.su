<?php
// Подключаем файл с курсом валют
require_once __DIR__.'/rates/currency_config.php';

// Функция для округления до ближайших 500
function roundTo10000($number) {
    return round($number / 10000) * 10000;
}

// Функция для получения текущего курса и пересчета цен
function calculatePrices($usdRate) {
    // Базовые цены в долларах
    $pricesInUSD = [
		'1' => 250,      // Первое впечатление 60 мин.
        '2' => 350,       // Свидание 2 ч.
        '3' => 450,       // Немного больше времени (3ч.)
        '4' => 550,      // Свидание с ужином (4ч.)
		'5' => 550,      // Свидание с ужином (4ч.)
		'6' => 800,   // Романтичное свидание (6ч.)
        '12' => 1000,    // От заката до рассвета (12ч.)
        '24' => 1500,      // В омут с головой (24 часа)
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
<h3><a href="../"> Модели</a></h3>
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