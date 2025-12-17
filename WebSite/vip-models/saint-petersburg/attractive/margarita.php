<?php

$name='margarita';
$name1='Маргарита';
$name2='Маргариту';
$name3='Марго';
$picsFolio='margarita';

$blur = true;
$vip = true;
$fxt = 'jp2';
$city='spb';
$home = 'Санкт-Петербург';
$height='166 см';
$weight='57 кг';
$birthdate = '2000-07-07'; 
$dataType = 'взрослая модель брюнетка спб';

$en_title='Margarita 🤩beautiful stylish girl in St. Petersburg';
$title='Маргарита 🤩Красивая стильная девушка в Санкт-Петербурге';
$description = 'соблазнительная интересная девушка с хорошим телом которое как у античных статуй совершенно сексуально. Марго умеет общаться, не глупая, довольно серьезная, темпераментная девушка.';
$keywords = 'марго эскорт спб, маргарита эскорт спб, эскортница маргарита';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-spb.php');
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
$uri = substr(substr($_SERVER['REQUEST_URI'], 18), 10);
$currentFile = trim($uri, '/');
$currentFile = preg_replace('/\/+/', '/', $currentFile);
echo generateNavigation($currentFile);
?>
<h1><?=$name1 ?>. <span>Санкт-</span>Петербург</h1>
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
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Европа(есть шенген)</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>89/63/97 см </span></p><p>Размер груди<span>2 (75B)Натуральная</span></p><p>Размер одежды<span>42-44</span></p><p>Цвет глаз<span>Зеленые</span></p><p>Цвет волос<span>Шатенка</span></p><p> Ориентация<span>Гетеро</span></p><p>Отношение к курению<span>Не курю</span></p><p>Общение<span>Русский</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon">Еда:<br> грузинская, итальянская, азиатская кухни.<br><br> Напитки:<br> виски, вино (сухое и полусухое), крафтовое пиво, сидр</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Классика<br><i class="far fa-star"></i> Сексуальный Casual<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное чистое<br><i class="fa fa-check" aria-hidden="true"></i> Все натуральное.<br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Чтение, психология, астрология</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Оценка агентства...</h4><p><?=$name1 ?>- соблазнительная интересная девушка с хорошим телом которое как у античных статуй совершенно сексуально. Марго умеет общаться, не глупая, довольно серьезная, темпераментная девушка. </p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></h4></div>
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
<blockquote><p>Когда становится достаточно темно, можно увидеть звезды.</blockquote>
<blockquote><p>Образованный человек скромен, глубокая река спокойна.</blockquote>
<blockquote><p>Чего нет в мыслях, того не будет и в глазах.</blockquote><br>
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