<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/links.php';


require_once $_SERVER['DOCUMENT_ROOT'] . '/mobile-detect/Mobile_Detect.php';
$detect=new Mobile_Detect;

if ( $detect->isMobile() ) {
    $lazy='class="lazyload img-responsive"';
    $data='data-';
	$lazymobile='class="lazyload img-responsive"';
    $datamobile='data-';
	$folder_full='f2';

}
elseif( $detect->isTablet() ){
    $lazy='class="lazyload img-responsive"';
    $data='data-';
	$folder_full='f2';

}
else {
   $folder_full='f3';
    $lazy='class="lazyload img-responsive"';
    $data='data-';

};

$escorts='class="current"';




require_once $_SERVER['DOCUMENT_ROOT'] . '/geoip/geoplugin.class.php';
$geoplugin=new geoPlugin();
$geoplugin->locate();
$city_code=$geoplugin->city;
$countryCode=$geoplugin->countryCode;
$countryCode=strtolower($countryCode);

if ($countryCode.'.'.$city_code=='ru.St Petersburg')
{
$css='/min/g=portfolio';
$link1='m-b.su/spb';
$link2='m-b.su/spb';
$link3='m-b.su/spb';
$link4='m-b.su/msk';
$link5='m-b.su/msk';
$link6='m-b.su/msk';
$link7='m-b.su/krasnodar';
$link8='m-b.su/ekb';
$link9='m-b.su/chel';
$link10='m-b.su/rnd';
$link11='m-b.su/kazan';
$ilink='ic.m-b.su';
$slink='m-b.su/social';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='TheMissBlissAgency';
$city3='Saint-Petersburg, Russia';
 $vasilisa='hide';

}

elseif ($countryCode.'.'.$city_code=='ru.Moscow')
{
$css='/min/g=portfolio';
$link1='m-b.su/spb';
$link2='m-b.su/spb';
$link3='m-b.su/spb';
$link4='m-b.su/msk';
$link5='m-b.su/msk';
$link6='m-b.su/msk';
$link7='m-b.su/krasnodar';
$link8='m-b.su/ekb';
$link9='m-b.su/chel';
$link10='m-b.su/rnd';
$link11='m-b.su/kazan';
$ilink='ic.m-b.su';
$slink='m-b.su/social';
$telegram='TheMissBlissAgency';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$city3='Moscow, Russia';
}


elseif (($countryCode.'.'.$city_code=='ru.Klimovsk')OR($countryCode.'.'.$city_code=='ru.Podolsk'))
{
$css='/min/g=portfolio';
$link1='m-b.su/spb';
$link2='m-b.su/spb';
$link3='m-b.su/spb';
$link4='m-b.su/msk';
$link5='m-b.su/msk';
$link6='m-b.su/msk';
$link7='m-b.su/krasnodar';
$link8='m-b.su/ekb';
$link9='m-b.su/chel';
$link10='m-b.su/rnd';
$link11='m-b.su/kazan';
$slink='m-b.su/social';
$ilink='ic.m-b.su';
$slink='m-b.su/social';
$telegram='TheMissBlissAgency';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$alina='hide';
$city3='Russia';

}


elseif (($countryCode=='kz')OR($countryCode=='az')OR($countryCode=='ge')OR($countryCode=='by')OR($countryCode=='ru'))
{
$css='/min/g=portfolio';
$link1='m-b.su/spb';
$link2='m-b.su/spb';
$link3='m-b.su/spb';
$link4='m-b.su/msk';
$link5='m-b.su/msk';
$link6='m-b.su/msk';
$link7='m-b.su/krasnodar';
$link8='m-b.su/ekb';
$link9='m-b.su/chel';
$link10='m-b.su/rnd';
$link11='m-b.su/kazan';
$slink='m-b.su/social';
$ilink='ic.m-b.su';
$slink='m-b.su/social';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$telegram='TheMissBlissAgency';
$city3='Russia';
}


elseif (($countryCode=='us')OR($countryCode=='ca')OR($countryCode=='mx')OR($countryCode=='ag')OR($countryCode=='br')OR($countryCode=='cl'))
{
$css='/min/g=portfolio';
$link1='m-b.su/spb';
$link2='m-b.su/spb';
$link3='m-b.su/spb';
$link4='m-b.su/msk';
$link5='m-b.su/msk';
$link6='m-b.su/msk';
$link7='m-b.su/krasnodar';
$link8='m-b.su/ekb';
$link9='m-b.su/chel';
$link10='m-b.su/rnd';
$link11='m-b.su/kazan';
$slink='m-b.su/social';
$ilink='ic.m-b.su';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='TheMissBlissAgency';
$city3='Russia';

}
elseif (($countryCode=='fi')OR($countryCode=='lt')OR($countryCode=='ee')OR($countryCode=='lv'))
{
$css='/min/g=portfolio';
$link1='m-b.su/spb';
$link2='m-b.su/spb';
$link3='m-b.su/spb';
$link4='m-b.su/msk';
$link5='m-b.su/msk';
$link6='m-b.su/msk';
$link7='m-b.su/krasnodar';
$link8='m-b.su/ekb';
$link9='m-b.su/chel';
$link10='m-b.su/rnd';
$link11='m-b.su/kazan';
$ilink='ic.m-b.su';
$slink='m-b.su/social';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='TheMissBlissAgency';
$city3='Russia';

}
else
{
$css='/min/g=portfolio';
$link1='m-b.su/spb';
$link2='m-b.su/spb';
$link3='m-b.su/spb';
$link4='m-b.su/msk';
$link5='m-b.su/msk';
$link6='m-b.su/msk';
$link7='m-b.su/krasnodar';
$link8='m-b.su/ekb';
$link9='m-b.su/chel';
$link10='m-b.su/rnd';
$link11='m-b.su/kazan';
$ilink='ic.m-b.su';
$slink='m-b.su/social';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='TheMissBlissAgency';
$city3='Russia';

}
?>