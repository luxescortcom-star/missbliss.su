<?php

$name='tatyana';
$name1='Татьяна';
$name2='Татьяну';
$name3='Татьяне';
$blur = null;
$picsFolio='tatyana';
$city='spb';
$home = 'Санкт-Петербург';
$height='168 см';
$weight='56 кг';
$birthdate = '1997-08-08';
$dataType = 'взрослая модель би busty блондинка спб';

$fxt = 'jpg';

$en_title='Tatiana is a hottest slender temptress escort in St. Petersburg, Russia';
$title='Комфортная веселая и стильная спутница в Санкт-Петербурге';
$description = 'Очень красивая, нежная, комфортная веселая и стильная спутница';
$keywords = 'красивая эскортница,нежная эскортница спб, татьяна эскорт спб';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-spb.php');
$canonical = 'https://missbliss.spb.ru/attractive/tatyana/';
?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include_once (__ROOT__. '/includes/vip-head.php'); ?>
<?php include_once (__ROOT__. '/includes/styles-profile.php'); ?>
</head>
<?php include_once (__ROOT__. '/includes/menu2.php'); ?>
<div class="perspective_container">
<div id="header-bg"></div>
<div id="sub-header-bg"></div>
<div id="body-wrapper" class="wrapper">
<div id="header">
<!--noindex--><a href="#" rel="nofollow" id="logo"></a><!--/noindex-->
<?php include_once (__ROOT__. '/includes/xxx-menu.php'); ?>
</div>
<div id=content class="container clearfix">
<p id=back-top style="display: block;">
<a href=#top><span></span></a>
</p>
<nav id=page-title>
<?php
include_once  ('../navigation.php');
$uri = substr(substr($_SERVER['REQUEST_URI'], 18), 10);
$currentFile = trim($uri, '/');
$currentFile = preg_replace('/\/+/', '/', $currentFile);
echo generateNavigation($currentFile);
?>
<h1><?=$name1 ?>. <span>Санкт-</span>Петербург</h1>
</nav>
<div id=main>
<div class="project-image portfolio">
<div class=flexslider>
<?php
include_once (__ROOT__. '/includes/workers/slider_functions_FTP.php');

?>
</div>
</div>
</div>
<div id=sidebar>
<div class=widget>
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class=accCon><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Весь Мир</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>89/63/91 см </span></p><p>Размер груди<span>3 (75C) Натуральная</span></p><p>Размер одежды<span>S</span></p><p>Цвет глаз<span>Серо-Зеленый</span></p><p>Цвет волос<span>Шатен</span></p><p> Ориентация<span>Бисексуальна</span></p><p>Отношение к курению<span>Не курю</span></p><p>Общение<span>Русский-Английский</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class=accBut>Предпочтения </div>
<div class=accCon>Предпочитаю европейскую, итальянскую кухню, морепродукты <br>
Из напитков: кофе, белое и красное вино.</div>
<div class=accBut>Стиль</div>
<div class=accCon><i class="far fa-star"></i> Casual<br><i class="far fa-star"></i> Модерн <br><i class="far fa-star"></i> Платья, юбки, чулки.<br></div>
<div class=accBut>Хобби</div>
<div class=accCon>Музыка, фитнес, путешествия</div>
<div class=accBut>Отзывы</div>
<div class=accCon><h4>Оценка агентства...</h4><p>Очень красивая, нежная, комфортная веселая и стильная спутница</p><br> <h4>Отзывы</h4><p>«Мы нашли русскую Ким Бейсингер. Она воплотит ваши мечты на девять с половиной недель в реальность. Очень нежная и красивая женщина».<br> Михаил 14.09.2025<br><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
<div class=accBut>Вознаграждение</div>
<div class=accCon><div class="column last">
<div class=table-title>
</div>
<?php include_once __ROOT__. '/includes/model-prices.php'; ?>
<div class=footer>
<?=$invite ?>
</div> </div>
    <a class="close" title="сlose" href="#close"></a>
    </div>
</div>
</div>
<div class="widget clearfix">
<hr>
<div class='testimonial'>
<blockquote><p>Безгранично счастливы те, которые творят счастье для других.</blockquote>
<blockquote><p>Силы берутся из любви и ненависти. Только так.</blockquote>
<blockquote><p>Секс — это искусство. А любовь — это забота о том, с кем занимаешься этим искусством.</blockquote>

</div>
<?=$invite ?>
</div>
</div>
</div>
</div>
<?php include_once __ROOT__. '/section_generator.php'; ?>
</div>
<div id="footer">
<div id="footer-center" class="container">
<div class="footer-left">
<?php include_once (__ROOT__. '/includes/footer.php'); ?>
</div>
</div>
<?php include_once __ROOT__. '/includes/footer-profile.php'; ?>

 </html>