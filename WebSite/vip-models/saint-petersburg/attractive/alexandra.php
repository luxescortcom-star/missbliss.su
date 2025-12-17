<?php 


$name='alexandra';
$name1='Саша';
$name2='Сашу';
$name3='Александре';
$blur = true;
$picsFolio = 'alexandra2';
$vip = true;
$home = 'Санкт-Петербург';
$height = '160 см';
$weight = '40 кг';
$birthdate = '2000-11-15'; 
$dataType = 'молодая модель брюнетка спб';
$city='spb';

$fxt = 'jp2';

$title='Alexandra 🤩is a bright stylish slender predator temptress with tattoos and red hair. Elite escort in St. Petersburg.';
$title_ru='Александра 🤩Стильная красивая стройная девочка.  Станет вашей прекрасной спутницей в Петербурге.';
$description = ' Стильная красивая стройная девочка. Востоная темпераментная любовница. Веселая и комфортная. С красивым стройным телом';
$keywords = 'стройная девочка,эскортница спб, саша эскортница спб';

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
</p><h1><?=$name1 ?>. <span>Санкт-</span>Петербург</h1>
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
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Только в Питере</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>78/60/88 см </span></p><p>Размер груди<span>2 (75В) натуральная</span></p><p>Цвет глаз<span>Зеленый</span></p><p>Цвет волос<span>Шатенка</span></p><p>Размер одежды<span>S-XS</span></p><p> Ориентация<span>Би-секси</span></p><p>Отношение к курению<span>Не курю</span></p><p>Общение<span>Русский-Английский</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon"><i class="fa fa-check" aria-hidden="true"></i> Европейская, русская кухни.<br><i class="fa fa-glass" aria-hidden="true"></i> Вино сухое, полусладкое, игристое, шампанское <br><br><i class="fa fa-key" aria-hidden="true"></i> Розы, пионы</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Классика<br><i class="far fa-star"></i> Элегантный стиль<br><br><i class="fa fa-check" aria-hidden="true"></i> Тело чистое<br><i class="fa fa-check" aria-hidden="true"></i> ухоженное<br><i class="fa fa-check" aria-hidden="true"></i> 100% натуральное<br><br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Восточные танцы, массаж, духовное развитие</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Обо мне...</h4><p>Нравится в себе: внешность, характер, ум, стиль, утонченность
Ценю в жизни: За то, что я есть.  Жизнь мне даёт возможность ощущать: любовь, радость и тд.  Это очень приятно. Жизнь даёт нам очень много возможностей, главное успеть их реализовать.
Мужчины мне нравятся: сильные, умные, деятельные, сексуальные, уверенные в себе, перспективные, успешные в обществе, с адекватной самооценкой, оптимистичные<br><br>/ <?=$name1 ?> 💋/ <br><br></p><br><h4>Оценка агентства...</h4><p> Стильная красивая стройная девочка. Востоная темпераментная любовница. Веселая и комфортная. С красивым стройным телом. Станет вашей прекрасной спутницей в Петербурге. <br><br>/ Менеджер / <br><br></p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Написать отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>В начале мира Солнце сотворило льва, а Луна — кошку.</blockquote>
<blockquote><p>Кто выпил молоко — остался цел, а кто посуду облизал — попался.</blockquote>
<blockquote><p>Ключ к сердцу в аду куют.</blockquote><br>
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
<?php include (__ROOT__. '/includes/footer.php'); ?>
</div>
</div>
<?php include (__ROOT__. '/includes/footer-spb-profile.php'); ?>


</html>