<?php

$name = 'alina';
$name1 = 'Алина';
$name2 = 'Алину';
$blur = null;
$name3 = 'Алине';
$picsFolio = 'alina';

$home = 'Москва';
$birthdate = '2002-10-02';
$height = '170 см';
$weight = '50 кг';
$dataType = 'молодая модель блондинка мск';
$city = 'msk';


$en_title = 'Alina, is hottest and sexy blondie  Moscow escort';
$title = 'Алина, стройная спортивная модель. Эскорт для комфортного отдыха в Москве';
$description = 'Алина, высокая шикарная девушка с красивыми формами. Общительная и веселая.';
$keywords = 'стройная блондинка, эскортница, москва, эскортница с татуировками ';
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
<?php

include_once (__ROOT__. '/includes/workers/lightbox_functions.php');

?>
</div>
<div id="sidebar">
<div class="widget">
<h2>Алина</h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Могу поехать<span>Весь Мир</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p>Размер груди<span>2 (75B) натуральная</span></p><p>Размер одежды<span>42-44</span></p><p>Цвет глаз<span>Голубой</span></p><p>Цвет волос<span>Брюнетка</span></p><p> Ориентация<span>Bisexual</span></p><p>Отношение к курению<span>Не курю</span></p><p>Общение<span>Русский, English</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon">Сухие вина, Итальянская, Восточная кухни</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Классика<br><i class="far fa-star"></i> Сексуальная элегантность<br><i class="far fa-star"></i> Модерн<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное<br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Есть татуировки<br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Танцы, кино, путешествия</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Оценка агентства...</h4><p>Алина, высокая шикарная девушка с красивыми формами. Общительная и веселая.</p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>Женщины не нуждаются в гардеробе, полном одежды, они просто нуждаются в правильной одежде.</p></blockquote>
<blockquote><p>Я поняла, что если сильно доверять людям, можно обжечься.</p></blockquote>
<blockquote><p>Жизнь не в том, чтобы жить, а чувствовать, что живешь.</p></blockquote><br>
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