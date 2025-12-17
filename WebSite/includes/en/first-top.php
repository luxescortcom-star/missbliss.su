<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/links.php';

$hours=date('G');
if($hours<5){$time='Good%20night';}
elseif($hours<12 && $hours>=8 ) {$time='Good%20morning';}
elseif($hours>=12 && $hours<17){$time='Good%20day';}
elseif($hours>=17 && $hours<=23){$time='Good%2evening';}

if ($hours<8){$site='/en/escorts/';}
elseif($hours>=8 && $hours<21 ) {$site='/en/about/';}
elseif($hours>=21){$site='/en/escorts/';}

$days=date('W');
if($days=6 && $days=0){$site='/en/escorts/';}


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

$css='/min/g=first-page';
$ilink='ic.m-b.su';
$slink='m-b.su/social';
$mlink='m-b.su/msk';
$iPhone='+7 (921) 9000-318';
$phone='79219000318';
$telegram='TheMissBlissAgency';
$city2='%20in%20Europe';
$city='If you stay in Europe';
$slick_city='Girls from Moscow and S<span>aint-</span>P<span>eters</span>b<span>urg</span>';
$msk='banner-msk.php';
$spb='banner-spb.php';
$casting='banner-casting.php';



?>