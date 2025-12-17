<?php
ob_start("ob_gzhandler");


$now_hours=date('G');
if($now_hours<8){$time='Доброй%20ночи';}
elseif($now_hours<12 && $now_hours>=8 ) {$time='Доброе%20утро';}
elseif($now_hours>=12 && $now_hours<17){$time='Добрый%20день';}
elseif($now_hours>=17 && $now_hours<=23){$time='Добрый%20вечер';}


$city3='Россия';
$symbol='р.';
$symbol1='&#8381;';


$rublesRates='<li><a href="#Rates in Russian Rubles" title="Rates in Russian Rubles">RUB</a></li>';
#$localeRates='<li><a href="#Rates in Dollars">In local currency</a></li>';
$rubles_rates='rubles-rates.php';
#$locale_rates='dollars-rates.php';


include_once (__ROOT__. '/includes/links.php');


?>