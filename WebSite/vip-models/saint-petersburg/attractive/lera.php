<?php 

$name='lera';
$name1='Лера';
$name2='Леру';
$name3='Лере';
$picsFolio='lera';

$blur = null;

$fxt = 'jp2';
$city='spb';

$home = 'Санкт-Петербург';
$height='166 см';
$weight='55 кг';
$birthdate = '1999-07-17'; 
$dataType = 'взрослая модель брюнетка спб';

$en_title='Lera 🤩Hot cheerful escort girl. Escort Saint Petersburg';
$title='Лера 🤩Горячая веселая девочка эскортница. Эскорт Санкт-Петербург';
$description = 'Лера яркая современная девушка с пухлыми губёшками и хорошей фигурой. Достаточно раскована и комфортна в общении. С ней можно обсудить любые темы, она хороший компаньюн и собутыльник. Умеет пьянствовать и веселиться.';
$keywords = 'секс эскорт,сексуальная девушка питер, лера эскорт спб';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-spb.php');
$canonical = 'https://missbliss.spb.ru/attractive/lera/';
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
$uri = substr(substr($_SERVER['REQUEST_URI'], 18), 10);
$currentFile = trim($uri, '/');
$currentFile = preg_replace('/\/+/', '/', $currentFile);
echo generateNavigation($currentFile);
?>
<h1><?=$name1 ?>. <span>Санкт-</span>Петербург</h1>
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
<h2>Лера</h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Москва, Сочи, Казань</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>93/64/102 см</span></p><p>Размер груди<span>2,5 (80B) натуральная</span></p><p>Цвет глаз<span>Серо-голубой</span></p><p>Цвет волос<span>Русый-Блонд</span></p><p>Размер одежды<span>S-M</span></p><p> Ориентация<span>Бисексуальна</span></p><p>Языки<span>Русский, Английский(B2)</span></p><p>Отношение к курению<span>Не Курю</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon">люблю морепродукты, европейскую и китайскую кухню <br>
из алкоголя - белое сухое вино, виски, джин
</div>
<div class="accBut">Стиль</div>
<div class="accCon">Сексуальные платья, юбки<br><br>* Тело ухоженное, все натуральное.<br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <br>На теле есть татуировки на тему мультяшек и мемов<br></div>
<div class="accBut">Хобби</div>
<div class="accCon">спорт, вязание, психология, медицина
</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>О себе...</h4><p>В себе нравится:<br> легкость, чувство юмора, ум <br>

<br>В мужчинах: целеустремленность, забота, внимательность, чувство юмора<br>

<br>В жизни: что в жизни возможно все, главное приложить усилия и терпение и то, что во всем есть минусы и плюсы, нет черного и белого</p><br><h4>Оценка агентства...</h4><p>Лера яркая современная девушка с пухлыби губёшками и хорошей фигурой. Достаточно раскована и комфортна в общении. С ней можно обсудить любые темы, она хороший компаньюн и собутыльник. Умеет пьянствовать и веселиться.</p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
<div class="accBut">Вознаграждение</div>
<div class="accCon"><div class="column last">
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
<blockquote><p>Живи так, как хочешь, и борись с Судьбой. Тогда ты сможешь посмотреть на прошлое с улыбкой.</blockquote>
<blockquote><p>Так-так, иногда сбываются даже прогнозы погоды.</blockquote>
<blockquote><p>Одинаковое счастье — быть победителем или побежденным в битвах любви.</blockquote><br>
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