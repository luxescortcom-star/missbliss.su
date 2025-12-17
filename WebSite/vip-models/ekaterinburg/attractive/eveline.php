<?php 

$name = 'eveline';
$name1 = 'Эвелин';
$name2 = 'Эвелин';
$blur = 'true';
$vip = 'true';
$name3 = 'Эвелин';
$picsFolio = 'eveline';
$home = 'Екатеринбург';
$birthdate = '2001-02-12'; 
$height = '172 см';
$weight = '50 кг';
$dataType = 'молодая модель би брюнетка регионы екб';
$city = 'ekb';



$fxt = 'jpg';

$en_title='Evelyn 🤩is a bright stylish slender student and dancer with a gorgeous young body. Elite escort in Ekaterinburg, Russia';
$title='Эвелин 🤩яркая стильная стройная студентка и танцовщица с роскошным юным телом. Элитный эскорт в Екатеринбурге.';
$description = 'Артистичная и яркая девочка она легко влюбляет и окружает своим сказочным обоянием.';
$keywords = 'юная эскортница, эскортница  москва, эскортница с красными волосами';
define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-ekb.php');
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
$uri = substr(substr($_SERVER['REQUEST_URI'], 10), 14);
$currentFile = trim($uri, '/');
$currentFile = preg_replace('/\/+/', '/', $currentFile);
echo generateNavigation($currentFile);
?>
<h1><?=$name1 ?>. Екатеринбург</h1>
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
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Весь Мир</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>88/59/89 см </span></p><p>Размер груди<span>2 (75В) натуральная</span></p><p>Цвет глаз<span>Зеленый</span></p><p>Цвет волос<span>Каштан(натуральный)</span></p><p>Размер одежды<span>S-XS</span></p><p> Ориентация<span>Би-секси</span></p><p>Отношение к курению<span>Не курю</span></p><p>Общение<span>Русский-Английский</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div><span><span>
<div class="accBut">Предпочтения </div>
<div class="accCon"><i class="fa fa-check" aria-hidden="true"></i> Рыбные блюда, японская кухня.<br><i class="fa fa-glass" aria-hidden="true"></i>  Напитки: легкие коктейли<br><br><i class="fa fa-key" aria-hidden="true"></i> Розы, пионы</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Классика<br><i class="far fa-star"></i> Элегантный стиль<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное, чистое<br><br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Фитнес, танцы</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Обо мне...</h4><p>Нравлюсь себе, мой авантюризм, способности, моя прекрасная внешность и мой интеллект.<br><br> Открыта для общения с достойным интересным человеком. <br><br>
В мужчинах ценю доброту, нежность, чувство юмора, уверенность, страсть.<br><br>/ <?=$name1 ?> 💋/ <br><br></p><br><h4>Оценка агентства...</h4><p> Эвелин - яркая стильная стройная студентка и танцовщица с роскошным юным телом. <br><br>Эта нежная и раскованная любовница способна мгновенно вскружить вам голову и унести за собой на планету любви! <br><br>Нежная и трепетная, ее реакции естественные и живые. Она не играет, она сама наслаждается процессом! <br><br>/ Andrei / <br><br></p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Написать отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>Моя маленькая внутренняя богиня, плавно покачивая бедрами, танцует победную самбу.</p></blockquote>
<blockquote><p>Тот, кто способен полностью владеть своим рассудком, овладеет всем, что принадлежит ему по праву</p></blockquote>
<blockquote><p>Думай обо мне. Я хочу тебе присниться.</p></blockquote><br>
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




</span></span></html>