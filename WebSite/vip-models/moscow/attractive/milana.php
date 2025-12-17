<?php



$name = 'milana';
$name1 = 'Милана';
$name2 = 'Милану';
$blur = true;
$name3 = 'Милане';
$picsFolio = 'milana';

$city = 'msk';

$home = 'Москва';
$birthdate = '2004-11-15';
$height = '163 см';
$weight = '59 кг';
$dataType = 'молодая эскортница busty брюнетка мск';

$attractive = 'class="current"';
$msk = 'class="current"';
$en_title = 'Milana, a kind and sweet beauty. Sexy escort, Moscow';
$title = 'Милана, добрая и милая красавица. сексуальный эскорт, Москва.';
$description = 'яркая обаятельная очень женственная и сексуальная девушка. Для VIP и очень состоятельных джентльменов';
$keywords = 'горячая брюнетка, сексуальная брюнетка, vip эскорт';
$fxt='avif';

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

<?php include (__ROOT__. '/includes/xxx-menu.php'); ?>

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
<h1><?=$name1 ?>. <?=$city1 ?></h1>
</nav>
<div id="main">
<div class="project-image portfolio">
<div class="flexslider">


<?php include_once (__ROOT__. '/includes/workers/slider_functions_FTP.php');

?>


</div>
</div>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Могу поехать<span>Весь Мир</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p>Размер груди<span>2 (75B) натуральная</span></p><p>Размер одежды<span>42-44</span></p><p>Цвет глаз<span>Голубой</span></p><p>Цвет волос<span>Брюнетка</span></p><p> Ориентация<span>Bisexual</span></p><p>Отношение к курению<span>Не курю</span></p><p>Общение<span>Русский, English</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon">Сухие вина, Итальянская, Восточная кухни</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Классика<br><i class="far fa-star"></i> Сексуальная элегантность<br><i class="far fa-star"></i> Модерн<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное<br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Есть татуировки<br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Танцы, кино, путешествия</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Оценка агентства...</h4><p>Очень красивая и эффектная девушка при этом она прекрасно воспитана и умеет себя достойно подать. Милана сможет красиво подчеркнуть ваш высокий статус и создать теплую атмосферу общения.</p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
<div class=accBut>Вознаграждение</div>
<div class=accCon><div class="column last">
<div class=table-title>
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
<blockquote><p>Проблема этого мира в том, что глупцы и фанатики слишком уверены в себе, а умные люди полны сомнений.</blockquote>
<blockquote><p>Только в те мгновения, когда вы видите людей смешными, вы действительно понимаете, как сильно вы их любите!</blockquote>
<blockquote><p>Чувства людей гораздо интереснее их мыслей.</blockquote>

</div>
<?=$invite ?>
</div>
</div>

</div>
</div>
<?php include_once ''. $gallery .''; ?>
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