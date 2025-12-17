<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);


$geo_file = __DIR__ . '/../geo_domain_redirect.php';
if (file_exists($geo_file)) {
    require_once $geo_file;
    GeoDomainRedirect::redirectByGeo();
} else {
    // Файл не найден, продолжаем выполнение
    error_log("Geo redirect file not found: " . $geo_file);
}



$name = 'vip';
$picsFolio = 'vip';

$title = 'Элитное эскорт агентство МиссБлисс | VIP-модели Москвы и Санкт-Петербурга';
$description = 'Эскорт агентство премиум-класса в Москве и СПб, а также в других городах России. Подбор моделей для мероприятий и отдыха. Фото без обработки, проверенные анкеты, конфиденциальность.';
$keywords = 'элитный эскорт, эскорт агентство, vip модели москва, проверенные эскортницы, спутницы для мероприятий, эскорт спб, красивые модели агентства';
$canonical = 'https://missbliss.su/';
$fxt = 'jpg';

define('__ROOT__', dirname(dirname(__FILE__)));

// Проверяем существование файлов перед включением
$first_top_file = __ROOT__ . '/includes/first-top.php';
if (file_exists($first_top_file)) {
    include_once($first_top_file);
} else {
    error_log("File not found: " . $first_top_file);
}

?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
<meta name="theme-color" content="#050f35">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
$vip_head_file = __ROOT__ . '/includes/vip-head.php';
if (file_exists($vip_head_file)) {
    include_once($vip_head_file);
}

$styles_file = __ROOT__ . '/includes/styles-first-page.php';
if (file_exists($styles_file)) {
    include_once($styles_file);
}
?>
</head>
<body>
<?php 
$menu_file = __ROOT__ . '/includes/menu2.php';
if (file_exists($menu_file)) {
    include_once($menu_file);
}
?>
<div class="perspective_container">
<div id="header-bg"></div>

<div id="body-wrapper" class="wrapper">
<div id="header">
<!--noindex--><a href="#" rel="nofollow" id="logo"></a><!--/noindex-->

<?php 
$menu_file = __ROOT__ . '/includes/menu.php';
if (file_exists($menu_file)) {
    include_once($menu_file);
}
?>

</div>
</div>
<div id="slider">
<div class="fullwidthbanner-container">
<div class="fullwidthbanner">
<ul>
<li data-transition="fade" data-slotamount=10 data-thumb="https://ic.m-b.su/thumbs/thumb1.jpg">
<img src=https://ic.m-b.su/slides/t1.jpg width=218 height=55 alt="">
<div class="caption lft" data-x=185  data-y=-16 data-speed=700 data-start=0 data-easing=easeOutExpo><img src=https://ic.m-b.su/slides/c1.png width=226 height=470 alt=luxury></div>
<div class="caption lfl" data-x=0 data-y=-16 data-speed=1500 data-start=200 data-easing=easeInQuint><img src=https://ic.m-b.su/slides/l1.png width=185 height=470 alt="Sexy girl"></div>
<div class="caption lfr" data-x=410 data-y=-16 data-speed=1500 data-start=200 data-easing=easeInQuint><img src=https://ic.m-b.su/slides/r1.png width=206 height=470 alt="Sexy girl"></div>
<div class="caption lft big_white"  data-x=610 data-y=120 data-speed=400 data-start=500 data-easing=easeOutExpo>VIP Catalog</div>
<div class="caption lfb medium-white" data-x=610 data-y=180 data-speed=400 data-start=900 data-easing=easeOutExpo>Limited Access</div>
<div class="caption lfr err_text" data-x=610 data-y=240 data-speed=300 data-start=1000 data-easing=easeOutExpo>If you have access to VIP directory<br> press the button and enter your login and password</div>
<div class="caption sfb" data-x=610 data-y=300 data-speed=1000 data-start=1400 data-easing=easeOutBack onclick="/elite-models/all_vip_models/"><a href=/elite-models/all_vip_models/ class=btn-image >VIP Directory</a></div>
</li>

<li data-transition="fade" data-slotamount=50 data-thumb="">
<img src=https://ic.m-b.su/slides/t1.jpg width=50 height=50 alt="">
<div class="caption lfr" data-x=100 data-y=-16 data-speed=1500 data-start=200 data-easing=easeOutExpo><img src=https://ic.m-b.su/slides/s1.png width=313 height=510 alt="Sexy girl"></div>
<div class="caption lft big_white"  data-x=400 data-y=80 data-speed=400 data-start=10 data-easing=easeOutExpo>Open Directory</div>
<div class="caption lfl medium-white" data-x=420 data-y=150 data-speed=400 data-start=100 data-easing=easeOutExpo>Free Access</div>
<div class="caption lfl err_text" data-x=430 data-y=200 data-speed=800 data-start=1800 data-easing=easeOutExpo>An open catalog is at your service,<br> go ahead and browse,<br> available only outside of Russia <br>or use a VPN in Russia</div>
<div class="caption lfl err_text" data-x=430 data-y=280 data-speed=800 data-start=1600 data-easing=easeOutExpo>Just press the button and select the girl.<br> All photos are 100% real.</div>
<div class="caption sfb" data-x=430 data-y=360 data-speed=1000 data-start=1800 data-easing=easeOutBack><a href=https://missbliss.ru/en/all_escort_models/ class="btn-image">Escort Models</a></div>
</li>

</ul>
</div>
</div>
</div>
  <div id="wall">
<a href="/elite-models/all_vip_escorts/" title="VIP Gate to VIP-member area"><img alt="The MissBliss Escort Agency, Russia" src="https://m-b.su/social/agency/vip-access.avif"
title="Escort Agency MissBliss, Russian escorts" width="526" height="300"></a>
</div>
<div id="body-wrap">
<div id="content" class="container clearfix">
<hr class="50">
<?php 
$features_file = __ROOT__ . '/includes/en/features.php';
if (file_exists($features_file)) {
    include_once($features_file);
}
?>
</div>
</div>

<div id="footer">
<div id="footer-center" class="container">
<div class="footer-left">
<?php 
$footer_file = __ROOT__ . '/includes/footer.php';
if (file_exists($footer_file)) {
    include_once($footer_file);
}
?>
 <hr class="h40"><hr class="h40"><hr class="h40"> <hr class="h40"><hr class="h40"><hr class="h40">
</div>
</div>
	
 <hr class="h40"><hr class="h40"><hr class="h40"> <hr class="h40">
<?php 
$footer_bottom_file = __ROOT__ . '/includes/first-footer-bottom.php';
if (file_exists($footer_bottom_file)) {
    include_once($footer_bottom_file);
}
?>
</div>
</div>
</div>
</div><!-- /pc -->
</div><!-- /p -->

<script>var tpj=jQuery;tpj.noConflict();tpj(document).ready(function(){if(tpj.fn.cssOriginal!=undefined)
tpj.fn.css=tpj.fn.cssOriginal;tpj('.fullwidthbanner').revolution({delay:9000,startwidth:1280,startheight:500,onHoverStop:"on",navigationArrows:"verticalcentered",navigationStyle:"round",touchenabled:"on",navOffsetHorizontal:0,navOffsetVertical:20,stopAtSlide:-1,stopAfterLoops:-1,fullWidth:"on",shadow:0});});</script>

</body>
</html>