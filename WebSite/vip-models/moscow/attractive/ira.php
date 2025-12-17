<?php

$name = 'ira';
$name1 = 'Ирина';
$name2 = 'Ирину';
$name3 = 'Ирине';
$blur = null;
$picsFolio = 'ira';
$city = 'msk';
$home = 'Москва';
$birthdate = '1992-01-28';
$height = '168 см';
$weight = '53 кг';
$dataType = 'взрослая модель брюнетка мск';


$en_title = 'Ira 🤩 beautiful middle aged girl escort in Moscow, Russia';
$title = 'Ирина 🤩 Красивая девушка средних лет, элитный эскорт в Москве';
$description = 'Взрослая интересная девушка с приятным характером и манерами';
$description = 'Красивая девушка средних лет';
$keywords = 'красивая эскортница, девушка средних лет эскорт москва';
$fxt = 'jp2';
define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-msk.php');

include_once (__ROOT__. '/includes/profiles/moscow/attractive/ira.php');
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
<?php include_once (__ROOT__. '/includes/workers/slider_functions_FTP.php');

?>
</div>
</div>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span><?=$departures ?></span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span><?=$volumes ?></span></p><p>Размер груди<span><?=$bra ?></span></p><p>Цвет глаз<span><?=$eyes ?></span></p><p>Цвет волос<span><?=$hair ?></span></p><p>Размер одежды<span><?=$size ?></span></p><p> Ориентация<span><i class="fas fa-venus-mars"></i> <?=$orientation ?></span></p><p>Языки<span><?=$languages ?></span></p><p>Отношение к курению<span><?=$smoking ?></span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p><br></div>
<div class="accBut">Предпочтения</div>
<div class="accCon"><?=$preferences ?></div>
<div class="accBut">Стиль</div>
<div class="accCon"><?=$style ?></div>
<div class="accBut">Хобби</div>
<div class="accCon"><?=$hobby ?></div>
 <div class="accBut">Отзывы</div>
<div class="accCon"><h4>Оценка агентства...</h4><p><?=$name1 ?>, Красивая девушка средних лет. </p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>Проблема этого мира в том, что глупцы и фанатики слишком уверены в себе, а умные люди полны сомнений.</blockquote>
<blockquote><p>Только в те мгновения, когда вы видите людей смешными, вы действительно понимаете, как сильно вы их любите!</blockquote>
<blockquote><p>Чувства людей гораздо интереснее их мыслей.</blockquote>

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