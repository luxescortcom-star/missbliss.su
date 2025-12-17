<?php 


$name='kira';
$name1='Кира';
$name2='Киру';
$name3='Кире';
$blur = true;
$picsFolio = 'kira';

$home = 'Екатеринбург';
$birthdate = '2002-08-12'; 
$height = '170 см';
$weight = '50 кг';
$dataType = 'молодая модель брюнетка регионы екб';
$city = 'ekb';



$fxt = 'jpg';


$description = 'Стройная веселая милая девочка. Темпераментная юная Фея в Екатеринбурге. Приглашайте и наслаждайтесь незабываемым наслаждением';
$keywords = 'юная эскортница, эскортница  екатеринбург, эскортница челябинск';
$en_title='Young, slender, beautiful brunette 🤩 temperamental Fairy Elite escort in Yekaterinburg and Chelyabinsk.';
$title='Юная стройная красивая брюнетка 🤩 темпераментная Фея Элитный эскорт в Екатеринбурге и Челябинске.';

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
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>По России только</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>90/58/95 см </span></p><p>Размер груди<span>2 (75B) натуральная</span></p><p>Цвет глаз<span>Зеленый</span></p><p>Цвет волос<span>Черный</span></p><p>Размер одежды<span>S</span></p><p> Ориентация<span>Гетеро</span></p><p>Отношение к курению<span>Балуюсь иногда</span></p><p>Общение<span>Русский</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?><span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon"><i class="fa fa-check" aria-hidden="true"></i> Всеядна, предпочитаю морепродукты и экзотические фрукты<br><i class="fa fa-glass" aria-hidden="true"></i>  Напитки: Мартини, шампанское<br><br><i class="fa fa-key" aria-hidden="true"></i> Пионы, розы, ромашки</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Классика<br><i class="far fa-star"></i> Oversize<br><i class="far fa-star"></i> Эротический<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело чистое, ухоженное<br><br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Танцы, путешествия</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Оценка агентства...</h4><p> Стройная веселая милая девочка. Темпераментная юная Фея в Екатеринбурге. Приглашайте и наслаждайтесь незабываемым наслаждением<br><br>/ Andrei / <br><br></p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Написать отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>Человек должен сам сделать свои стрелы.</p></blockquote>
<blockquote><p>У души не будет радуги, если в глазах не было слёз.</p></blockquote>
<blockquote><p>Достижение своего счастья — единственная моральная цель вашей жизни.</p></blockquote><br>
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