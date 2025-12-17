<?php 


$name='alla';
$name1='Алла';
$name2='Аллу';
$name3='Алле';
$blur = null;
$picsFolio = 'alla';
$city='spb';
$home = 'Санкт-Петербург';
$height = '170 см';
$weight = '55 кг';
$birthdate = '1995-08-28'; 
$dataType = 'взрослая фаворитка брюнетка спб';

$fxt = 'jpg';


$en_title='Alla, Beautiful elegant lady, supermodel, diamond escort Saint-Petersburg';
$title='Алла, интеллигентная девушка с хорошими манерами, Агентство МиссБлисс Спб';
$description = 'Стильная, красивая, ухоженная веселая очень обоятельная девушка! Слегка кокетлива, загадочна, с ней ваше сердце будет биться учащенно, а разум оставит вас в покое на некоторое время ';
$keywords = 'эскортница спб,брюнетка опытная эскорница, брюнетка эскорт спб, алла спб эскорт';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-spb.php');
$canonical = 'https://missbliss.spb.ru/favorites/alla/';

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
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезжаю<span>По России</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>90/65/90 </span></p><p>Размер груди<span>2 (75C)</span></p><p>Цвет глаз<span>Коричнево-зеленые</span></p><p>Цвет волос<span>Медовый блонд</span></p><p> Ориентация<span>Гетеро </span></p><p> Отношение к курению<span>Не курю</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p><p>Общение<span>Русский</span></p></div>
<div class="accBut">Предпочтения</div>
<div class="accCon">Русская, итальянская кухня. Восточные сладости, фрукты. Из напитков предпочитаю игристые, лёгкие вина. </div>
<div class="accBut">Стиль</div>
<div class="accCon">Элегантная женственность.<br><br>* Тело чистое, ухоженое. Все натуральное.</div>
<div class="accBut">Хобби</div>
<div class="accCon">Модельный бизнес, путешествия.</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Оценка агентства...</h4><p>Стильная, красивая, ухоженная веселая очень обоятельная девушка! Слегка кокетлива, загадочна, с ней ваше сердце будет биться учащенно, а разум оставит вас в покое на некоторое время </p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Написать отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
<div class="accBut">Вознаграждение</div>
<div class="accCon"><div class="column last">
<div class=table-title>
</div>
<?php include_once (__ROOT__. '/includes/favorites-rates2.php'); ?>
<div class="footer">
<?=$invite ?>
</div> </div>
    <a class="close" title="закрыть" href="#close"></a>
    </div>
</div>
</div>
<div class="widget clearfix">
<hr>
<div class="testimonial">
<blockquote><p>Мастерство кавалера заключается в том, чтобы сводить даму в театр так, чтобы чувство благодарности у нее осталось, а желание сходить еще раз- нет.</p></blockquote>
<blockquote><p>Если уж любить, то такую женщину, чтобы с ней было не стыдно попасться на глаза жене.</p></blockquote><br>
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