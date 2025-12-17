<?php
ob_start("ob_gzhandler");

$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];

require_once $_SERVER['DOCUMENT_ROOT'] . '/mobile-detect/Mobile_Detect.php';
$detect=new Mobile_Detect;

if ( $detect->isMobile() ) {
    $folder='b2';
	$folder_full='f2';
    
} else {
    $folder='b3';
	$folder_full='f3';
    $spbgirls='spb_vip_girls.php';
}

if( $detect->isTablet() ){
    $folder='b2';
	$folder_full='f2';
}


require_once $_SERVER['DOCUMENT_ROOT'] . '/geoip/geoplugin.class.php';
$geoplugin=new geoPlugin();
$geoplugin->locate();
$city_code=$geoplugin->city;
$countryCode=$geoplugin->countryCode;
$countryCode=strtolower($countryCode);

if ($countryCode.'.'.$city_code=='ru.St Petersburg')
{
$css='/min/g=profile';
$flink='m-b.su/vip/spb';
$flink2='m-b.su/spb';     
$blink='m-b.su/vip/spb';
$blink2='m-b.su/vip/sochi';    
$slink='m-b.su/social/spb';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='TheMissBlissAgency';
$city3='Санкт-Петербург'; 
$city='spb';     
}
elseif (($countryCode=='kz')OR($countryCode=='az')OR($countryCode=='ge')OR($countryCode=='by')OR($countryCode=='ua')OR($countryCode=='ru'))
{
$css='/min/g=profile';
$flink='m-b.su/vip/spb';
$flink2='m-b.su/spb';     
$blink='m-b.su/vip/spb';
$slink='m-b.su/social/spb';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='TheMissBlissAgency';
$city3='Санкт-Петербург';
$city='spb';     
}
elseif (($countryCode=='us')OR($countryCode=='ca')OR($countryCode=='mx')OR($countryCode=='ag')OR($countryCode=='br')OR($countryCode=='cl'))
{
$css='/min/g=profile-us';
$flink='m-b.su/vip/spb';
$flink2='m-b.su/spb';   
$blink='m-b.su/vip/spb';
$blink2='m-b.su/vip/sochi';    
$slink='m-b.su/social/spb';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='TheMissBlissAgency';
$city3='Санкт-Петербург'; 
$city='spb';    
}
elseif (($countryCode=='fi')OR($countryCode=='lt')OR($countryCode=='ee')OR($countryCode=='lv'))
{
$css='/min/g=profile';
$flink='m-b.su/vip/spb';
$flink2='m-b.su/spb';     
$blink='m-b.su/vip/spb';
$blink2='m-b.su/vip/sochi';   
$slink='m-b.su/social/spb';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='TheMissBlissAgency';
$city3='Санкт-Петербург';
$city='spb';     
}
else
{
$css='/min/g=profile';
$flink='m-b.su/vip/spb';
$flink2='m-b.su/spb';     
$blink='m-b.su/vip/spb';
$blink2='m-b.su/vip/sochi';   
$slink='m-b.su/social/spb';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='TheMissBlissAgency';
$city3='Санкт-Петербург';
$city='spb';     
}
?>

