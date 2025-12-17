<?php

$name='margarita';
$name1='Margo';
$name2='Margo';
$name3='Margo';
$picsFolio='margarita';

$blur = true;

$fxt = 'jp2';
$city='spb';
$home = 'St. petersburg';
$height='166 см';
$weight='57 кг';
$birthdate = '2000-07-07'; 
$dataType = 'adult attractive brunette spb';

$title='Margarita 🤩beautiful stylish girl in St. Petersburg';
$ru_title='Маргарита 🤩Красивая стильная девушка в Санкт-Петербурге';
$description = 'seductive interesting girl with a good body, which is like antique statues is completely sexy. Margot knows how to communicate, not a stupid, rather serious, temperamental girl';
$keywords = 'margo escort spb, margarita escort spb, escort girl margarita';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-spb.php');
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
$uri = substr(substr($_SERVER['REQUEST_URI'], 16), 14);
$currentFile = trim($uri, '/');
$currentFile = preg_replace('/\/+/', '/', $currentFile);
echo generateNavigation($currentFile);
?>
<h1><?=$name1 ?>. S<span>ain</span>t-Petersburg<span>, Russia</span></h1>
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
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>89/63/97 cm</span></p><p> Bra Size<span>2 (75B) natural</span></p><p> Dress Size<span>S-M</span></p><p> Hair<span>Brown</span></p><p> Eyes<span>Green</span></p><p> Conversation<span>Russian</span></p><p>Sexual orientation<span>Straight</span></p><p>Smoking <span>Non smoker</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon"><i class="fa fa-check" aria-hidden="true"></i> Any cuisine: omnivorous<br><i class="fa fa-check" aria-hidden="true"></i> Seafood and fruits.<br><i class="fa fa-glass" aria-hidden="true"></i> Whiskey, champagne, wine <br><br><i class="fa fa-key" aria-hidden="true"></i> Orchids, Roses, Tulips</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Classic<br><i class="far fa-star"></i> Modern<br><br><i class="fa fa-check" aria-hidden="true"></i> body well-groomed and clean<br><i class="fa fa-check" aria-hidden="true"></i> 100% natural.<br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Reading, psychology, astrology</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>Agency Estimation...</h4><p><?=$name1 ?> seductive interesting girl with a good body, which is like antique statues is completely sexy. Margot knows how to communicate, not a stupid, rather serious, temperamental girl</p><br>
	<h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>The best way to cheer yourself up is to try to cheer somebody else up.</blockquote>
<blockquote><p>Old friends and old wine are best</blockquote>
<blockquote><p>After silence that which comes nearest to expressing the inexpressible is music.</blockquote>
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
</div>
</div>
<?php include_once __ROOT__. '/includes/footer-profile.php'; ?>

 

</html>