<?php

$name = 'tatiana';
$name1 = 'Татьяна';
$name2 = 'Татьяну';
$blur = true;
$name3 = 'Татьяне';
$picsFolio = 'tatiana';
$city = 'msk';
$vip = 'true';
$home = 'Москва';
$height = '173 см';
$weight = '50 кг';
$birthdate = '2002-03-21';
$dataType = 'новенькая молодая фаворитка брюнетка мск';


$fxt = 'avif';
$en_title = 'Tatyana 🤩 is a slender, beautiful, and stunning VIP escort model in Moscow.';
$title = 'Татьяна 🤩 стройная красивая эффектная вип эскорт модель в Москве';
$description = 'Гибкая, занималась балетом, хореографией, конным спортом, плаванием, каратэ, восточными танцами, сажусь на шпагат. Родилась в Москве
Закончила РАНХиГС с красным дипломом, экономический факультет. ';
$keywords = 'вип эскорт, vip эскорт, элитная эскорт модель, эскортница москва';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-msk.php');

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
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Могу поехать<span>Весь Мир</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>82/62/90 см </span></p><p>Размер груди<span>2 (75B) натуральная</span></p><p>Размер одежды<span>S</span></p><p>Цвет глаз<span>Серо-зеленый</span></p><p>Цвет волос<span>Брюнетка</span></p><p> Ориентация<span>Гетеро</span></p><p>Отношение к курению<span>Не курю</span></p><p>Общение<span>Русский, English</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon">Итальянская и европейская кухни <br>Белое сухое вино, шампанское</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Классика<br><i class="far fa-star"></i> Сексуальная элегантность<br><i class="far fa-star"></i> Модерн<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное, чистое<br><br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Гибкая, занималась балетом, хореографией, конным спортом, плаванием, каратэ, восточными танцами, сажусь на шпагат.</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Оценка агентства...</h4><p>Красивая стройная ухоженная девушка. Родилась в Москве,
Закончила РАНХиГС с красным дипломом, экономический факультет. Элитная модель для самого взыскательного джентельмена. </p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
<div class="accBut">Вознаграждение</div>
<div class="accCon"><div class="column last">
<div class="table-title">
</div>
<?php include_once __ROOT__. '/includes/model-prices.php'; ?>

<!-- Скрытый элемент с ценами -->
<div id="pricesData" style="display: none;"
     data-prices='<?php echo htmlspecialchars(json_encode($prices), ENT_QUOTES, 'UTF-8'); ?>'></div>
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

</div>
</div>
<?php include_once __ROOT__. '/includes/footer-profile.php'; ?>



</html>