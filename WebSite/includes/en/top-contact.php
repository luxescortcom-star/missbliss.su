<?php




$now_hours=date('G');
if($now_hours<8){$time='Good%20night';}
elseif($now_hours<12 && $now_hours>=8 ) {$time='Good%20morning';}
elseif($now_hours>=12 && $now_hours<17){$time='Good%20day';}
elseif($now_hours>=17 && $now_hours<=23){$time='Good%20evening';}

$script = '/min/g=js-contact';
$slink='m-b.su/social';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$file='directions/en/mail/';
$telegram='TheMissBlissAgency';
$city='Russia';
$ilink='ic.m-b.su';
$css='/min/g=contact';
$email='office@lux-escort.com';
$city3='Russia';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/links.php';
?>