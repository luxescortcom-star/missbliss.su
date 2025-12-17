<?php




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
	$folder_full='f2';
    $folder_b='b2/';

}
elseif( $detect->isTablet() ){
    $lazy='class="lazyload"';
    $data='data-';
	$folder_full='f2';
    $folder_b='b2/';

}
else {
   $lazy='class="lazyload"';
    $data='data-';
	$folder_b='b3/';
   $folder_full='f3';

};

$script='/min/g=js_pic';
$css='/min/g=portfolio';
$vip='m-b.su/vip/spb';
$link1='m-b.su/spb';
$link2='m-b.su/spb';
$link3='m-b.su/spb';
$link4='m-b.su/msk';
$link5='m-b.su/msk';
$link6='m-b.su/msk';
$link7='m-b.su/krasnodar';
$link8='m-b.su/ekb';
$link9='m-b.su/chel';
$link10='m-b.su/rnd';
$link11='m-b.su/kazan';
$ilink='ic.m-b.su';
$slink='m-b.su/social';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='TheMissBlissAgency';
$city3='Санкт-Петербург';
 $vasilisa='hide';

include_once (__DIR__ . '/links.php');
?>