<?php 

$name='caroline';
$name1='Лина';
$name2='Каролину';
$name3='Каролине';
$blur = true;
$picsFolio = 'caroline';

$home = 'Краснодар';
$birthdate = '2000-04-10'; 
$height = '167 см';
$weight = '55 кг';
$dataType = 'взрослая модель busty брюнетка регионы краснодар';
$city = 'krasnodar';

$en_title='Caroline, sexy beautiful escort, bright comfortable brunette, your companion in Krasnodar';
$title='Каролина, сексуальная красивая эскортницв, яркая комфортная брюнетка, ваша спутница в Краснодаре.';
$description = 'Каролина, сексуальная красивая эскортницв, яркая комфортная брюнетка, ваша спутница в Краснодаре';
$keywords = 'краснодар эскорт, эскортница краснодар, эскорт брюнетка краснодар';

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
<?php include_once (__ROOT__. '/includes/menu2.php'); ?>
<div class="perspective_container">
<div id="header-bg"></div>
<div id="sub-header-bg"></div>
<div id="body-wrapper" class="wrapper">
<div id="header">
<!--noindex--><a href="#" rel="nofollow" id="logo"></a><!--/noindex-->
<?php include_once (__ROOT__. '/includes/xxx-menu.php'); ?>
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
<?php

include_once (__ROOT__. '/includes/workers/lightbox_functions.php');


?>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Краснодарский край</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>90/68/110 см </span></p><p>Размер груди<span>4(80D) натуральная</span></p><p>Цвет глаз<span>Зеленый</span></p><p>Цвет волос<span>Брюнетка</span></p><p>Размер одежды<span>M</span></p><p> Ориентация<span>Гетеро</span></p><p>Отношение к курению<span>Не курю</span></p><p>Общение<span>Русский-Английский</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?><span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon"><i class="fa fa-check" aria-hidden="true"></i> китайская и японская кухня<br><i class="fa fa-glass" aria-hidden="true"></i> Светлое полусухое вино, шампанское <br></div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Классика<br><i class="far fa-star"></i> Sport Casual<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное<br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Есть татуировки<br></div>
<div class="accBut">Хобби</div>
<div class="accCon"> Рисование</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Оценка агентства...</h4><p> Каролина, сексуальная красивая эскортницв, яркая комфортная брюнетка, ваша спутница в Краснодаре<br><br>/ Менеджер / <br><br></p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Написать отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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