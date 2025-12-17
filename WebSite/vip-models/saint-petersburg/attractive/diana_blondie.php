<?php 

$name='diana';
$name1='Диана';
$name2='Диану';
$name3='Диане';

$picsFolio='diana_blondie';
$blur = null;

$home = 'Санкт-Петербург';
$height='165 см';
$weight='55 кг';
$birthdate = '1997-10-10'; 
$dataType = 'взрослая модель busty блондинка спб';
$city='spb';

$fxt = 'jpg';

$en_title='Diana beautiful luxurious blonde. Escort Saint Petersburg';
$title='Диана - красивая роскошная блондинка. Ваша яркая спутница в Санкт-Петербурге';
$description = 'Диана - взрослая интеллигентная девушка, без опыта в эскорте. Легкая милая в общении. Яркая миниатюрная блондинка с шикарной фигурой.';
$keywords = 'взрослая эскортница,красивя грудь эскорт, диана блондинка эскорт спб';


define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-spb.php');
$canonical = 'https://missbliss.spb.ru/attractive/diana_blondie/';
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
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>только Питер</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>91/66/92 см</span></p><p>Размер груди<span>4 (70D)</span></p><p>Цвет глаз<span>Серо-зеленый</span></p><p>Цвет волос<span>Блонд</span></p><p>Размер одежды<span>S</span></p><p> Ориентация<span>Гетеро</span></p><p>Языки<span>Русский-английский</span></p><p>Отношение к курению<span>Нейтральное</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon">люблю морепродукты, европейскую и китайскую кухню <br>
из алкоголя - белое сухое вино, коньяк
</div>
<div class="accBut">Стиль</div>
<div class="accCon">Сексуальные платья, юбки<br><br>* Тело ухоженное<br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> На теле есть симпатичные нежные 2 татуировочки.<br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Фитнесс</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Оценка агентства...</h4><p>Диана - взрослая интеллигентная девушка, без опыта в эскорте. Легкая милая в общении. Яркая миниатюрная блондинка с шикарной фигурой. </p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<?php include (__ROOT__. '/includes/footer.php'); ?>
</div>
</div>
<?php include (__ROOT__. '/includes/footer-spb-profile.php'); ?>


</html>