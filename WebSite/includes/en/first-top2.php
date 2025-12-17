<?php

ob_start("ob_gzhandler");

$now_hours=date('G');
if($now_hours<8){$time='Good%20night';}
elseif($now_hours<12 && $now_hours>=8 ) {$time='Good%20morning';}
elseif($now_hours>=12 && $now_hours<17){$time='Good%20day';}
elseif($now_hours>=17 && $now_hours<=23){$time='Good%2evening';}

require_once $_SERVER['DOCUMENT_ROOT'] .  '/mobile-detect/Mobile_Detect.php';
$detect=new Mobile_Detect;

if ( $detect->isMobile() ) {

    $viber='<a href="viber://chat?number=79219000318">Viber</a>';

} else {

    $viber='<a title="Должен быть устоновлен Viber для ПК" href="viber://chat?number=+79219000318">Viber</a>';

};



$agency='class="current"';

require_once $_SERVER['DOCUMENT_ROOT'] . '/geoip/geoplugin.class.php';
$geoplugin=new geoPlugin();
$geoplugin->locate();
$city_code=$geoplugin->city;
$countryCode=$geoplugin->countryCode;
$countryCode=strtolower($countryCode);

if ($countryCode.'.'.$city_code=='ru.St Petersburg')
{
$css='/min/g=first-page2';
$ilink='ic.m-b.su';
$slink='m-b.su/spb';
$mlink='m-b.su/msk';
$iPhone='+7 (921) 9000-318';
$phone='79219000318';
$telegram='TheMissBlissAgency';
$city2='%20in%20Saint-Petersburg';
$city='in Saint-Petersburg';
$slick_city='Girls from Moscow and S<span>aint-</span>P<span>eters</span>b<span>urg</span>';
$spb='banner-spb.php';
$city3='Saint-Petersburg, Russia';
}

elseif ($countryCode.'.'.$city_code=='ru.Moscow')
{
$css='/min/g=first-page2';
$ilink='ic.m-b.su';
$slink='m-b.su/spb';
$mlink='m-b.su/msk';
$iPhone='+7 (921) 9000-318';
$phone='79219000318';
$telegram='TheMissBlissAgency';
$city2='%20in%20Moscow';
$city='in Moscow';
$slick_city='Girls from Moscow and S<span>aint-</span>P<span>eters</span>b<span>urg</span>';
$msk='banner-msk.php';
$city3='Moscow, Russia';
}

elseif (($countryCode=='kz')OR($countryCode=='az')OR($countryCode=='ge')OR($countryCode=='by')OR($countryCode=='ru'))
{
$css='/min/g=first-page2';
$ilink='ic.m-b.su';
$slink='m-b.su/spb';
$mlink='m-b.su/msk';
$iPhone='+7 (921) 9000-318';
$phone='79219000318';
$telegram='TheMissBlissAgency';
$city2='%20in%20Russia';
$city='Moscow and Saint-Patersburg';
$slick_city='Girls from M<span>o</span>sc<span>ow</span> and S<span>aint-</span>P<span>eters</span>b<span>urg</span>';
$msk='banner-msk.php';
$spb='banner-spb.php';
$casting='banner-casting.php';
$city3='Russia';
}

elseif (($countryCode=='us')OR($countryCode=='ca')OR($countryCode=='mx')OR($countryCode=='ag')OR($countryCode=='br')OR($countryCode=='cl'))
{
$css='/min/g=first-page2';
$ilink='ic.m-b.su';
$slink='m-b.su/spb';
$mlink='m-b.su/msk';
$iPhone='+7 (921) 9000-318';
$phone='79219000318';
$telegram='TheMissBlissAgency';
$city2='%20in%20USA';
$city='If you stay in USA';
$slick_city='Girls from M<span>o</span>sc<span>ow</span> and S<span>aint-</span>P<span>eters</span>b<span>urg</span>';
$msk='banner-msk.php';
$spb='banner-spb.php';
$casting='banner-casting.php';
$city3='Russia';
}

elseif (($countryCode=='fi')OR($countryCode=='lt')OR($countryCode=='ee')OR($countryCode=='lv'))
{
$css='/min/g=first-page2';
$ilink='ic.m-b.su';
$slink='m-b.su/spb';
$mlink='m-b.su/msk';
$iPhone='+7 (921) 9000-318';
$phone='79219000318';
$telegram='TheMissBlissAgency';
$city2='%20The%20Baltic%20states';
$city='The Baltic states';
$slick_city='Girls from M<span>o</span>sc<span>ow</span> and S<span>aint-</span>P<span>eters</span>b<span>urg</span>';
$msk='banner-msk.php';
$spb='banner-spb.php';
$casting='banner-casting.php';
$city3='Russia';
}

else
{
$css='/min/g=first-page2';
$ilink='ic.m-b.su';
$slink='m-b.su/spb';
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
$city3='Russia';
}
?>