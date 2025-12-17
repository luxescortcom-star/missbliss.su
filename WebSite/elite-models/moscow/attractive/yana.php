<?php 

$name='yana';
$name1='Yana';
$name2='Yana';
$blur = null;
$name3='Yana';
$picsFolio='yana';
$city = 'msk';

$home = 'Moscow';
$birthdate = '2004-11-29'; 
$height = '160 см';
$weight = '48 kg';
$dataType = 'young attractive slim escort bi busty brunette msk';


$title='Yana, a petite, bright brunette with a beautiful sexy figure';
$ru_title='Яна, миниатюрная яркая брюнетка с красивой сексуальной фигуркой';
$description = 'Я молодая и игривая, люблю проводить время с приятными людьми в непринуждённой обстановке';
$keywords='миниатюрная красотка, эскортница молодая, девочка для эскорта, яна эскорт москва';
$fxt='jp2';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-msk.php');

$canonical = 'https://missbliss.moscow/en/attractive/yana/';

?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include_once (__ROOT__. '/includes/vip-head.php'); ?>
<?php include_once (__ROOT__. '/includes/styles-profile.php'); ?>
</head>
<?php include_once (__ROOT__. '/includes/en/menu2.php'); ?>
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
$uri = substr(substr($_SERVER['REQUEST_URI'], 12), 8);
$currentFile = trim($uri, '/');
$currentFile = preg_replace('/\/+/', '/', $currentFile);
echo generateNavigation($currentFile);
?>
<h1><?=$name1 ?>. <?=$home ?></h1>
</nav>
<div id="main">
<div class="project-image portfolio">
<div class="flexslider">
<?php include_once (__ROOT__. '/includes/workers/slider_functions_FTP_old.php');

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
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>90/62/88 cm </span></p><p> Bra Size<span>3 (75B) natural</span></p><p> Dress Size<span>40-42</span></p><p> Hair<span>Dark-Brown</span></p><p> Eyes<span>Brown</span></p><p> Conversation<span>Rus, English</span></p><p>Sexual orientation<span>Straight</span></p><p>Smoking <span>Some time smoke</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">Prefer semi-sweet wines, champagne and Italian cuisine</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Sexual femininity <br><i class="far fa-star"></i> Casual<br><i class="far fa-star"></i> Classics <br> <br> <i class="fa fa-check" aria-hidden="true"> </i> Body well-groomed, clean, <br> <i class="fa fa-check" aria-hidden="true"> </i> all natural. <br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Dancing, traveling, movies, German</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About Me...</h4><p>Young and playful, I like to spend time with nice people in a relaxed atmosphere</p><h4>Agency Estimation...</h4><p><?=$name1 ?>, a tiny young brunette with a beautiful sexy figure. Very temperamental and comfortable companion.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review <i class="fas fa-feather"></i></a></h4></div>
<div class="accBut">Fee</div>
<div class="accCon"><div class="column last">
<div class=table-title>
</div>
<?php include_once __ROOT__. '/includes/model-prices.php'; ?>
<div class="footer">
<?=$invite_en ?>
</div> </div>
    <!--noindex--><a class="close" title="сlose" rel="nofollow" href="#close"></a><!--/noindex-->
    </div>
</div>
</div>
<div class="widget clearfix">
<hr>
<div class="testimonial">
<blockquote><p>All virtue is summed up in dealing justly.</blockquote>
<blockquote><p>The gods too are fond of a joke.</blockquote>
<blockquote><p>Liking money like I like it, is nothing less than mysticism. Money is a glory.</blockquote>
</div>
<?=$invite_en ?>	
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