<?php

$name = 'milena';
$name1 = 'Милена';
$name2 = 'Милену';
$blur = true;
$name3 = 'Милене';
$picsFolio = 'milena';
$city = 'msk';
$vip = 'true';
$home = 'Москва';
$birthdate = '1997-03-12';
$height = '158 см';
$weight = '44 кг';
$dataType = 'взрослая новенькая фаворитка би блондинка мск';


$en_title = 'Milena, a slender blonde escort, an elite escort in Moscow';
$title = 'Милена, стройная блондинка эскортница, элитный эскорт в Москве';
$description = 'Изысканная и опытная любовница, Милена воплотит в реальность любые вши фантазии.';
$keywords = 'яркая блондинка, опытная любовница, московская эскортница, эскорт москва';
$fxt = 'avif';

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
include_once (__ROOT__. '/includes/workers/slider_functions_FTP.php');

?>
</div>
</div>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Куда угодно</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>90/60/80 см </span></p><p>Размер груди<span>1 (70В) натуральная </span></p><p>Цвет глаз<span>Зеленые</span></p><p>Цвет волос<span>Блонд</span></p><p>Размер одежды<span>XS-S</span></p><p> Ориентация<span>Би-секси</span></p><p>Языки<span>Русский-Английский</span></p><p>Отношение к курению<span>Не курю</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения</div>
<div class="accCon">Итальянская кухня, морепродукты белое сухое вино.</div>
<div class="accBut">Стиль</div>
<div class="accCon">Элегантный,<br>Сексуальная элегантность<br> Классический<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное<br><i class="fa fa-check" aria-hidden="true"></i> Все натуральное.<br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Танцы, фитнесс</div>
 <div class="accBut">Отзывы</div>
<div class="accCon"><h4>Оценка агентства...</h4><p><?=$name1 ?>, стройная яркая блондинка. Изысканная любовница для достойного джентельмена.</p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>Ты так долго носишь маску, что забываешь, кто ты был под ней.</p></blockquote>
<blockquote><p>Человек ревнив не тогда, когда любит, а когда хочет быть любимым.</p></blockquote>
<blockquote><p>Безвыходным мы называем положение, выход из которого нам не нравится.</p></blockquote><br>
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