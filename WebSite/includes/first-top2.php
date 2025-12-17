<?php

ob_start("ob_gzhandler");





$now_hours=date('G');
if($now_hours<8){$time='Доброй%20ночи';}
elseif($now_hours<12 && $now_hours>=8 ) {$time='Доброе%20утро';}
elseif($now_hours>=12 && $now_hours<17){$time='Добрый%20день';}
elseif($now_hours>=17 && $now_hours<=23){$time='Добрый%20вечер';}

require_once $_SERVER['DOCUMENT_ROOT'] . '/mobile-detect/Mobile_Detect.php';
$detect=new Mobile_Detect;

if ( $detect->isMobile() ) {


$lazy='class="lazyload"';
$data='data-';




}


$script='/min/g=js';
$css='/min/g=first-page';
$slink='m-b.su/spb';
$mlink='m-b.su/msk';
$ilink='ic.m-b.su';
$iPhone='+7 (921) 9000-318';
$phone='79219000318';
$telegram='TheMissBlissAgency';
$city2='%20в%20Европе';
$city='Если вы в Европе';
$slick_city='Москвы и Питера';
$site='escorts';
$city3='Россия';
$msk='banner-msk.php';
$spb='banner-spb.php';
$casting='banner-casting.php';

include_once 'links.php';
?>