<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/links.php';


$now_hours=date('G');
if($now_hours<8){$time='Доброй%20ночи';}
elseif($now_hours<12 && $now_hours>=8 ) {$time='Доброе%20утро';}
elseif($now_hours>=12 && $now_hours<17){$time='Добрый%20день';}
elseif($now_hours>=17 && $now_hours<=23){$time='Добрый%20вечер';}



include_once $_SERVER['DOCUMENT_ROOT'] . '/mobile-detect/Mobile_Detect.php';
$detect=new Mobile_Detect;

if ( $detect->isMobile() ) {
    $lazy='class="lazyload"';
    $data='data-';
    $viber='<a href="viber://chat?number=79219000318">Viber</a>';
} else {

   $viber='<a title="Должен быть устоновлен Viber для ПК" href="viber://chat?number=+79219000318">Viber</a>';
}

if( $detect->isTablet() ){
    $lazy='class="lazyload"';
    $data='data-';
    $viber='<a href="viber://chat?number=79219000318">Viber</a>';
};

include_once $_SERVER['DOCUMENT_ROOT'] . '/geoip/geoplugin.class.php';
$geoplugin=new geoPlugin();
$geoplugin->locate();
$city_code=$geoplugin->city;
$countryCode=$geoplugin->countryCode;
$countryCode=strtolower($countryCode);

if ($countryCode.'.'.$city_code=='ru.St Petersburg')
{
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$file='directions/en/job/';
$city='in Saint-Petersburg';
$city2='%20in%20Saint-Petersburg';
$city3='Saint-Petersburg, Russia';
$telegram='TheMissBlissAgency';
$ilink='ic.m-b.su';
$css='/min/g=casting';
$slink='m-b.su/social/agency';
}

elseif ($countryCode.'.'.$city_code=='ru.Moscow')
{
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$file='directions/en/job/';
$city='in Moscow';
$city2='%20in%20Moscow';
$city3='Moscow';
$telegram='AndrewAngels';
$ilink='ic.m-b.su';
$css='/min/g=casting';
$slink='m-b.su/social/agency';
}

elseif (($countryCode=='kz')OR($countryCode=='az')OR($countryCode=='ge')OR($countryCode=='by')OR($countryCode=='ua')OR($countryCode=='ru'))
{
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$file='directions/en/job/';
$city='in Russia';
$city2='%20in%20Russia';
$city3='Россия';
$telegram='TheMissBlissAgency';
$ilink='ic.m-b.su';
$css='/min/g=casting';
$slink='m-b.su/social/agency';
}

elseif (($countryCode=='us')OR($countryCode=='ca')OR($countryCode=='mx')OR($countryCode=='ag')OR($countryCode=='br')OR($countryCode=='cl'))
{
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$file='directions/en/job/';
$city='in USA';
$city2='%20in%20USA';
$city3='USA';
$telegram='TheMissBlissAgency';
$ilink='ic.m-b.su';
$css='/min/g=casting';
$slink='m-b.su/social/agency';
}
elseif (($countryCode=='fi')OR($countryCode=='lt')OR($countryCode=='ee')OR($countryCode=='lv'))
{
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$file='directions/en/job/';
$city='in Baltic States and Finland';
$city2='%20in%20Baltic%20States%20and%20Finland';
$city3='Baltic States and Finland';
$telegram='AndrewAngels';
$ilink='ic.m-b.su';
$css='/min/g=casting';
$slink='m-b.su/social/agency';
}
else
{
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$file='directions/en/job/';
$city='in Europe';
$city2='%20in%20Europe';
$city3='WORLDWIDE';
$telegram='TheMissBlissAgency';
$ilink='ic.m-b.su';
$css='/min/g=casting';
$slink='m-b.su/social/agency';
}
?>