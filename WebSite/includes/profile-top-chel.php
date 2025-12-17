<?php
ob_start("ob_gzhandler");

require_once $_SERVER['DOCUMENT_ROOT'] . '/mobile-detect/Mobile_Detect.php';
$detect=new Mobile_Detect;

if ( $detect->isMobile() ) {
    $folder='b2';
    $viber='<a href="viber://chat?number=79214248822">Viber</a>';
} else {
    $folder='b3';
    $viber='<a title="Должен быть устоновлен Viber для ПК" href="viber://chat?number=+79214248822">Viber</a>';
}

if( $detect->isTablet() ){
    $folder='b3';
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
$flink='m-b.su/chel';
$blink='m-b.su/chel';
$slink='m-b.su/social/chel';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$telegram='TheMissBlissAgency';
$city3='Челябинск';
$city='chel';
$symbol='р.';
$symbol1='&#8381;';
}
elseif ($countryCode=='ru')
{
$css='/min/g=profile';
$flink='m-b.su/chel';
$blink='m-b.su/chel';
$slink='m-b.su/social/chel';
$telegram='TheMissBlissAgency';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$city3='Челябинск';
$city='chel';
$symbol='р.';
$symbol1='&#8381;';
}
elseif (($countryCode=='ru') && ($currencyCode=='null' || $currencyCode==''))
{
$css='/min/g=profile';
$flink='m-b.su/chel';
$blink='m-b.su/chel';
$slink='m-b.su/social/chel';
$telegram='TheMissBlissAgency';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$city3='Челябинск';
$city='chel';
$symbol2='&#36;';
$symbol3='&#36;';
}
elseif (($countryCode=='kz')OR($countryCode=='az')OR($countryCode=='ge')OR($countryCode=='by')OR($countryCode=='ua'))
{
$css='/min/g=profile';
$flink='m-b.su/chel';
$blink='m-b.su/chel';
$slink='m-b.su/social/chel';
$telegram='TheMissBlissAgency';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$city3='Челябинск';
$city='chel';
}
elseif (($countryCode=='us')OR($countryCode=='ca')OR($countryCode=='mx')OR($countryCode=='ag')OR($countryCode=='br')OR($countryCode=='cl'))
{
$css='/min/g=profile';
$flink='m-b.su/chel';
$blink='m-b.su/chel';
$slink='m-b.su/social/chel';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$telegram='TheMissBlissAgency';
$city3='Челябинск';
$city='chel';
}
elseif  (($countryCode=='null')||($countryCode==''))
{
$css='/min/g=profile';
$flink='m-b.su/chel';
$blink='m-b.su/chel';
$slink='m-b.su/social/chel';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$telegram='TheMissBlissAgency';
$symbol2='&#36;';
$symbol3='&#36;';
}
elseif (($countryCode=='fi')OR($countryCode=='lt')OR($countryCode=='ee')OR($countryCode=='lv'))
{
$css='/min/g=profile';
$flink='m-b.su/chel';
$blink='m-b.su/chel';
$slink='m-b.su/social/chel';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$telegram='TheMissBlissAgency';
$city3='Челябинск';
$city='chel';
}
else
{
$css='/min/g=profile';
$flink='m-b.su/chel';
$blink='m-b.su/chel';
$slink='m-b.su/social/chel';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$telegram='TheMissBlissAgency';
$city3='Челябинск';
$city='chel';
}
?>

