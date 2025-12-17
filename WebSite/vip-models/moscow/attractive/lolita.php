<?php

$name = 'lolita';
$name1 = 'Лолита';
$name2 = 'Лолиту';
$name3 = 'Лолите';
$picsFolio = 'lolita';

$home = 'Москва';
$birthdate = '2002-09-19';
$height = '156 см';
$weight = '47 кг';
$dataType = 'молодая модель блондинка мск';
$city = 'msk';

$title = 'Лолита юная красивая малышка Агентство МиссБлисс Москва';
$en_title = 'Lolita, Young beautiful baby escort in Moscow, The MissBliss Agency';
$description = 'Лолита веселая раскованная девушка легко общается любит быть в центре внимания. Юная нежная малышка с белоснежной нежной, снежной, нежной свежей кожей, блондинка в которую вы можете влюбиться.';
$keywords = 'лола девушка,лола эскорт москва, блондинка лола эскорт';
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
<?php

include_once (__ROOT__. '/includes/workers/lightbox_functions.php');


?>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Только в Москве</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>83/65/93 cm </span></p><p>Размер груди<span>2 (75B) натуральная</span></p><p>Цвет глаз<span>Голубой</span></p><p>Цвет волос<span>Блонд</span></p><p>Размер одежды<span>S-XS</span></p><p> Ориентация<span>Гетеро</span></p><p>Отношение к курению<span>Не Курю</span></p><p>Общение<span>Русский</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon">Стараюсь правильно питаться, в напитках предпочитаю кофе, вино, шампанское.</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Сексуальная элегантность<br><i class="far fa-star"></i> Casual<br><i class="far fa-star"></i> Классика<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное, чистое,<br><i class="fa fa-check" aria-hidden="true"></i> все натуральное. <br><br><br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Психология, астрономия</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>О себе...</h4><p>Спокойная уверенная в себе, люблю пробовать что-то новое. Мне нравятся мужчины с хорошим чувтством юмора. <br><br></p><h4>Оценка агентства...</h4><p>Юная красивая малышка. Лолита призналась мне, что мечтала работать в эскорте с 17 лет. По ней видно, что она темпераментная и любвеобильная девушка, большие красивые глаза и пухленькие губы говорят о хорошем здоровье и гормональном фоне. Лолита веселая раскованная девушка легко общается любит быть в центре внимания. Юная нежная малышка с белоснежной нежной, снежной, нежной свежей кожей, блондинка в которую вы можете влюбиться. Я рекомендую эту девушку если вам важна естественная раскованная веселая юная девочка которая не будет симулировать, которая сама получает удовольствие. И с ней у вас все хорошо получится и вы сможете почувствовать себя моложе лет на 15 без всякой виагры и дургих средств.</p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Написать отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>Полюбить человека, отвечающего тебе взаимностью, — это само по себе чудо.</p></blockquote>
<blockquote><p>Девушка хоть и маленькая, а греет лучше двух больших печек.</p></blockquote>
<blockquote><p>Вы должны гордиться тем, кто вы есть. Никогда не извиняйтесь за это.</p></blockquote><br>
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