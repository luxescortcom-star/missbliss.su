<?php 
$name = 'polina';
$name1 = 'Polina';
$name2 = 'Polina';
$blur = true;
$name3 = 'Polina';
$picsFolio = 'polina';

$home = 'Moscow';
$birthdate = '2003-12-26'; 
$height = '173 см';
$weight = '56 kg';
$dataType = 'young attractive brunette model msk';
$city = 'msk';


$ru_title = 'Полина 🤩красивая достойная девушка, танцовщица и нежная любовница. МиссБлисс Москва';
$title = 'Polina 🤩Beautiful and slender, hottest and elegant girl. Miss Bliss Moscow';
$description = 'Open, sociable, ready for new acquaintances, biophile, treat everyone with kindness. I like to achieve my goals, I don’t like to sit in one place, I’m always on the move.';
$keywords = 'young gorgeous sportswoman, Moscow dancer in escort, Polina escort Moscow';
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
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>88/63/90 cm </span></p><p> Bra Size<span>1 (70A) natural</span></p><p> Dress Size<span>S-M</span></p><p> Hair<span>Brown</span></p><p> Eyes<span>Blue</span></p><p> Sexual orientation<span>Straight</span></p><p>Attitude to smoking <span>Non Smoker</span></p><p> Conversation<span> Russian, English</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">Prefer fruits and seafood <br> From Drinks - dry white wine, for example Sauvignon Blanc</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Elegant<br><i class="far fa-star"></i> Sexy femininity <br><i class="far fa-star"></i> Classic <br><br><i class="fa fa-check" aria-hidden="true"> </i> The body is clean and well-groomed <br> <i class="fa fa-check" aria-hidden="true"> </i> All natural. </div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Yoga, dance, cooking</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About me...</h4><p>Open, sociable, ready for new acquaintances, biophile, I treat everyone with kindness.<br><br> I like to achieve my goals, I do not like to sit in one place, in motion all the time. <br><br>Men like self-confidence, sense of humor, gallantry, kindness, honesty. <br><br>/ <?=$name1 ?> 💋/ <br><br><h4>Agency Estimation...</h4><p><?=$name1 ?> Beautiful and slender, hottest and elegant girl. <?=$name1 ?> is a worthy choice when you need a fresh, smart and beautiful girl. With a good sense of humor and manners. Recommend!</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review <i class="fas fa-feather"></i></a></h4></div>
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
<blockquote><p>There is only one way to avoid criticism - to do nothing, to say nothing and to be nobody.</blockquote>
<blockquote><p>Life is only a sad dream, seen in a dream.</blockquote>
<blockquote><p>The way you spend your days reflects the way you spend your life.</blockquote>
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