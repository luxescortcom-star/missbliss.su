<?php 

$name='alina';
$name1='Alina';
$name2='Alina';
$blur = null;
$name3='Alina';
$picsFolio='alina_fav';
$city = 'msk';

$home = 'Moscow';
$birthdate = '2003-02-12'; 
$height = '175 см';
$weight = '58 kg';
$dataType = 'adult favorite bi slim  brunette msk';


$title='Alina, a beautiful intelligent mistress, an elite escort in Moscow';
$ru_title='Алина, красивая яркая модель.  Женственная, красивая спутница для достойного джентельмена';
$description = 'Alina, a beautiful intelligent lover. With a wonderful sense of humor, clever, good education and education sodayat unique charm charm. Feminine, beautiful model for a decent gentleman.';
$keywords='slim long-legged escort, alina escort, moscow escort';
$fxt='jpg';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');
include_once (__ROOT__. '/includes/en/profiles/moscow/favorites/alina.php');

include_once (__ROOT__. '/includes/en/profile-top-msk.php');

$canonical = ''.$url.'';


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
<?php
$folder='b';
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
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>90/60/90 cm </span></p><p> Bra Size<span>1 (70C) natural </span></p><p> Dress Size<span>M-S</span></p><p> Hair<span>Brown</span></p><p> Eyes<span>Green</span></p><p> Sexual orientation<span>Bisexual </span></p><p>Attitude to smoking <span>Non Smoker</span></p><p> Conversation<span> Russian, English(poor)</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">Italian and Thai cuisine, dry wine, aporel. <br>Flowers: Tulips, Orchids</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Elegant<br><i class="far fa-star"></i> Sexy femininity <br><i class="far fa-star"></i> Classic <br><br><i class="fa fa-check" aria-hidden="true"> </i> The body is clean and well-groomed <br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Equestrian sport, Yoga</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>Agency Estimation...</h4><p>Alina, a beautiful intelligent lover. With a wonderful sense of humor, clever, good education and education sodayat unique charm charm. Feminine, beautiful model for a decent gentleman.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review <i class="fas fa-feather"></i></a> </h4></div>
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
<blockquote><p>Action may not always bring happiness, but there is no happiness without action.</p></blockquote>
<blockquote><p>Handsome is as handsome does.</p></blockquote>
<blockquote><p>A good name is better than riches.</p></blockquote>
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