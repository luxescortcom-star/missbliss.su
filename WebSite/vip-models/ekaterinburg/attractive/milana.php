<?php 

$name='milana';
$name1='Милана';
$name2='Милану';
$name3='Милане';
$blur = true;
$picsFolio = 'milana';


$home = 'Екатеринбург';
$birthdate = '1996-12-12'; 
$height = '165 см';
$weight = '65 кг';
$dataType = 'взрослая модель busty блондинка регионы екб';
$city = 'ekb';

$en_title='Charming cute and spectacular blonde 🤩 with a gorgeous beautiful body. Elite escort in Ekaterinburg, Russia';
$title='Обаятельная милая и эффектная блондинка 🤩 с роскошным красивым телом Элитный эскорт в Екатеринбурге и Челябинске.';
$description = 'Веселая слегка застенчивая девушка которая будет вашей красивой спутницей в Екатеринбурге или Челябинске или в путешествии в другие города и страны';
$keywords = 'екб блондинка эскорт, эскортница  екатеринбург, эскортница челябинск';

$fxt = 'jpg';

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
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Екб, Челябинск</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>97/72/90 см </span></p><p>Размер груди<span>4 (780D) натуральная</span></p><p>Цвет глаз<span>Зеленый</span></p><p>Цвет волос<span>Блонд</span></p><p>Размер одежды<span>M</span></p><p> Ориентация<span>Би-секси</span></p><p>Отношение к курению<span>Балуюсь иногда</span></p><p>Общение<span>Русский-Английский</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?><span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon"><i class="fa fa-check" aria-hidden="true"></i> Всеядна, предпочитаю морепродукты и экзотические фрукты<br><i class="fa fa-glass" aria-hidden="true"></i>  Напитки: Мартини, шампанское<br><br><i class="fa fa-key" aria-hidden="true"></i> Пионы, розы, ромашки</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Классика<br><i class="far fa-star"></i> Oversize<br><i class="far fa-star"></i> Эротический<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное<br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Есть маленькая татуировка<br><br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Путешествия, плавание, книги, джазовая музыка</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Оценка агентства...</h4><p> Обаятельная милая и эффектная блондинка с роскошным красивым телом. Веселая слегка застенчивая девушка которая будет вашей красивой спутницей в Екатеринбурге или Челябинске или в путешествии в другие города и страны.<br><br>/ Andrei / <br><br></p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Написать отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>Иногда мы слишком много думаем, а нужно просто жить.</blockquote>
<blockquote><p>Собирайте моменты, а не вещи.</blockquote>
<blockquote><p>Нет лучшего кометолога, чем Мир в Душе.</blockquote><br>
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