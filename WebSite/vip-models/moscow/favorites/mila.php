<?php

$name = 'mila';
$name1 = 'Мила';
$name2 = 'Милу';
$blur = null;
$name3 = 'Миле';
$picsFolio = 'mila-busty-blondie';
$city = 'msk';

$home = 'Москва';
$height = '165 см';
$weight = '58 кг';
$birthdate = '1993-03-21';
$dataType = 'взрослая busty фаворитка блондинка мск';


$fxt = 'jp2';
$en_title = 'Mila 🤩 gorgeous spectacular girl, busty positive very sexy blonde, elite escort in Moscow';
$title = 'Мила 🤩 рокошная эффектная сексуальная блондинка в Москве';
$description = 'Мила, рокошная эффектная девушка, взрослая позитивная очень сексуальная блондинка.';
$keywords = 'грудстая эскортница, сексуальные формы, девушка с роскошным телом, эскортница москва';

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
<h2>Мила</h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Могу поехать<span>Весь Мир</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>100/67/100 см </span></p><p>Размер груди<span>4 (80D) натуральная</span></p><p>Размер одежды<span>M</span></p><p>Цвет глаз<span>Голубой</span></p><p>Цвет волос<span>Блондинка</span></p><p> Ориентация<span>Гетеро</span></p><p>Отношение к курению<span>Курю Вэйпы</span></p><p>Общение<span>Русский, English</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon">Итальянская и европейская кухни <br>Белое сухое вино, шампанское</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Классика<br><i class="far fa-star"></i> Сексуальная элегантность<br><i class="far fa-star"></i> Модерн<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное, чистое<br><br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Йога</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Оценка агентства...</h4><p>Мила, рокошная эффектная девушка, взрослая позитивная очень сексуальная блондинка. </p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>Каждая порядочная женщина должна иметь хотя бы одного любовника.</blockquote>
<blockquote><p>Если искать совершенства, то никогда не будешь доволен.</blockquote>
<blockquote><p>Если под музыку не танцуют – это не музыка.</blockquote>
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