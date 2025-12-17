<?php 
ob_start("ob_gzhandler");

require_once $_SERVER['DOCUMENT_ROOT'] . '/mobile-detect/Mobile_Detect.php';
$detect=new Mobile_Detect;

if ( $detect->isMobile() ) {
    $folder='b2';
    $viber='<a href="viber://chat?number=79214248822">Viber</a>';
} else {
    $folder='b3';
    $viber='<a title="Need install Viber for PC or Mac" href="viber://chat?number=+79214248822">Viber</a>';
}

if( $detect->isTablet() ){
    $folder='b3';
}

$escorts='class="current"';

require_once $_SERVER['DOCUMENT_ROOT'] . '/geoip/geoplugin.class.php';
$geoplugin=new geoPlugin();
$geoplugin->locate();
$city_code=$geoplugin->city;
$countryCode=$geoplugin->countryCode;
$countryCode=strtolower($countryCode);

if ($countryCode.'.'.$city_code=='ru.St Petersburg')
{
$css='/min/g=profile';
$flink='m-b.su/sochi';
$blink='m-b.su/sochi';
$slink='m-b.su/social/sochi';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';	
$telegram='JoyProvocateur';	
}
elseif (($countryCode=='kz')OR($countryCode=='az')OR($countryCode=='ge')OR($countryCode=='by')OR($countryCode=='ua')OR($countryCode=='ru'))
{
$css='/min/g=profile';
$flink='msk.4il.us/sochi';
$blink='m-b.su/sochi';
$slink='msk.4il.us/social/sochi';
$telegram='AndrewAngels';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';	
}
elseif (($countryCode=='us')OR($countryCode=='ca')OR($countryCode=='mx')OR($countryCode=='ag')OR($countryCode=='br')OR($countryCode=='cl'))
{
$css='/min/g=profile-us';
$flink='missbliss.us/sochi';
$blink='missbliss.us/sochi';
$slink='missbliss.us/social/sochi';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';	
$telegram='JoyProvocateur';	
}
elseif (($countryCode=='fi')OR($countryCode=='lt')OR($countryCode=='ee')OR($countryCode=='lv'))
{
$css='/min/g=profile';
$flink='m-b.su/sochi';
$blink='m-b.su/sochi';
$slink='m-b.su/social/sochi';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';	
$telegram='JoyProvocateur';	
}
else
{
$css='/min/g=profile-de';
$flink='m-b.su/sochi';
$blink='m-b.su/sochi';
$slink='m-b.su/social/sochi';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';	
$telegram='JoyProvocateur';	
}
?>