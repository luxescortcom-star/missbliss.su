<?php

ob_start("ob_gzhandler");


$hours=date('G');

if($hours<8){$time='Доброй%20ночи';}
elseif($hours<12 && $hours>=8 ) {$time='Доброе%20утро';}
elseif($hours>=12 && $hours<17){$time='Добрый%20день';}
elseif($hours>=17 && $hours<21){$time='Добрый%20вечер';}
elseif($hours>=21 && $hours<=24){$time='Добрый%20вечер';}

#if ($hours<8){$site='/escorts/';$vip_banner='vip_banner.php';}
#elseif($hours>=8 && $hours<21 ) {$site='/about/';$vip_banner='vip_banner_day.php';}
#elseif($hours>=21){$site='/escorts/';$vip_banner='vip_banner.php';}

$days=date('W');
if($days=6 && $days=0){$site='/escorts/';$vip_banner='vip_banner.php';}

include_once $_SERVER['DOCUMENT_ROOT'] . '/mobile-detect/Mobile_Detect.php';
$detect=new Mobile_Detect;

if ( $detect->isMobile() ) {

$lazy='class="lazyload"';
$data='data-';
$script='/min/g=js';



}

else {

$script='/min/g=js';

   };


$vip_banner='vip_banner.php';

$css='/min/g=first-vip';
$slink='m-b.su/spb';
$mlink='m-b.su/msk';
$ilink='ic.m-b.su';
$iPhone='+7 (921) 9000-318';
$phone='79219000318';
$telegram='TheMissBlissAgency';
$city2='%20в%20Европе';
$city='Если вы в Европе';
$slick_city='Москвы и Питера';
$city3='Россия';
$msk='banner-msk.php';
$spb='banner-spb.php';
$casting='banner-casting.php';


?>