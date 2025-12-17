<?php 

$name='alice';
$name1='Алиса';
$name2='alicу';
$name3='Алисе';
$blur = null;
$picsFolio = 'alice';

$home = 'Санкт-Петербург';
$height = '165 см';
$weight = '50 кг';
$birthdate = '1990-08-16'; 
$dataType = 'взрослая модель би блондинка спб';
$city='spb';

$fxt = 'jpg';

$en_title='Alice 🤩 Feminine and comfortable girl with a beautiful figure';
$title='Алиса 🤩 Женственная и комфортная девушка с красивой фигурой';
$description = 'Женственная и комфортная девушка с красивой фигурой, хорошо эрудирована и с ней приятно вести беседы на разные темы';
$keywords = 'блондинка эскорт спб,красивая  фигура блондинка, юлондинка эскорт спб, алиса спб эскорт';


define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-spb.php');
$canonical = 'https://missbliss.spb.ru/attractive/alice/';
?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include_once (__ROOT__. '/includes/vip-head.php'); ?>
<?php include_once (__ROOT__. '/includes/styles-profile.php'); ?>
</head>
<?php include_once(__ROOT__. '/includes/menu2.php'); ?>
<div class="perspective_container">
<div id="header-bg"></div>
<div id="sub-header-bg"></div>
<div id="body-wrapper" class="wrapper">
<div id="header">
<!--noindex--><a href="#" rel="nofollow" id="logo"></a><!--/noindex-->

<?php include_once(__ROOT__. '/includes/xxx-menu.php'); ?>

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
</p><h1><?=$name1 ?>. <span>Санкт-</span>Петербург</h1>
</nav>
<div id="main">
<div class="project-image portfolio">
<div class="flexslider">
<?php
include_once (__ROOT__. '/includes/workers/slider_functions_FTP.php');

?>
</div>
</div>
<?php

include_once(__ROOT__. '/includes/workers/lightbox_functions.php');


?>	
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Могу поехать<span>Весь Мир</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>87/63/90 см</span></p><p>Размер груди<span>2 (75B)</span></p><p>Размер одежды<span>S</span></p><p>Цвет глаз<span>Зелёный</span></p><p>Цвет волос<span>Блонд</span></p><p> Ориентация<span>Би-секси</span></p><p>Отношение к курению<span>Не курю</span></p><p>Общение<span>Русский-English-French</p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon">Японская кухня, сухие и шампанские вина</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Классика<br><i class="far fa-star"></i> Модерн<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное, чистое<br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Классическая литература, изучение языков, психология, дизайн интерьера, танцы, игра на музыкальных инструментах, вокал, путешествия, киноман, люблю принимать участие в разных спортивных состязаниях </div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Обо мне...</h4><p>Люблю познавать жизнь во всём разнообразии её граней, мир и людей вокруг, верю в маленькие и большие чудеса, стараюсь помогать тем, кому в силах помочь. Люблю животных, обожаю природу и путешествия. Не делю мир на белое и чёрное. Если звёзды горят - значит, это кому-то нужно <br><br> /<?=$name1 ?> 💋/</p><h4>Оценка агентства...</h4><p>Женственная и комфортная девушка с красиволой фигурой. Взрослая, довольно хорошо эрудирована и с ней приятно вести беседы на самые разные темы. Компанейская и веселая девушка. <br> <br>/ Андрей, менеджер агентства /</p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
<div class="accBut">Вознаграждение</div>
<div class="accCon"><div class="column last">
<div class=table-title>
</div>
<?php include_once(__ROOT__. '/includes/fee-attractive.php'); ?>
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
<blockquote><p>Пока не увидишь ад, рай тебе не понравится.</p></blockquote>
<blockquote><p>Кто боится дождя, попадает под град.</p></blockquote>
<blockquote><p>Нет дерева, которого не коснулся бы ветер.</p></blockquote><br>
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