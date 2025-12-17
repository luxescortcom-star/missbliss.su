<?php 

$name = 'masha';
$name1 = 'Маша';
$name2 = 'Марию';
$blur = 'true';
$vip = 'true';
$name3 = 'Маше';
$picsFolio = 'masha';
$city='spb';
$home = 'Санкт-Петербург';
$height = '175 см';
$weight = '55 кг';
$birthdate = '2000-03-05'; 
$dataType = 'молодая фаворитка брюнетка спб';

$fxt = 'avif';
	
$en_title='✨ Masha | Elite escort in Saint Petersburg | Refined brunette with aristocratic grace';
$title='✨ Маша | Элитный эскорт в Санкт-Петербурге | Утонченная брюнетка с аристократической грацией';
$description = 'Маша — воплощение элегантности и загадочности. Высокая, стройная брюнетка с безупречными манерами и обволакивающим спокойствием. Ее красота — как редкий антиквариат: изысканная, глубокая, манящая. Идеальная спутница для светских мероприятий, романтических ужинов и приватных встреч в Санкт-Петербурге.';
$keywords = 'эскорт спб, элитные девушки питер, брюнетки санкт-петербург, спутница на вечер, красивые женщины питер, эскорт сопровождение, утончённые дамы, роскошный эскорт';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-spb.php');
$canonical = 'https://missbliss.spb.ru/favorites/masha/';

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
<a href="#" rel="nofollow" id="logo" title="Агентство МиссБлисс, Вход в Нарнию"></a>
<?php include (__ROOT__. '/includes/xxx-menu.php'); ?>
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
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span>Есть загранпаспорт</span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span>85/65/95 cm</span></p><p>Размер груди<span>2 (75В) натуральная</span></p><p>Размер одежды<span>M-S</span></p><p>Цвет глаз<span>Серо-Зеленый</span></p><p>Цвет волос<span>Темный шоколад</span></p><p> Ориентация<span>Гетеро</span></p><p>Отношение к курению<span>Не курю</span></p><p>Общение<span>Русский</span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Предпочтения </div>
<div class="accCon"><i class="far fa-star"></i> Всеядна, нравится пробовать новое. <br><i class="far fa-star"></i> Из напитков - красное/белое вино<br><i class="far fa-star"></i> Цветы: пионы, розы.
</div>
<div class="accBut">Стиль</div>
<div class="accCon"><i class="far fa-star"></i> Сексуальная классика<br><i class="far fa-star"></i> Элегантная классика <br><br><i class="fa fa-check" aria-hidden="true"></i> Тело ухоженное 100% натуральное чистое<br><br></div>
<div class="accBut">Хобби</div>
<div class="accCon">Танцы на пилоне
</div>
<div class="accBut">Отзывы</div>
<div class="accCon"><h4>Обо мне...</h4><p>Я — из тех, чьи руки знают тишину.<br>
Чья улыбка — как свет сквозь ветви берез на закате.<br>
В моем голосе — шепот летнего дождя, в жестах — плавность речной воды.<br><br>

Я не спорю с ветром и не ломаю судьбу.<br>
Я — та, что умеет слушать и чувствовать без слов.<br>
Моя покорность — не слабость, а мудрость.<br> Как земля, что принимает дождь и дарит цветы.<br><br>

В мужчине ищу родственную душу — того, чья сила — в спокойствии,<br>
чья доброта — как теплый свет в окне на зимней дороге.<br>
Если ты ценишь тихие утра, искренность без пафоса и нежность без напоминаний —
давай дышать в одном ритме. <br><br>/ <?=$name1 ?> / <br><br><h4>Оценка агентства...</h4><p>Маша — как редкое вино из погребов Петербурга:<br>
высокая, с осиной талией и темной гладью волос, что струятся по плечам, словно шелк.<br><br>

Ее красота — не для всех.<br>
Она для тех, кто ценит идеальные пропорции, скрытую чувственность и умение быть желанной без единого лишнего жеста.<br><br>

В ее движениях — грация пантеры, в голосе — бархатная глубина.<br>
Она говорит мало, но каждое ее слово — как намек на тайну.<br><br>

Ее спокойствие гипнотизирует.<br>
Ее присутствие притягивает взгляды.<br>
Ее смех — как звук хрустального бокала в полутьме.<br><br>

Если вы ищете не просто девушку, а настроение — Маша создаст его одним взглядом.<br><br> Рекомендуем! <br><br></p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Оставить отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
<div class="accBut">Вознаграждение</div>
<div class="accCon"><div class="column last">
<div class=table-title>
</div>
<?php include (__ROOT__. '/includes/favorites-rates.php'); ?>
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