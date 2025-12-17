<?php

$name = 'angie';
$name1 = 'Анжела';
$name2 = 'Анжелу';
$blur = true;
$name3 = 'Анжеле';
$picsFolio = 'angie';

$city = 'msk';

$birthdate = '1998-04-19';
$home = 'Москва';
$height = '168 см';
$weight = '57 кг';
$dataType = 'взрослая фаворитка  би брюнетка мск';

$fxt = 'jp2';
$title = 'Анжела 🤩 Женственная и комфортная девушка с красивой фигурой';
$en_title = 'Angelina 🤩 A feminine and comfortable girl with a beautiful figure';
$description = 'хорошо эрудирована и с ней приятно вести беседы на разные темы. Компанейская и веселая девушка.';
$keywords = 'комфортная эскортница, эскортница вип уровня, ангелина эскорт москва';


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
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Могу поехать<span>Весь Мир</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>97/64/95 см</span></p><p>Размер груди<span>2 (75B)</span></p><p>Размер одежды<span>S</span></p><p>Цвет глаз<span>Зелёный</span></p><p>Цвет волос<span>Шоколад</span></p><p> Ориентация<span>Би-секси</span></p><p>Отношение к курению<span>Не курю</span></p><p>Общение<span>Русский-English</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon">Японская кухня, сухие и шампанские вина</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Классика<br><i class="far fa-star"></i> Модерн<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное, чистое<br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Фитнесс, танцы</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Обо мне...</h4><p>Люблю познавать жизнь во всем разнообразии граней, мир и людей вокруг, верю в маленькие и большие чудеса, стараюсь помогать тем, кому в силах помочь. Люблю животных, обожаю природу и путешествия. Не делю мир на белое и черное. Если звезды горят - значит, это кому-то нужно <br><br> /<?=$name1 ?> 💋/</p><h4>Оценка агентства...</h4><p>Женственная и комфортная девушка с красивой фигурой, хорошо эрудирована и с ней приятно вести беседы на разные темы. Компанейская и веселая девушка. <br> <br></p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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