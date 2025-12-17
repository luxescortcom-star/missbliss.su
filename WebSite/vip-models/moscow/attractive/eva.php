<?php


$name = 'eva';
$name1 = 'Ева';
$name2 = 'Еву';
$blur = true;
$name3 = 'Еве';
$picsFolio = 'eva';
$city = 'msk';
$home = 'Москва';
$birthdate = '2004-05-03';
$height = '160 см';
$weight = '52 кг';
$dataType = 'молодая модель  би брюнетка мск';


$en_title = 'Eva 🤩 Beautiful worthy girl, dancer and wonderful lover';
$title = 'Ева 🤩миниатюрная милая брюнетка с красивой сексуальной фигуркой';
$description = 'Красивая с сексуальной фигуркой. Умная, образованная и начитанная, она умеет слушать и всегда сможет поддержать интересную беседу.';
$keywords = 'молодая красивая студентка, студентка эскортница, Ева эскорт москва';
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

<?php include_once (__ROOT__. '/includes/workers/slider_functions_FTP_old.php'); ?>


</div>
</div>
 <?php include_once (__ROOT__. '/includes/workers/lightbox_functions.php');

?>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>По России</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>75/57/90 cm</span></p><p>Размер груди<span>2 (75B) натуральная</span></p><p>Цвет глаз<span>Серо-Голубые</span></p><p>Цвет волос<span>Черный</span></p><p>Размер одежды<span>S-XS</span></p><p> Ориентация<span>Гетеро</span></p><p>Языки<span>Русский, English</span></p><p>Отношение к курению<span>Не Курю</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon">Предпочитаю безалкогольные напитки и в еде предпочитаю легкую и вкусную</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Casual<br><i class="far fa-star"></i> Классика<br> <br> <i class= "fa fa-check" aria-hidden= "true"> </i> Тело чистое, ухоженное <br> <i class="fa fa-check" aria-hidden="true"> </i> 100% натурально <br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Есть татуировки<br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Книги, прогулки с друзьями.</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Обо мне...</h4><p>В жизни меня радуют, позитивные люди без комплексов, с которыми есть о чем поговорить. <br>
В книгах меня радует интересный и захватывающий сюжет.<br>
В мужчинах руки, сила, чувство юмора<br></p><h4>Оценка агентства...</h4><p><?=$name1 ?>, миниатюрная милая слегка застенчивая студентка. Красивая с сексуальной фигуркой. Умная, образованная и начитанная, она умеет слушать и всегда сможет поддержать интересную беседу. Умеет быть любимой. Рекомендую!</p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>Ничто так не выдает человека, как то, над чем он смеётся..</blockquote>
<blockquote><p>Какая это роскошь — в любую минуту иметь возможность обнять любимого человека.</blockquote>
<blockquote><p>Сплошные солнечные дни порождают пустыню.</blockquote><br>
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