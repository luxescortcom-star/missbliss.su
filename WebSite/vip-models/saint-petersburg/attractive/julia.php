<?php 



$name='julia';
$name1='Юля';
$name2='Юлю';
$name3='Юлии';
$picsFolio='julia';

$blur = null;
$city='spb';
$home = 'Санкт-Петербург';
$height='167 см';
$weight='48 кг';
$birthdate = '1997-04-10'; 
$dataType = 'взрослая модель  брюнетка спб';

$fxt = 'jp2';

$en_title='Julia 🤩is a bright slender effective girl. Smiling and cheerful! Elite escort in St. Petersburg';
$title='Юля яркая стройная эффектная девушка - Элитный эскорт в Спб';
$description = 'Улыбчивая и веселая она умеет увлечь и захватить ваше внимание. Хороший психолог, умеет слушать. Темперемантная девушка без комплексов. Хорошо и стильно выглядит прилично одета.';
$keywords = 'спб эскорт,  юля эскорт спб';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-spb.php');
$canonical = 'https://missbliss.spb.ru/attractive/julia/';

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
include_once (__ROOT__. '/includes/workers/slider_functions_FTP_old.php');

?>
</div>
</div>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Санкт-Петербург</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>83/62/88 см </span></p><p>Размер груди<span>2 (75B) Натуральная</span></p><p>Размер одежды<span>S-XS</span></p><p>Цвет глаз<span>Голубой</span></p><p>Цвет волос<span>Светло-Русые</span></p><p> Ориентация<span>Би-секси</span></p><p>Отношение к курению<span>Курю</span></p><p>Общение<span>Русский, English</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon">Еда:<br> Пасты, десерты, мороженое.<br><br> Напитки:<br> Кофе, Игристые вина, виски<br><br> Цветы: Розы, герберы, пионы<br></div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Классика<br><i class="far fa-star"></i> Сексуальный Casual<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное чистое<br><i class="fa fa-check" aria-hidden="true"></i> Все натуральное.<br><br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Танцы<br><br></div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Оценка агентства...</h4><p>Юля яркая стройная эффектная девушка. Улыбчивая и веселая она умеет увлечь и захватить ваше внимание. Хороший психолог, умеет слушать. Темперемантная девушка без комплексов. Хорошо и стильно выглядит прилично одета. </p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></h4></div>
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
<blockquote><p>Отношения — это роскошь, которую такие люди, как мы, не могут себе позволить.</blockquote>
<blockquote><p>Если позволить вам поцеловать руку, то вы потом пожелаете в локоть, потом в плечо...</blockquote>
<blockquote><p>Плохо быть как все, а если тебя считают странной — это не беда...</blockquote><br>
</div>
<?=$invite ?>

</div>
</div>

</div>
</div>
<?php include_once __ROOT__. '/section_generator.php'; ?>
</div>
<?php include_once __ROOT__. '/includes/footer.php'; ?>

</ul>
</div>
</div>
<?php include_once __ROOT__. '/includes/footer-profile.php'; ?>



</html>