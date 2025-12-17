<?php
ob_start("ob_gzhandler");

require_once $_SERVER['DOCUMENT_ROOT'] . '/mobile-detect/Mobile_Detect.php';
$detect=new Mobile_Detect;

if ( $detect->isMobile() ) {
    $folder='b2';
    $viber='<a href="viber://chat?number=79219000318">Viber</a>';
} else {
    $folder='b3';
    $viber='<a title="Need install Viber for PC or Mac" href="viber://chat?number=+79219000318">Viber</a>';
}

if( $detect->isTablet() ){
    $folder='b3';
}

$escorts='class="current"';

require_once $_SERVER['DOCUMENT_ROOT'] . '/geoip/geoplugin.class2.php';
$geoplugin=new geoPlugin();
$geoplugin->locate();
$city_code=$geoplugin->city;
$countryCode=$geoplugin->countryCode;
$countryCode=strtolower($countryCode);

if ($countryCode.'.'.$city_code=='ru.St Petersburg')
{
$css='/min/g=profile';
$flink='m-b.su/rnd';
$blink='m-b.su/rnd';
$slink='m-b.su/social/rnd';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='TheMissBlissAgency';
}
elseif (($countryCode=='kz')OR($countryCode=='az')OR($countryCode=='ge')OR($countryCode=='by')OR($countryCode=='ua')OR($countryCode=='ru'))
{
$css='/min/g=profile';
$flink='m-b.su/rnd';
$blink='m-b.su/rnd';
$slink='m-b.su/social/rnd';
$telegram='AndrewAngels';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
}
elseif (($countryCode=='us')OR($countryCode=='ca')OR($countryCode=='mx')OR($countryCode=='ag')OR($countryCode=='br')OR($countryCode=='cl'))
{
$css='/min/g=profile';
$flink='m-b.su/rnd';
$blink='m-b.su/rnd';
$slink='m-b.su/social/rnd';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='TheMissBlissAgency';
}
elseif (($countryCode=='fi')OR($countryCode=='lt')OR($countryCode=='ee')OR($countryCode=='lv'))
{
$css='/min/g=profile';
$flink='m-b.su/rnd';
$blink='m-b.su/rnd';
$slink='m-b.su/social/rnd';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='TheMissBlissAgency';
}
else
{
$css='/min/g=profile';
$flink='m-b.su/rnd';
$blink='m-b.su/rnd';
$slink='m-b.su/social/rnd';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='TheMissBlissAgency';
}
?>