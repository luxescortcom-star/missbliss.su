<?php


$name = 'alice';
$name1 = 'Алиса';
$name2 = 'Алису';
$blur = null;
$name3 = 'Алисе';
$picsFolio = 'alice-red';
$home = 'Москва';
$birthdate = '2003-03-18';
$height = '168 см';
$weight = '53 кг';
$dataType = 'молодая модель  би блондинка мск';
$city = 'msk';


$title = 'Алиса яркая стильная стройная юная девушка с татуировками и красными волосами. МиссБлисс Москва';
$en_title = 'Alice is a bright stylish slender predator temptress with tattoos and red hair. Miss Bliss Moscow';
$description = 'Артистичная и яркая девочка она легко влюбляет и окружает своим сказочным обоянием.';
$keywords = 'юная эскортница, эскортница  москва, эскортница с красными волосами';
$fxt = 'jp2';


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
include_once (__ROOT__. '/includes/workers/slider_functions_FTP_old.php');

?>
</div>
</div>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span<?=$home ?></span></p><p>Выезды<span>По Москве только</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>80/65/90 см</span></p><p>Размер груди<span>1 (70А) натуральная</span></p><p>Цвет глаз<span>Зеленый</span></p><p>Цвет волос<span>Темно-Русый</span></p><p>Размер одежды<span>S</span></p><p> Ориентация<span>Бисексуальна</span></p><p>Языки<span>русский - Английский</span></p><p>Отношение к курению<span>Не курю</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения</div>
<div class="accCon">Итальянская кухня, морепродукты<br> Шампанское, белое и красное вино полусухое.</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Женственный <br><i class="far fa-star"></i> Элегантный<br><i class="far fa-star"></i> Сексуальный<br><i class="far fa-star"></i> Классика.<br><br> <i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное.<br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Есть татуировки<br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Рисование, фотография</div>
 <div class="accBut">Отзывы</div>
<div class="accCon"><h4>Оценка агентства...</h4><p>Уникальная милая раскованная и общительная девушка. Артистичная и очень яркая она легко влюбляет и окружает своим сказочным обоянием. <br><br><?=$name ?> - достойный выбор, когда нужна молодая умная и красивая девушка. <br><br>Открытая раскованная с хорошим чувством юмора и манерами. Рекомендую!<br><br>/ Андрей, менеджер агентства / <br><br></p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>Есть только один способ избежать критики — ничего не делать, ничего не говорить и быть никем.</blockquote>
<blockquote><p>Мы все живем под одним небом, но у всех нас разные горизонты.</p></blockquote>
<blockquote><p>Если вы родились без крыльев, не мешайте им расти.</p></blockquote><br>
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