<?php
// ccr.php - city code redirect
require_once $_SERVER['DOCUMENT_ROOT'] . '/geoip/geoplugin.class.php';
$geoplugin = new geoPlugin();
$geoplugin->locate();
$city_code = $geoplugin->city;
$countryCode = $geoplugin->countryCode;


switch ($countryCode.'.'.$city_code) {

case 'RU.Moscow':
header('Location: https://missbliss.moscow/en/escorts/', true, 307);
break;

case 'RU.St Petersburg':
header('Location: https://missbliss.spb.ru/en/escorts/', true, 307);
break;

case 'RU.Krasnodar':
header('Location: /en/krasnodar/', true, 307);
break;

case 'RU.Yekaterinburg':
header('Location: /en/ekb/', true, 307);
break;



default:
header('Location: /en/escorts/', true, 307);
break;

}
?>