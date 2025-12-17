<?php



$name='lily';
$name1='Лилия';
$name2='Лилию';
$name3='Лилии';
$blur = null;
$picsFolio='lily';
$city = 'msk';
$home='Москва';
$height='170 см';
$weight='59 кг';
$birthdate = '1990-04-18';
$dataType = 'взрослая модель блондинка мск';

$escorts='class="current"';
$class='attractive';
$attractive='class="current"';
$msk='class="current"';
$en_title='Lily 🤩a beautiful stylish worthy sharpener';
$title='Лилия 🤩красивая стильная достойная обостительница';
$description = 'красивая стильная взрослая вселая девушка. Умеет себя красиво подать, всегда хорошо и стильно одета. С ней приятно общаться, веселая собеседница которая умеет слушать.';
$keywords='опытная эскортница, любвеобильная женщина, Лилия эскорт москва';
$fxt='jp2';

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
$folder='b';
include_once (__ROOT__. '/includes/workers/slider_functions_FTP_old.php');

?>
</div>
</div>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Весь Мир</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>90/66/92 cm </span></p><p>Размер груди<span>2 (75B) натуральная</span></p><p>Цвет глаз<span>Зеленый</span></p><p>Цвет волос<span>Русые</span></p><p>Размер одежды<span>M-S</span></p><p> Ориентация<span>Гетеро</span></p><p>Отношение к курению<span>Не курю</span></p><p>Общение<span>Русский</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon">Европейская, японская кухни, красное сухое вино<br>Цветы -  красные розы, желтые лилии</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Сексуальная элегантность<br><i class="far fa-star"></i> Casual<br><i class="far fa-star"></i> Классика<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное, чистое,<br><i class="fa fa-check" aria-hidden="true"></i> все натуральное. <br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Путешествия, Книги, Музыка</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Оценка агентства...</h4><p><?=$name1 ?>- красивая стильная взрослая вселая девушка. Умеет себя красиво подать, всегда хорошо и стильно одета. С ней приятно общаться, веселая собеседница которая умеет слушать.</p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Написать отзыв</a></div>
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
<blockquote><p>Что можешь знать ты обо мне, раз ты со мной не спал и не пил?</blockquote>
<blockquote><p>Никогда не доверяй красивой женщине. Особенно, если ты ей нравишься.</blockquote>
<blockquote><p>Женщины говорят о любви и молчат о любовниках, мужчины — наоборот.</blockquote><br>
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