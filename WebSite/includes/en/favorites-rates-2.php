<?php
// Подключаем файл с курсом валют
require_once __DIR__.'/../rates/currency_config.php';

// Функция для округления до ближайших 500
function roundTo1000($number) {
    return round($number / 1000) * 1000;
}

// Функция для получения текущего курса и пересчета цен
function calculatePrices($usdRate) {
    // Базовые цены в долларах
    $pricesInUSD = [
        'romantic_6h' => 1978,   // Романтичное свидание (6ч.)
        'more_3h' => 992,       // Немного больше времени (3ч.)
        'sunset_12h' => 2473,    // От заката до рассвета (12ч.)
        'full_24h' => 3710,      // В омут с головой (24 часа)
        'extra_night' => 1978,   // каждая следующая ночь
        'long_term' => 992       // При заказе от 5 дней
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
echo '<div class="fee">
<h3><a href="../" >Favorites</a></h3>
<h4><span>'.$prices['more_3h'].'</span> ₽  Romantic date</h4>
</div>
<ul>
<li><b>'.$prices['more_3h'].'  ₽ </b> - minimum order
<li><span>'.$prices['romantic_6h'].'  ₽ </span> - Romantic evening 
<li><br><!--noindex--><a href=#fee title="fee" rel="nofollow" class="btn fee"><i class="fas fa-dollar-sign"></i> Detailed Rates </a><!--/noindex-->
</ul>
 <!--noindex--><a href="#x" class="overlay" rel="nofollow" id="fee"></a><!--/noindex-->
   <div class="popup">
   <div class="pricing-table-second clearfix">
     <h2>' . $name1 . '</h2>
<div class="fee">
<h3><span>'.$prices['more_3h'].'</span> ₽  Romantic date </h3>
</div>
<ul class="more">
<li><span>'.$prices['romantic_6h'].'  ₽ </span><b>Romantic evening (up to 6 hrs)</b>
<li><span>'.$prices['sunset_12h'].'  ₽ </span><b>Long sweet night (up to 12 hrs)</b>
<li><span>'.$prices['full_24h'].'  ₽ </span> <b>Twenty-four hours of bliss</b>
<li><span>'.$prices['extra_night'].'  ₽ </span><b>Every additional night *</b>
<li><p>* The orders from 5 nights or more -  '.$prices['long_term'].'  ₽  for every night<br>
</ul><br>';
?>