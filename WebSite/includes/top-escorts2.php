<?php




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
}
elseif( $detect->isTablet() ){
    $lazy='class="lazyload"';
    $data='data-';
    $viber='<a href="viber://chat?number=79219000318">Viber</a>';
}
else {

   $viber='<a title="Должен быть устоновлен Viber для ПК" href="viber://chat?number=+79219000318">Viber</a>';
};

require_once $_SERVER['DOCUMENT_ROOT'] . '/geoip/geoplugin.class.php';
$geoplugin=new geoPlugin();
$geoplugin->locate();
$city_code=$geoplugin->city;
$countryCode=$geoplugin->countryCode;
$countryCode=strtolower($countryCode);

if ($countryCode.'.'.$city_code=='ru.St Petersburg')
{
$css='/min/g=portfolio2';
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
$ilink='ic.m-b.su';
$slink='m-b.su/social';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='JoyProvocateur';
$city3='Санкт-Петербург';
$kira='hide';
}
elseif ($countryCode.'.'.$city_code=='ru.Tomsk')
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
$ilink='ic.m-b.su';
$slink='m-b.su/social';
$telegram='AndrewAngels';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$city3='Выборг';
$angeline='hide';
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
$ilink='ic.m-b.su';
$slink='m-b.su/social';
$telegram='AndrewAngels';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$city3='Москва';
}
elseif ($countryCode.'.'.$city_code=='ru.Krasnodar')
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
$ilink='ic.m-b.su';
$slink='m-b.su/social';
$telegram='AndrewAngels';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$city3='Краснодар';
}

elseif ($countryCode.'.'.$city_code=='ru.Ekaterinburg')
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
$ilink='ic.m-b.su';
$slink='m-b.su/social';
$telegram='AndrewAngels';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$city3='Екатеринбург';
}

elseif ($countryCode.'.'.$city_code=='ru.Orenburg')
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
$ilink='ic.m-b.su';
$slink='m-b.su/social';
$telegram='AndrewAngels';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$crystal='hide';
$city3='Оренбург';
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
$slink='m-b.su/social';
$ilink='ic.m-b.su';
$telegram='AndrewAngels';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$alina='hide';
$city3='Москва';
}
elseif (($countryCode.'.'.$city_code=='ru.Tula')OR($countryCode.'.'.$city_code=='ru.Aleksin'))
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
$slink='m-b.su/social';
$ilink='ic.m-b.su';
$telegram='AndrewAngels';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$camilla='hide';
$city3='Россия';
}

elseif (($countryCode.'.'.$city_code=='ru.Stavropol')OR($countryCode.'.'.$city_code=='ru.Kemerovo'))
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
$slink='m-b.su/social';
$ilink='ic.m-b.su';
$telegram='AndrewAngels';
$veronica='hide';
$virgin='hide';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$crystal='hide';
$city3='Россия';
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
$slink='m-b.su/social';
$ilink='ic.m-b.su';
$phone='79214248822';
$iPhone='+7 (921) 424-88-22';
$telegram='JoyProvocateur';
$crystal='hide';
$city3='Россия';

}
elseif (($countryCode=='us')OR($countryCode=='ca')OR($countryCode=='mx')OR($countryCode=='ag')OR($countryCode=='br')OR($countryCode=='cl'))
{
$css='/min/g=portfolio-us';
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
$slink='m-b.su/social';
$ilink='ic.m-b.su';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='JoyProvocateur';
$crystal='hide';
$city3='Россия';

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
$ilink='ic.m-b.su';
$slink='m-b.su/social';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='JoyProvocateur';
$city3='Россия';

}
else
{
$css='/min/g=portfolio-de';
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
$slink='m-b.su/social';
$ilink='ic.m-b.su';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='JoyProvocateur';
$city3='Россия';

}
?>