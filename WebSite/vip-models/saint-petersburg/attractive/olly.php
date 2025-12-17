<?php 

$name='olly';
$name1='Оля';
$name2='Олю';
$name3='Оле';
$picsFolio='olly-red';

$blur = null;

$fxt = 'jp2';
$city='spb';
$home = 'Санкт-Петербург';
$height='166 см';
$weight='57 кг';
$birthdate = '2003-02-07'; 
$dataType = 'взрослая модель блондинка спб';

$en_title='Olya is a romantic, gentle and bright girl.';
$title='Оля- романтичная нежная и яркая девушка.';
$description = 'Оля- романтичная нежная и яркая девушка. Чистая эффектная с шикарной фигурой, красивая модель';
$keywords = 'Оля эскорт спб, стройная эскорт спб, эскортница оля';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-spb.php');
$canonical = 'https://missbliss.spb.ru/attractive/olly/';

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
<?php

include_once (__ROOT__. '/includes/workers/lightbox_functions.php');


?>
</div>
<div id=sidebar>
<div class=widget>
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class=accCon><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Санкт-Петербург</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p>Размер груди<span>2 (75B) Натуральная</span></p><p>Размер одежды<span>M</span></p><p>Цвет глаз<span>Зеленый</span></p><p>Цвет волос<span>Бардо</span></p><p> Ориентация<span>Бисексуальна</span></p><p>Отношение к курению<span>Курю</span></p><p>Общение<span>Русский-Английский</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class=accBut>Предпочтения </div>
<div class=accCon>Предпочитаю блюда европейской или итальянской или японской кухонь. Предпочитаю сухие вина.</div>
<div class=accBut>Стиль</div>
<div class=accCon><i class="far fa-star"></i> Нежный бархат<br><i class="far fa-star"></i> Легкая готика <br><i class="far fa-star"></i> Ренессанс<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное чистое<br><i class="fa fa-check" aria-hidden="true"></i> Все натуральное.</div>
<div class=accBut>Хобби</div>
<div class=accCon>Музыка, книги, путешествия</div>
<div class=accBut>Отзывы</div>
<div class=accCon><br><h4>Оценка агентства...</h4><p>Оля- романтичная нежная и яркая девушка. Чистая эффектная с шикарной фигурой, красивая модель! Очень комфортная в общении, женственная и приятная. </p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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