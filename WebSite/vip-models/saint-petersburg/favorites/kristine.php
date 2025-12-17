<?php 

$name='kristine';
$name1='Кристина';
$name2='Кристину';
$name3='Кристине';
$blur = true;
$picsFolio='kristine2';
$city='spb';
$home = 'Санкт-Петербург';
$height='169 см';
$weight='62 кг';
$birthdate = '1994-11-10'; 
$dataType = 'взрослая фаворитка би busty брюнетка спб';

$fxt = 'jp2';

$en_title='Beautiful bright slim showy model. Cheerful sociable smart girl. Elite escort in St. Petersburg';
$title='Элегантная и стильная девушка. Опытная искусительница. Элитный эскорт в Санкт-Петербурге';
$description = 'Не грусти, приглашай меня и будем веселиться!';
$keywords = 'эффектная модель,красивая яркая стройная, кристина эскорт спб';
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
include_once (__ROOT__. '/includes/workers/slider_functions_FTP_old.php');

?>
</div>
</div>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Есть шенген</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>90/62/90 cm</span></p><p>Размер груди<span>3 (80C)</span></p><p>Размер одежды<span>M-S</span></p><p>Цвет глаз<span>Зеленый</span></p><p>Цвет волос<span>Светло-Коричневый</span></p><p> Ориентация<span>Гетеро</span></p><p>Отношение к курению<span>Не курю</span></p><p>Общение<span>Русский-Английский</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon">Легкие закуски. <br>Из напитков - шампанское</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Сексуальный женственный<br><i class="far fa-star"></i> Классика <br><i class="far fa-star"></i> Casual, Спортивный<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное <br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Есть три маленькие татуировки<br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Искусство, путешествия, спорт, мода</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Обо мне...</h4><p>Не грусти, приглашай меня и будем веселиться! <br><br>/ <?=$name1 ?> / <br><br><h4>Оценка агентства...</h4><p><?=$name1 ?>- Элегантная и стильная девушка. Опытная искусительница.<br><br> <br><br></p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>Правильно подобранное выражение лица - это как рафаэлло — вместо тысячи слов.</blockquote>
<blockquote><p>Чем дольше ты ждёшь, тем больше вероятность, что ты ждёшь не там. </blockquote>
<blockquote><p>Жизнь – не те дни, что прошли, а те – что запомнились. </blockquote><br>
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