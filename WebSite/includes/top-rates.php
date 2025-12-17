<?php
ob_start("ob_gzhandler");


$now_hours=date('G');
if($now_hours<8){$time='Доброй%20ночи';}
elseif($now_hours<12 && $now_hours>=8 ) {$time='Доброе%20утро';}
elseif($now_hours>=12 && $now_hours<17){$time='Добрый%20день';}
elseif($now_hours>=17 && $now_hours<=23){$time='Добрый%20вечер';}

$css='/min/g=rates';
$script = '/min/g=js-price';
$symbol='р.';
$symbol1='&#8381;';

$locale_rates='<li><a href="#Rates in Local Currency">RUB</a></li>';
#$localerates2='<li><a href="#Rates in Dollars">Локальная валюта</a></li>';
$localerates='localerates.php';
#$locale2php='dollars-rates.php';
#$discr='/includes/discr.php';


include_once (__DIR__ . '/links.php');

?>