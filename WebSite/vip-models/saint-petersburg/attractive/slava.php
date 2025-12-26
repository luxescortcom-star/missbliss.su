<?php 


$name='slava';
$name1='Слава';
$name2='Славу';
$name3='Славе';
$blur = true;
$picsFolio = 'slava';
$city='spb';
$home = 'Санкт-Петербург';
$height='164 см';
$weight='52 кг';
$birthdate = '1978-02-12'; 
$dataType = 'взрослая модель би брюнетка спб';


$title='Слава, взрослая красивая стройная Леди для приятного досуга в Санкт-Петербурге. Агентство МиссБлисс';
$en_title='Slava, adult beautiful slim Lady for pleasant leisure in Saint Petersburg. The MissBliss escorts Agency';
$description = 'Спокойная, самоуверенная, скромная, немного стеснительная, прямолинейная, с хорошим чувством юмора, открытая всему новому ';
$keywords = 'опытная эскортница,слава эскортница спб, взрослая дама эскорт спб';

$fxt = 'jpg';

$departures='По России';
$volumes='82/68/93 cм';
$bra='1 (75B)  натуральная';
$eyes='Серо-зеленый';
$hair='Брюнетка';
$size='S-М';
$orientation='Бисексуальна';
$languages='Русский, Турецкий';
$smoking='Не Курю';

$preferences='Люблю итальянскую кухню , белое сухое вино ';
$style='<i class="far fa-star"></i> Сексуальная элегантность<br><i class="far fa-star"></i> Casual<br><i class="far fa-star"></i> Классика<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное, чистое,<br><i class="fa fa-check" aria-hidden="true"></i> все натуральное. <br><br>';

$hobby='Книги, Кино, Путешествия';



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
<a href="#"  id="logo" title="Агентство МиссБлисс, Вход в Нарнию"></a>
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
include_once (__ROOT__. '/includes/workers/slider_functions_FTP.php');

?>
</div>
</div>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span><?=$departures ?></span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span><?=$volumes ?></span></p><p>Размер груди<span><?=$bra ?></span></p><p>Цвет глаз<span><?=$eyes ?></span></p><p>Цвет волос<span><?=$hair ?></span></p><p>Размер одежды<span><?=$size ?></span></p><p> Ориентация<span><i class="fas fa-venus-mars"></i> <?=$orientation ?></span></p><p>Языки<span><?=$languages ?></span></p><p>Отношение к курению<span><?=$smoking ?></span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p><br></div>
<div class="accBut">Предпочтения</div>
<div class="accCon"><?=$preferences ?></div>
<div class="accBut">Стиль</div>
<div class="accCon"><?=$style ?></div>
<div class="accBut">Хобби</div>
<div class="accCon"><?=$hobby ?></div>
 <div class="accBut">Отзывы</div>
<div class="accCon"><h4>О себе...</h4><p>Спокойная, самоуверенная, скромная, немного стеснительная, прямолинейная, с хорошим чувством юмора, открытая всему новому <br><br></p><h4>Оценка агентства...</h4><p>Слава - интересная сексуальная женщина. Ваша темпераментная спутница для отдыха в Санкт-Петерурге</p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Написать отзыв</a> <i class="far fa-thumbs-up"></i></h4><br></div>
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
<blockquote><p>Пока не увидишь ад, рай тебе не понравится.</p></blockquote>
<blockquote><p>Кто боится дождя, попадает под град.</p></blockquote>
<blockquote><p>Нет дерева, которого не коснулся бы ветер.</p></blockquote><br>
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