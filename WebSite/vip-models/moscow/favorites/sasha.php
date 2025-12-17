<?php 


$name = 'sasha';
$name1 = 'Саша';
$name2 = 'Сашу';
$blur = true;
$name3 = 'Саше';
$picsFolio = 'sasha';
$city = 'msk';

$home = 'Москва';
$height = '168 см';
$weight = '53 кг';
$birthdate = '1997-10-14'; 
$dataType = 'молодая фаворитка блондинка busty мск';



$en_title = 'Sasha - luxurious elite mistress, elite escort in Moscow';
$title = 'Саша, роскошная красивая девушка. Модель для комфортного отдыха в Москве';
$description = 'Саша, яркая шикарная девушка с красивыми волосами и добрым характером. Общительная и веселая.';
$keywords = 'шикарная блондинка, элитный эскорт, вип эскортница москва, эскортница Саша';
$fxt = 'jp2';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-msk.php');

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
<p id="back-top" style="display: block;">
<a href="#top"><span></span></a>
</p>
<nav id="page-title"> 
<?php
include_once  ('../navigation.php'); 
$uri = substr(substr($_SERVER['REQUEST_URI'], 11), 8);
$currentFile = trim($uri, '/');
$currentFile = preg_replace('/\/+/', '/', $currentFile);
echo generateNavigation($currentFile);
?>
<h1><?=$name1 ?>. Москва</h1>
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
<h2>Саша</h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Могу поехать<span>Весь Мир</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>90/62/90 см </span></p><p>Размер груди<span>2 (75B) натуральная</span></p><p>Размер одежды<span>S-M</span></p><p>Цвет глаз<span>Голубой</span></p><p>Цвет волос<span>Светлый</span></p><p> Ориентация<span>Bisexual</span></p><p>Отношение к курению<span>Не курю</span></p><p>Общение<span>Русский, English(poor)</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon">Фрукты, морепродукты, сухое белое</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Классика<br><i class="far fa-star"></i> Сексуальная элегантность<br><i class="far fa-star"></i> Модерн<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное, чистое<br><br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Медицина</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Оценка агентства...</h4><p>Саша, яркая шикарная девушка с красивыми волосами и добрым характером. Общительная и веселая.</p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4><h4>Отзывы...</h4><p><h3>Юрий</h3> "Девочка супер! Очень веселая и открытая."  <br><br>05.01.2024</p></div>
<div class="accBut">Вознаграждение</div>
<div class="accCon"><div class="column last">
<div class="table-title">
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
<blockquote><p>Я верю в маникюр, в кричащую одежду, в то, что на отдыхе тоже необходимо делать прическу и наносить губную помаду. Я верю в черный цвет, а также в то, что счастливые девушки- самые красивые. Я верю в то, что лучшее средство для сжигания калорий- это смех. Я верю в то, что завтра будет новый день, и...<b> я верю в чудеса</b>.</blockquote>
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