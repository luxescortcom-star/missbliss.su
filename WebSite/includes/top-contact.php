<?php




$now_hours=date('G');
if($now_hours<8){$time='Доброй%20ночи';}
elseif($now_hours<12 && $now_hours>=8 ) {$time='Доброе%20утро';}
elseif($now_hours>=12 && $now_hours<17){$time='Добрый%20день';}
elseif($now_hours>=17 && $now_hours<=23){$time='Добрый%20вечер';}




$script = '/min/g=js-contact';
$slink='m-b.su/social';
$phone='79219000318';
$phone2='7 (921) 9000-318';
$iPhone='+7 (921) 9000-318';
$file='directions/mail/';
$telegram='TheMissBlissAgency';
$city='в Москве и Санкт-Петербурге';
$ilink='ic.m-b.su';
$css='/min/g=contact';
$email='office@lux-escort.com';
$city3='Россия';

$contact='class="current"';

include_once 'links.php';

?>