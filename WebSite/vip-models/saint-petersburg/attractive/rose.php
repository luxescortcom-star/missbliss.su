<?php 

$name='rose';
$name1='Роза';
$name2='Розу';
$name3='Розе';
$blur = true;
$picsFolio = 'rose';
$city='spb';
$home = 'Санкт-Петербург';
$height = '158 см';
$weight = '40 кг';
$birthdate = '2004-02-12'; 
$dataType = 'молодая модель би брюнетка спб';

$fxt = 'jpg';

$en_title='Rose is a slender and bright doll. Ballerina and beauty, cheerful and relaxed escort';
$title='Роза - стройная и яркая куколка. Балерина и красавица, веселая и раскованная эскортница';
$description = 'Люблю создавать вокруг себя вдохновляющую атмосферу, наполненную любовью. Я чувственная, нежная и эмпатичная натура, красивая, как внешне, так и внутренне, харизматичная, яркая и весёлая';
$keywords = 'куколка эскортница,роза эскортница спб, балерина эскорт спб';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-spb.php');
$canonical = 'https://missbliss.spb.ru/attractive/rose/';

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
<div id=content class="container clearfix">
<p id=back-top style="display: block;">
<a href=#top><span></span></a>
</p>
<nav id=page-title>
<?php
include_once  ('../navigation.php'); 
$uri = substr(substr($_SERVER['REQUEST_URI'], 18), 10);
$currentFile = trim($uri, '/');
$currentFile = preg_replace('/\/+/', '/', $currentFile);
echo generateNavigation($currentFile);
?>
<h1><?=$name1 ?>. <span>Санкт-</span>Петербург</h1>
</nav>
<div id=main>
<div class="project-image portfolio">
<div class=flexslider>
<?php
include_once (__ROOT__. '/includes/workers/slider_functions_FTP.php');

?>
</div>
</div>
</div>
<div id=sidebar>
<div class=widget>
<h2>Роза</h2>
<div class="accBut first">Анкета</div>
<div class=accCon><p>Город:<span><?=$home ?></span></p><p>Выезды<span>По всей России</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p>Размер груди<span>1 (70B) Натуральная</span></p><p>Размер одежды<span>xS</span></p><p>Цвет глаз<span>Зеленый</span></p><p>Цвет волос<span>Шатен</span></p><p> Ориентация<span>Бисексуальна</span></p><p>Отношение к курению<span>Курю</span></p><p>Общение<span>Русский-Английский</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class=accBut>Предпочтения </div>
<div class=accCon>Предпочитаю европейскую, итальянскую кухню, морепродукты <br>
Из напитков: кофе, белое и красное вино.</div>
<div class=accBut>Стиль</div>
<div class=accCon><i class="far fa-star"></i> Casual<br><i class="far fa-star"></i> Модерн <br><i class="far fa-star"></i> Платья, юбки, чулки.<br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> На руке есть маленькая незаметная татуировка.</div>
<div class=accBut>Хобби</div>
<div class=accCon>Музыка и пение, танцы, фитнес, верховая езда, чтение стихов и книг, handmade, медитации</div>
<div class=accBut>Отзывы</div>
<div class=accCon><h4>Обо мне...</h4><p>Я чувственная, нежная и эмпатичная натура, красивая, как внешне, так и внутренне, харизматичная, яркая и весёлая<br><br>
Люблю создавать вокруг себя вдохновляющую атмосферу, наполненную любовью<br><br>
В мужчинах ценю вежливость, чувство юмора, доброту и заботу<br></p><br><h4>Оценка агентства...</h4><p>Роза - стройная и яркая куколка.<br> Балерина и красавица, веселая и раскованная эскортница.<br><br> Стильная роскошная малышка, она может стать вашим самым ярким событием в Санкт-Петербурге.<br> А также вы можете пригласить ее в другие города России.  <br> Она умеет интересно общаться и приятно шутить, хорошо воспитана. Учится в престижном учебном заведении.</p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
<div class=accBut>Вознаграждение</div>
<div class=accCon><div class="column last">
<div class=table-title>
</div>
<?php include_once __ROOT__. '/includes/model-prices.php'; ?>
<div class=footer>
<?=$invite ?>
</div> </div>
    <a class="close" title="сlose" href="#close"></a>
    </div>
</div>
</div>
<div class="widget clearfix">
<hr>
<div class='testimonial'>
<blockquote><p>Чувство долга — это прекрасно, но важно не отказываться от того, что приносит тебе счастье.</blockquote>
<blockquote><p>Ничего не оставляйте «для особого случая», ваша жизнь — и есть особый случай.</blockquote>
<blockquote><p>Разве чтобы любить себя, нужно чьё-то разрешение?</blockquote><br>

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