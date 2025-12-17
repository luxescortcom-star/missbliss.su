<?php 

$name='vika';
$name1='Вика';
$name2='Вику';
$name2='Виктории';
$blur = true;
$picsFolio='vika';
$city='spb';
$home = 'Санкт-Петербург';
$height='170 см';
$weight='62 кг';
$birthdate = '1995-08-08'; 
$dataType = 'взрослая модель busty блондинка спб';

$fxt = 'jpg';

$en_title='Vika 🤩 busty blonde hottest escort';
$title='Вика 🤩роскошная блондинка с красивой грудью';
$description = 'Воспитанная, ухоженная, нежная ласковая и игривая кошечка, люблю ласки, заботу и внимание. Очень женственная и сексуальная. Со мной можно забыть обо всем. Вдумчивая и веселая, могу поддержать любой разговор';
$keywords = 'роскошная эскортница,блондинка грудь красивая, виктория эскорт спб';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-spb.php');
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
<h2>Вика</h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Москва, Европа</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p>Размер груди<span>2 (75B) натуральная</span></p><p>Цвет глаз<span>Ореховый</span></p><p>Цвет волос<span>Блонд</span></p><p>Размер одежды<span>S-M</span></p><p> Ориентация<span>Гетеро</span></p><p>Языки<span>Русский, Английский</span></p><p>Отношение к курению<span>Не Курю</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon">Итальянская кухня, легкие напиткт, сухое белое или розовое вино или шампанское<br> Цветы: Розы и пионы</div>
<div class="accBut">Стиль</div>
<div class="accCon">Сексуальные платья, стильный женственный стиль<br><br>* Тело ухоженное, чистое.<br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Фитнес, йога, бассейн, живопись, кулинария, прогулки на природе</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>О себе...</h4><p>Воспитанная, ухоженная, нежная ласковая и игривая кошечка, люблю ласки, заботу и внимание. Очень женственная и сексуальная. Со мной можно забыть обо всем. Вдумчивая и веселая, могу поддержать любой разговор</p><br><h4>Оценка агентства...</h4><p>Интеллигентная воспитанная девушка, очень сексуальная и нежная. Слегка застенчивая с огоньком в глазах. Рекомендую!</p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
<div class="accBut">Вознаграждение</div>
<div class="accCon"><div class="column last">
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
<blockquote><p>Когда женщина, говорит слово "милый", посмотрите в зеркало и ощупайте голову.</blockquote>
<blockquote><p>Говорить серьезно и смешно, это про меня.</blockquote>
<blockquote><p>Все будет не так как мы решим, все будет тогда, когда мы решимся.</blockquote>
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