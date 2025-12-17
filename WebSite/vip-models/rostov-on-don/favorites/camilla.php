<?php


$name = 'camilla';
$name1 = 'Камилла';
$name2 = 'Камиллу';
$blur = null;
$name3 = 'Камилле';
$picsFolio = 'camilla';

$city = 'rnd';

$home = 'Ростов на Дону';
$height = '168-170 см';
$weight = '55 кг';
$birthdate = '2003-06-15';
$dataType = 'новенькая молодая фаворитка брюнетка ростов';

$fxt = 'avif';

$en_title='✨ Camilla, a young, sexy doll of unearthly beauty in Rostov-on-Don';
$title='✨ Камилла, юная сексуальная куколка неземной красоты в Ростове на Дону';
$description = 'Камилла скрасит ваш вечер и сделает его незабываемым в Ростове-на-Дону. Но если готовы оплатить проезд и сделать заказ минимум на сутки, то Камилла готова вылететь и в другой город';
$keywords = 'эскорт ростов, элитные девушки ростов, сексуальная куколка эскорт ростов, ростов дон эскорт';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-rnd.php');
$canonical = ''.$url.'';
?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include_once (__ROOT__. '/includes/vip-head.php'); ?>
<?php include_once (__ROOT__. '/includes/styles-profile.php'); ?>
</head>

<?php include (__ROOT__. '/includes/menu2.php'); ?>
<div class="perspective_container">
<div id="header-bg"></div>
<div id="sub-header-bg"></div>
<div id="body-wrapper" class="wrapper">
<div id="header">
<a href="#" rel="nofollow" id="logo" title="Агентство МиссБлисс, Вход в Нарнию"></a>
<?php include (__ROOT__. '/includes/xxx-menu.php'); ?>
</div>
<div id="content" class="container clearfix">
<nav id="page-title">
<p><a class="tooltip"  href="#" title="Оля"><i class="scr"></i></a>
</p><p><a href="/vip-models/all_vip_escorts/" title="Эскорт модели девушки Ростова"><i class="scli"></i></a>
</p><p><a class="tooltip" href="#" title="Диана"><i class="scl"></i></a>
<h1><?=$name1 ?>. Ростов<span> на Дону</span></h1>
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
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Есть загранпаспорт</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>90/70/90 cm</span></p><p>Размер груди<span>2 (75В) натуральная</span></p><p>Размер одежды<span>S</span></p><p>Цвет глаз<span>Карий</span></p><p>Цвет волос<span>Темный шоколад</span></p><p> Ориентация<span>Гетеро</span></p><p>Отношение к курению<span>Не курю</span></p><p>Общение<span>Русский</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon"><i class="far fa-star"></i> Всеядна, нравится пробовать новое. <br><i class="far fa-star"></i> Из напитков - красное/белое вино<br><i class="far fa-star"></i> Цветы: пионы, розы.
</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Сексуальная классика<br><i class="far fa-star"></i> Элегантная классика <br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное 100% натуральное чистое<br><br></div>

<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Оценка агентства...</h4><p>Камилла, юная сексуальная куколка неземной красоты скрасит ваш вечер и сделает его незабываемым в Ростове-на-Дону. Но если готовы оплатить проезд и сделать заказ минимум на сутки, то Камилла готова вылететь и в другой город.<br><br></p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
<div class="accBut">Вознаграждение</div>
<div class="accCon"><div class="column last">
<div class=table-title>
</div>
<?php include (__ROOT__. '/includes/favorites-rates.php'); ?>
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

</div>
<div id="footer">
<div id="footer-center" class="container">
<div class="footer-left">
<?php include (__ROOT__. '/includes/footer.php'); ?>
</div>
</div>
<?php include (__ROOT__. '/includes/footer-msk-profile.php'); ?>



 </html>