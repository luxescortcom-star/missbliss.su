<?php

$name = 'alina';
$name1 = 'Алина';
$name2 = 'Алину';
$blur = null;
$name3 = 'Алине';
$picsFolio = 'alina';
$city='spb';
$home = 'Санкт-Петербург';
$height = '170 см';
$weight = '55 кг';
$birthdate = '2000-05-13';
$dataType = 'молодая фаворитка блондинка спб';

$fxt = 'jpg';

$en_title='A bewitching mixture of coquetry and sexuality, an easy-going, cheerful, intelligent girl. Elite escort in St. Petersburg';
$title='Алина- яркая стройная веселая спутница.  Элитный эскорт в Санкт-Петербурге';
$description = 'Завораживающая смесь кокетства и сексуальности, легкая в общении веселая интеллигентная девушка. Красивая, уникальная с роскошной фигурой юная Леди';
$keywords = 'эскортница блондинка спб,красивая блондинка, элитный эскорт спб, Алина спб эскорт';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-spb.php');
$canonical = 'https://missbliss.spb.ru/favorites/alina/';

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
  <?php

include (__ROOT__. '/includes/workers/lightbox_functions.php');


?>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Есть загранпаспорт</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>80/63/95 cm</span></p><p>Размер груди<span>2 (75B), натуральная </span></p><p>Размер одежды<span>M-S</span></p><p>Цвет глаз<span>Серо-Зеленый</span></p><p>Цвет волос<span>Русый</span></p><p> Ориентация<span>Гетеро</span></p><p>Отношение к курению<span>Не курю</span></p><p>Общение<span>Русский-Английский</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon"><i class="far fa-star"></i> Предпочитаю морепродукты, итальянская кухня. <br><i class="far fa-star"></i> Из напитков - Вино красное сухое или полусладкое, кофе, кофе с ромом. <br><i class="far fa-star"></i> Цветы: пионы, лилии, тюльпаны
</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Сексуальная классика<br><i class="far fa-star"></i> Элегантная классика <br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное 100% натуральное чистое<br><br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Чтение художественной и бизнес литературы, прогулки на природе, музыка, поэзия, танцы, кулинария.
</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Обо мне...</h4><p>Настоящая, искренняя. <br>Женственная внутри и снаружи.<br> Харизматичная, артистичная, манящая, <br>"с огоньком".<br> Легко могу быть раскованной, но никогда не буду вульгарной. <br><br>В мужчинах ценю порядочность, галантность. <br><br>/ <?=$name1 ?> / <br><br><h4>Оценка агентства...</h4><p><?=$name1 ?>- завораживающая смесь кокетства и сексуальности, легкая в общении веселая интеллигентная девушка. Красивая, уникальная с роскошной фигурой юная Леди. Умеет быть любимой.<br><br> Рекомендуем! <br><br> <br><br></p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
<div class="accBut">Вознаграждение</div>
<div class="accCon"><div class="column last">
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
<blockquote><p>Нет лучшего дезодоранта, чем успех.</blockquote>
<blockquote><p>Когда сорокалетний мужчина влюбляется в двадцатилетнюю девушку, он ищет не ее молодость, а свою.</blockquote>
<blockquote><p>Две самые полезные книги для девушки – кухонная книга матери и чековая книжка отца.</blockquote>
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