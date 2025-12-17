<?php
ob_start("ob_gzhandler");



$now_hours=date('G');
if($now_hours<8){$time='Доброй%20ночи';}
elseif($now_hours<12 && $now_hours>=8 ) {$time='Доброе%20утро';}
elseif($now_hours>=12 && $now_hours<17){$time='Добрый%20день';}
elseif($now_hours>=17 && $now_hours<=23){$time='Добрый%20вечер';}



require_once $_SERVER['DOCUMENT_ROOT'] . '/mobile-detect/Mobile_Detect.php';
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


require_once $_SERVER['DOCUMENT_ROOT'] . '/geoip/geoplugin.class2.php';
$geoplugin=new geoPlugin();
$geoplugin->locate();
$currencyCode=$geoplugin->currencyCode;
$city_code=$geoplugin->city;
$countryCode=$geoplugin->countryCode;
$countryCode=strtolower($countryCode);

if ($countryCode.'.'.$city_code=='ru.St Petersburg')
{
$phone='79219000318';
$telegram='JoyProvocateur';
$ilink='ic.m-b.su';
$css='/min/g=rates';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='JoyProvocateur';
$city3='Санкт-Петербург';
 $symbol='р.';
 $symbol1='&#8381;';
$localerates='<li><a href="#Rates in Local Currency">Rubles</a></li>';
$localerates2='<li><a href="#Rates in  US Dollars">US Dollars</a></li>';
$localephp='locale-rates2.php';
$locale2php='dollars-rates.php';
$discr2='discr2.php';
}
elseif ($countryCode.'.'.$city_code=='ru.Moscow')
{
$phone='79219000318';
$telegram='AndrewAngels';
$ilink='ic.m-b.su';
$css='/min/g=rates';
$telegram='AndrewAngels';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$city3='Москва';
 $symbol='р.';
 $symbol1='&#8381;';
$localerates='<li><a href="#Rates in Local Currency">Rubles</a></li>';
$localerates2='<li><a href="#Rates in  US Dollars">US Dollars</a></li>';
$localephp='locale-rates2.php';
$locale2php='dollars-rates.php';
$discr='discr.php';
}
elseif ($countryCode=='ru')
{
$phone='79219000318';
$telegram='JoyProvocateur';
$ilink='ic.m-b.su';
$css='/min/g=rates';
$telegram='AndrewAngels';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$city3='Россия';
 $symbol='р.';
 $symbol1='&#8381;';
$localerates='<li><a href="#Rates in Local Currency">Рубли</a></li>';
$localerates2='<li><a href="#Rates in  US Dollars">US Dollars</a></li>';
$localephp='locale-rates2.php';
$locale2php='dollars-rates.php';
$discr='discr.php';
}
elseif (($countryCode=='ru') && ($currencyCode=='null' || $currencyCode==''))
{
$phone='79219000318';
$telegram='JoyProvocateur';
$ilink='ic.m-b.su';
$css='/min/g=rates';
$telegram='AndrewAngels';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$city3='Россия';
 $symbol='р.';
 $symbol1='&#8381;';
$localerates2='<li><a href="#Rates in US Dollars">US Dollars</a></li>';
$locale2php='dollars-rates.php';
$discr='discr_en.php';
}
elseif (($countryCode=='kz')||($countryCode=='az')||($countryCode=='ge')||($countryCode=='by')||($countryCode=='ua'))
{
$phone='79219000318';
$telegram='JoyProvocateur';
$ilink='ic.m-b.su';
$css='/min/g=rates';
$telegram='AndrewAngels';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$city3='Россия';
 $symbol='р.';
 $symbol1='&#8381;';
$localerates='<li><a href="#Rates in Local Currency">Локальная валюта</a></li>';
$localerates2='<li><a href="#Rates in US Dollars">US Dollars</a></li>';
$localephp='locale-rates2.php';
$locale2php='dollars-rates.php';
$discr='discr.php';
}
elseif ($countryCode=='us')
{
$phone='79219000318';
$telegram='JoyProvocateur';
$ilink='ic.m-b.su';
$css='/min/g=rates';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='JoyProvocateur';
$city3='Россия';
$localerates2='<li><a href="#Rates in  US Dollars">US Dollars</a></li>';
$locale2php='dollars-rates.php';

}
elseif (($countryCode=='us')||($countryCode=='ca')||($countryCode=='mx')||($countryCode=='ag')||($countryCode=='br')||($countryCode=='cl'))
{
$phone='79219000318';
$telegram='JoyProvocateur';
$ilink='ic.m-b.su';
$css='/min/g=rates';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='JoyProvocateur';
$city3='Россия';
$localerates='<li><a href="#Rates in Local Currency">Локальная валюта</a></li>';
$localerates2='<li><a href="#Rates in  US Dollars">US Dollars</a></li>';
$localephp='locale-rates2.php';
$locale2php='dollars-rates.php';
$discr='discr.php';
}
elseif (($countryCode=='fi')||($countryCode=='ee')||($countryCode=='lv'))
{
$phone='79219000318';
$telegram='JoyProvocateur';
$ilink='ic.m-b.su';
$css='/min/g=rates';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='JoyProvocateur';
$city3='Россия';
$localerates='<li><a href="#Rates in Local Currency">Локальная валюта</a></li>';
$localerates2='<li><a href="#Rates in  US Dollars">US Dollars</a></li>';
$localephp='locale-rates2.php';
$locale2php='dollars-rates.php';
$discr='discr.php';
}
elseif  (($countryCode=='null')||($countryCode==''))
{
$phone='79219000318';
$telegram='JoyProvocateur';
$ilink='ic.m-b.su';
$css='/min/g=rates';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='JoyProvocateur';
$city3='Россия';
$localerates2='<li><a href="#Rates in  US Dollars">US Dollars</a></li>';
$locale2php='dollars-rates.php';
$discr='discr_en.php';
}
else
{
$phone='79219000318';
$telegram='JoyProvocateur';
$ilink='ic.m-b.su';
$css='/min/g=rates';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='JoyProvocateur';
$city3='Россия';
$localerates='<li><a href="#Rates in Local Currency">Локальная валюта</a></li>';
$localerates2='<li><a href="#Rates in  US Dollars">US Dollars</a></li>';
$localephp='locale-rates2.php';
$locale2php='dollars-rates.php';
$discr='discr.php';
}
?>