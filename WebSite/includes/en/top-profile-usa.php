<?php
ob_start("ob_gzhandler");
require_once $_SERVER['DOCUMENT_ROOT'] . '/geoip/geoplugin.class.php';
$geoplugin = new geoPlugin();
$geoplugin->locate();
$city_code = $geoplugin->city;
$countryCode = $geoplugin->countryCode;
$countryCode = strtolower($countryCode);

if (($countryCode.'.'.$city_code=='ru.St Petersburg')OR($countryCode=='fi')OR($countryCode=='fi')OR($countryCode=='ee')OR($countryCode=='lv'))
{
$css='/min/g=profile';
$flink='m-b.su/usa/san-diego';
$blink='m-b.su/usa/san-diego';
$slink='m-b.su/social/usa';
}
elseif (($countryCode=='kz')OR($countryCode=='az')OR($countryCode=='ge')OR($countryCode=='by')OR($countryCode=='ua')OR($countryCode=='ru'))
{
$css='/min/g=profile';
$flink='m-b.su/usa/san-diego';
$blink='m-b.su/usa/san-diego';
$slink='m-b.su/social/usa';
}
elseif (($countryCode=='us')OR($countryCode=='ca')OR($countryCode=='mx')OR($countryCode=='ag')OR($countryCode=='br')OR($countryCode=='cl'))
{
$css='/min/g=profile';
$flink='m-b.su/usa/san-diego';
$blink='m-b.su/usa/san-diego';
$slink='m-b.su/social/usa';
}
else
{
$css='/min/g=profile';
$flink='m-b.su/usa/san-diego';
$blink='m-b.su/usa/san-diego';
$slink='m-b.su/social/usa';
}
?>