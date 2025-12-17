<?php


$now_hours=date('G');
if($now_hours<8){$time='Доброй%20ночи';}
elseif($now_hours<12 && $now_hours>=8 ) {$time='Доброе%20утро';}
elseif($now_hours>=12 && $now_hours<17){$time='Добрый%20день';}
elseif($now_hours>=17 && $now_hours<=23){$time='Добрый%20вечер';}







$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$file='directions/job/';
$city='МиссБлисс';
$city2='%20в%20Санкт-Петербурге';
$city3='Санкт-Петербург';
$telegram='TheMissBlissAgency';
$ilink='ic.m-b.su';
$css='/min/g=casting';
$slink='m-b.su/social/agency';
$script = '/min/g=js-contact';




include_once 'links.php';

?>