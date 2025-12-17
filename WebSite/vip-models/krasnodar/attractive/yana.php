<?php 

$name='yana';
$name1='Яна';
$name2='Яну';
$name3='Яне';
$blur = null;
$picsFolio = 'yana';

$home = 'Краснодар';
$birthdate = '1997-11-28'; 
$height = '165 см';
$weight = '65 кг';
$dataType = 'взрослая модель busty блондинка регионы краснодар';
$city = 'krasnodar';

$en_title='Yana - Beautiful adult escort girl with a luxurious, appetizing figure. Elite escort in Krasnodar.';
$title='Яна- Красивая взрослая эскортница с роскошной аппетитной фигурой. Элитный эскорт в Краснодаре.';
$description = 'Яна- Красивая взрослая эскортница с роскошной аппетитной фигурой. Комфортная в общении и веселая, с ней вам будет легко общаться на любые темы. Харизматичная добрая, комфортная спутница в Краснодаре.';
$keywords = 'краснодар эскорт, эскортница краснодар, яна эскортница';

$fxt = 'jpg';

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
<div class="accCon"><p>Город:<span>Краснодар</span></p><p>Выезды<span>Сочи-Москва-Питер</span></p><p>Возраст:<span>25 года</span></p><p> Рост:<span>165</span></p><p>Вес:<span>65 кг</span></p><p> Объемы:<span>95/69/98 см </span></p><p>Размер груди<span>3 (90C) натуральная</span></p><p>Цвет глаз<span>Серо-Зеленый</span></p><p>Цвет волос<span>Светло-Русый</span></p><p>Размер одежды<span>M-L</span></p><p> Ориентация<span>Гетеро</span></p><p>Отношение к курению<span>Не курю</span></p><p>Общение<span>Русский-Английский</span></p><p> Знак зодиака<span>&#9808; Стрелец <span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon"><i class="fa fa-check" aria-hidden="true"></i> Итальянская, азиатская кухни.<br><i class="fa fa-glass" aria-hidden="true"></i> Вино сухое, полусладкое, игристое, шампанское <br><br><i class="fa fa-key" aria-hidden="true"></i> Розы, пионы</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Классика<br><i class="far fa-star"></i> Элегантный стиль<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное<br><br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Путешествия, приключения</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Оценка агентства...</h4><p> Яна- Красивая взрослая девушка с роскошной аппетитной фигурой. Комфортная в общении и веселая, с ней вам будет легко общаться на любые темы. Харизматичная добрая, комфортная спутница в Краснодаре.<br><br>/ Менеджер / <br><br></p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Написать отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>Без тайны нет и приключения</blockquote>
<blockquote><p>Счастье — это не цель, а образ жизни.</blockquote>
<blockquote><p>Красота - это сила, и улыбка - ее меч.</blockquote><br>
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