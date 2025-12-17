<?php


require_once $_SERVER['DOCUMENT_ROOT'] . ('/geoip/geoplugin.class.php');
$geoplugin=new geoPlugin();
$geoplugin->locate();
$city_code=$geoplugin->city;
$countryCode=$geoplugin->countryCode;
$countryCode=strtolower($countryCode);


if ($countryCode.'.'.$city_code=='ru.St Petersburg')
{
$css='/min/g=profile';
$flink='4il.us/spb';
$blink='m-b.su/spb';
}
elseif (($countryCode=='kz')OR($countryCode=='az')OR($countryCode=='ge')OR($countryCode=='by')OR($countryCode=='ua')OR($countryCode=='ru'))
{
$css='/min/g=profile-msk';
$flink='msk.4il.us/spb';
$blink='pic.4il.us/spb';
}
elseif (($countryCode=='us')OR($countryCode=='ca')OR($countryCode=='mx')OR($countryCode=='ag')OR($countryCode=='br')OR($countryCode=='cl'))
{
$css='/min/g=profile-us';
$flink='missbliss.us/spb';
$blink='missbliss.us/spb';
}
elseif (($countryCode=='fi')OR($countryCode=='lt')OR($countryCode=='ee')OR($countryCode=='lv'))
{
$css='/min/g=profile';
$flink='4il.us/spb';
$blink='m-b.su/spb';
}
else
{
$css='/min/g=profile-de';
$flink='m-b.su/spb';
$blink='m-b.su/spb';
};
?>