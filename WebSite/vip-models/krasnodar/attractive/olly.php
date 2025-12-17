<?php 

$name='olly';
$name1='Оля';
$name2='Ольгу';
$name3='Ольге';
$blur = true;
$picsFolio = 'olly';

$home = 'Краснодар';
$birthdate = '1990-05-15'; 
$height = '165 см';
$weight = '58 кг';
$dataType = 'взрослая модель busty блондинка регионы краснодар';
$city = 'krasnodar';

$en_title='Olya 🤩adult worthy Lady. Elite escort in Krasnodar.';
$title='Оля 🤩взрослая достойная Леди. Элитный эскорт в Краснодаре.';
$description = 'Веселая и яркая спутница для достойного джентельмена. Романтичная открытая веселая девушка без комплексов. Готова к здоровым авантюрам и эротическим приключениям.';
$keywords = 'краснодар эскорт, эскортница краснодар, эскорт оля краснодар';

$fxt = 'jp2';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-krasnodar.php');
$canonical = ''.$url.'';
?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include_once (__ROOT__. '/includes/vip-head.php'); ?>
<?php include_once (__ROOT__. '/includes/styles-profile.php'); ?>
</head>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/menu2.php'; ?>
<div class="perspective_container">
<div id="header-bg"></div>
<div id="sub-header-bg"></div>
<div id="body-wrapper" class="wrapper">
<div id="header">
<!--noindex--><a href="#" rel="nofollow" id="logo"></a><!--/noindex-->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/xxx-menu.php'; ?>
</div>
<div id="content" class="container clearfix">
<nav id="page-title">
<?php
include_once  ('../navigation.php'); 
$uri = substr(substr($_SERVER['REQUEST_URI'], 9), 12);
$currentFile = trim($uri, '/');
$currentFile = preg_replace('/\/+/', '/', $currentFile);
echo generateNavigation($currentFile);
?>
<h1><?=$name1 ?>. Краснодар</h1>
</nav>
<div id="main">
<div class="project-image portfolio">
<div class="flexslider">
<?php

include_once (__ROOT__. '/includes/workers/slider_functions_FTP_old.php');
	

?>
</div>
</div>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span>Краснодар</span></p><p>Выезды<span>Сочи-Москва-Питер</span></p><p>Возраст:<span>32 года</span></p><p> Рост:<span>165</span></p><p>Вес:<span>58 кг</span></p><p> Объемы:<span>90/69/90 см </span></p><p>Размер груди<span>2 (75В) натуральная</span></p><p>Цвет глаз<span>Карий</span></p><p>Цвет волос<span>Коричневый</span></p><p>Размер одежды<span>M</span></p><p> Ориентация<span>Гетеро</span></p><p>Отношение к курению<span>Курю</span></p><p>Общение<span>Русский-Английский</span></p><p> Знак зодиака<span>&#9801; Телец <span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon"><i class="fa fa-check" aria-hidden="true"></i> Итальянская, азиатская кухни.<br><i class="fa fa-glass" aria-hidden="true"></i> Вино сухое, полусладкое, игристое, шампанское <br><br><i class="fa fa-key" aria-hidden="true"></i> Розы, пионы</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Классика<br><i class="far fa-star"></i> Элегантный стиль<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное<br><br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Путешествия, приключения</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Обо мне...</h4><p>Нравлюсь себе, и нравится когда на меня обращают внимание. Открыта для общения. Обожаю гулять, путешествовать, заниматься шопингом.
В мужчинах ценю доброту, нежность, страсть.<br><br>/ <?=$name1 ?> 💋/ <br><br></p><br><h4>Оценка агентства...</h4><p> Оля - взрослая достойная Леди. Веселая и яркая спутница для достойного джентельмена. Романтичная открытая веселая девушка без комплексов. Готова к здоровым авантюрам и эротическим приключениям.  <br><br>/ Andrei / <br><br></p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Написать отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
<div class="accBut">Вознаграждение</div>
<div class="accCon"><div class="column last">
<div class=table-title>
</div>
<?php include_once __ROOT__. '/includes/model-prices.php'; ?>
<div class="footer">
<?=$invite ?>
</div> </div>
    <!--noindex--><a class="close" title="сlose" rel="nofollow" href="#close"></a><!--/noindex-->
    </div>
</div>
</div>
<div class="widget clearfix">
<hr>
<div class="testimonial">
<blockquote><p>Моя маленькая внутренняя богиня, плавно покачивая бедрами, танцует победную самбу.</blockquote>
<blockquote><p>Тот, кто способен полностью владеть своим рассудком, овладеет всем, что принадлежит ему по праву</blockquote>
<blockquote><p>Думай обо мне. Я хочу тебе присниться.</blockquote><br>
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

</ul>
</div>
</div>
<?php include_once __ROOT__. '/includes/footer-profile.php'; ?>




</html>