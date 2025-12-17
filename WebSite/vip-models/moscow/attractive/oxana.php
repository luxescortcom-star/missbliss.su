<?php 
$name = 'oxana';
$name1 = 'Оксана';
$name2 = 'Оксану';
$blur = true;
$name3 = 'Оксане';
$picsFolio = 'oxana';

$home = 'Москва';
$birthdate = '1998-08-16'; 
$height = '164 см';
$weight = '49 кг';
$dataType = 'взрослая модель би брюнетка мск';
$city = 'msk';


$title = 'Оксана умная интеллигентная девушка, красивая, с ухоженным молодым телом. МиссБлисс Москва';
$en_title = 'Oksana is a smart, intelligent girl, beautiful, with a well-groomed young body. Miss Bliss Moscow';
$description = 'Я милая страстная разносторонняя общительная девушка. Люблю море, цветы, театр и тусовки. Нравятся интеллигентные и добрые мужчины.';
$keywords = 'интеллигентная девушка, красивая эскортница, эскорт молодое тело, милая страстная эскортница';
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
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Весь Мир</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>87/62/90 см</span></p><p>Размер груди<span>2 (70В) натуральная</span></p><p>Цвет глаз<span>Зеленый</span></p><p>Цвет волос<span>Шатен</span></p><p>Размер одежды<span>XS</span></p><p> Ориентация<span>Би-Секси</span></p><p>Языки<span>Русский</span></p><p>Отношение к курению<span>Не курю</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения</div>
<div class="accCon"><i class="far fa-star"></i> Морепродукты, европейская кухня. <br><i class="far fa-star"></i> Напитки: Вино, шампанское виски <br><i class="far fa-star"></i> Цветы: Розы красные, белые</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Женственный <br><i class="far fa-star"></i> Классика.<br><br> <i class="fa fa-check" aria-hidden="true"></i> Тело чистое, ухоженное.<br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Фитнес, беллетристика, танцы</div>
 <div class="accBut">Отзывы</div>
<div class="accCon"><h4>Обо мне...</h4><p>Я милая страстная разносторонняя общительная девушка. Люблю море, цветы, театр и тусовки. Нравятся интеллигентные и добрые мужчины. <br><br>/ Оксана /<br><br></p><h4>Оценка агентства...</h4><p>Большинство девушек приходят на собеседование и после сразу готовы сделать фото для анкеты. <br>Оксана пришла, задавала много вопросов, беспокоилась о конфиденциальности, а потом решила еще неделю подумать. Я думал, что уже не напишет. Но нет, через неделю позвонила и мы договорились о фотоессии. <br><br>К сожалению на сьемку приехала поздно, есть основная работа. Поэтому большинство снимков с искусственным освещением отельного номера, к сожалению не самого лучшего. Но я постарался показать Ксюшу во всей ее красе. И надо сказать она меня порадовала и была очень раскована. Единственное: прятала лицо за маской поскольку боится что ее увидит бывший мужчина или ее коллеги по основной работе. <br><br>Оксана умная интеллигентная девушка, красивая, с ухоженным молодым телом. Занимается фитнесом, причем не просто купила абонемент, а именно занимается. И по ней это видно, худенкие точеные ножки упругая попка, талия, кожа нежная чистая, красивая. Тело спортивное и молодое. <br><br>По характеру немного закрытая, но достаточно общительная и в процессе общения раскрывается все больше и больше. Рекомендую если вам важно, чтобы девушка была воспитана умна и в тоже время достаточно сексуальна и раскована. <br><br>Оксана может одеться стильно красиво в вечернее платье или деловой стиль. С ней вы будете себя чувствовать себя комфортно и никто глядя со стороны даже не подумает что она из экорта, впрочем это можно сказать о многих наших девушках.  <br><br>/ Андрей, менеджер агентства /<br><br></p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>Чувства людей гораздо интереснее их мыслей.</blockquote>
<blockquote><p>Счастье — это горячий шоколад в холодный день!</blockquote>
<blockquote><p>Длина дороги узнаётся по её ширине.</blockquote>
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