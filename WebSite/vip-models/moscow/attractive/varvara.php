<?php 

$name = 'varvara';
$name1 = 'Варя';
$name2 = 'Варвару';
$blur = true;
$name3 = 'Варе';
$picsFolio = 'varvara';
$city = 'msk';

$home = 'Москва';
$birthdate = '1997-09-14'; 
$height = '171 см';
$weight = '55 кг';
$dataType = 'взрослая модель  busty  блондинка мск';


$en_title = 'Varvara 🤩hottest blondie escort';
$title = 'Варя 🤩красивая любвеобильная блондинка, элитный эскорт в Москве';
$description = 'Яркая, стильная, сексуальная. Очень избирательна в знакомствах. Гарантирую великолепное времяпрепровождение. При взаимной симпатии возможно много';
$keywords = 'роскошная блондинка, красивая эскортница, варвара эскорт москва, блондинка эскорт москва';
$fxt = 'jpg';

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
<p id="back-top" style="display: block;">
<a href="#top"><span></span></a>
</p>
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
	$folder='b';
include_once (__ROOT__. '/includes/workers/slider_functions_FTP_old.php');

?>
</div>
</div>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Европа</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>89/60/90 см </span></p><p>Размер груди<span>2 (75C) натуральная </span></p><p>Цвет глаз<span>Серо-зеленые</span></p><p>Цвет волос<span>Светлый</span></p><p>Размер одежды<span>42-44</span></p><p> Ориентация<span> Гетеро</span></p><p>Языки<span>Рус, English</span></p><p>Отношение к курению<span>Не курю</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения</div>
<div class="accCon">Итальянская и тайская кухня, белое сухое вино<br> Цветы: розы</div>
<div class="accBut">Стиль</div>
<div class="accCon">Элегантный<br>Сексуальная элегантность<br> Классический<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело чистое и ухоженное<br><i class="fa fa-check" aria-hidden="true"></i> Все натуральное.<br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Путешествия, фитнес, горные лыжи</div>
 <div class="accBut">Отзывы</div>
<div class="accCon"><h4>Обо мне...</h4><p>Яркая, стильная, сексуальная. Очень избирательна в знакомствах. Гарантирую великолепное времяпрепровождение, страстный секс, расслабляющий массаж. При взаимной симпатии возможно многое</p><h4>Оценка агентства...</h4><p><?=$name ?>, красивая стильная блондинка. С хорошим чувством умора. Эффектная и очень любвеобильная.</p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>Совесть должна быть как зуб. Если болит, то нужно лечить или удалять!</blockquote>
<blockquote><p>Не перенагружайте себя мелочами, а то утонете.</blockquote>
<blockquote><p>Хорошая шутка, сказанная вовремя, — лучший контрацептив.</blockquote><br>
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