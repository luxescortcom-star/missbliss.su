<?php 


$name = 'polina';
$name1 = 'Полина';
$name2 = 'Полину';
$blur = true;
$name3 = 'Полине';
$picsFolio = 'polina';

$home = 'Москва';
$birthdate = '2003-12-26'; 
$height = '173 см';
$weight = '56 кг';
$dataType = 'молодая модель брюнетка мск';
$city = 'msk';


$title = 'Полина 🤩красивая достойная девушка, танцовщица и нежная любовница. МиссБлисс Москва';
$en_title = 'Polina 🤩Beautiful and slender, hottest and elegant girl. Miss Bliss Moscow';
$description = 'Открытая, общительная, готова к новым знакомствам, биофил, отношусь с добром ко всем. Нравится добиваться поставленных целей, не люблю сидеть на одном месте, все время в движении.';
$keywords = 'юная роскошная спортсменка, московская танцовщица в эскорте, Полина эскорт москва';
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
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>По Москве только</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>88/63/90 см</span></p><p>Размер груди<span>1 (70А) натуральная</span></p><p>Цвет глаз<span>Голубой</span></p><p>Цвет волос<span>Каштан</span></p><p>Размер одежды<span>M</span></p><p> Ориентация<span>Гетеро</span></p><p>Языки<span>Русский, Английский</span></p><p>Отношение к курению<span>Балуюсь электронными</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения</div>
<div class="accCon">Итальянская, грузинская кухни <br> Шампанское, белое и красное вино полусухое.</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Женственный <br><i class="far fa-star"></i> Элегантный<br><i class="far fa-star"></i> Сексуальный<br><i class="far fa-star"></i> Классика.<br><br> <i class="fa fa-check" aria-hidden="true"></i> Тело чистое, ухоженное.<br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Йога, танцы, кулинария</div>
 <div class="accBut">Отзывы</div>
<div class="accCon"><h4>О себе...</h4><p>Открытая, общительная, готова к новым знакомствам, биофил, отношусь с добром ко всем.<br><br> Нравится добиваться поставленных целей, не люблю сидеть на одном месте, все время в движении. <br><br>В Мужчинах нравится уверенность в себе, чувство юмора, галантность, доброта, честность. <br><br>/ <?=$name1 ?> 💋/ <br><br></p><br><h4>Оценка агентства...</h4><p>Красивая и стройная, пластиная и элегантная девушка. <br><br><?=$name1 ?> - достойный выбор, когда нужна свежая умная и красивая девушка. <br><br>Открытая раскованная с хорошим чувством юмора и манерами. Рекомендую!<br><br>/ Андрей, менеджер агентства / <br><br></p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>Есть только один способ избежать критики — ничего не делать, ничего не говорить и быть никем.</blockquote>
<blockquote><p>Жизнь – только грустный сон, увиденный во сне.</blockquote>
<blockquote><p>То, как вы проводите свои дни, отображает то, как вы проводите свою жизнь.</blockquote><br>
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