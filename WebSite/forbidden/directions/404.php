<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/geoip/geoplugin.class.php';
$geoplugin=new geoPlugin();
$geoplugin->locate();
$city_code=$geoplugin->city;
$countryCode=$geoplugin->countryCode;
$countryCode=strtolower($countryCode);

switch ($countryCode.'.'.$city_code) {

case 'ru.Moscow':
header('Location: https://missbliss.moscow/escorts/', true, 307);
break;

case 'ru.St Petersburg':
header('Location: https://missbliss.spb.ru/escorts/', true, 307);
break;

case 'ru.Krasnodar':
header('Location: /krasnodar/', true, 307);
break;

case 'ru.Yekaterinburg':
header('Location: /ekb/', true, 307);
break;




default:
header('Location: /escorts/', true, 307);
break;

}
?>

