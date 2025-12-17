<?php 

$name='mila';
$name1='Mila';
$name2='Mila';
$blur = null;
$name3='Mila';
$picsFolio='mila';
$city = 'msk';

$home = 'Moscow';
$height = '168 см';
$weight = '53 kg';
$birthdate = '2004-06-06'; 
$dataType = 'young favorite bi slim brunette msk';

$fxt='jp2';
$ru_title='Мила, уникальная прекрасная девушка, малышка на миллион! Агентство МиссБлисс';
$title='Mila, a cheerful hottest bright escort! Your attractive escort in Moscow';
$description = 'Mila, a unique beautiful girl, a baby in a million! A very rare bird. We recommend!';
$keywords='young beautiful escort, elite escort, vip escort Moscow, escort Mila';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');
include_once (__ROOT__. '/includes/en/profile-top-msk.php');

$canonical = 'https://missbliss.moscow/en/favorites/mila_doll/';


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
<h2>Mila</h2>
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span<?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>88/60/90 cm </span></p><p> Bra Size<span>2 (75B) natural</span></p><p> Dress Size<span>S</span></p><p> Hair<span>Brown</span></p><p> Eyes<span>Brown</span></p><p> Conversation<span>Russian, English(poor)</span></p><p>Sexual orientation<span>Straight</span></p><p>Smoking <span>Non smoker</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">I love Italian food, white dry wine</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Sexual femininity<br><i class="far fa-star"></i> Casual<br><i class="far fa-star"></i> Modern<br><br><i class="fa fa-check" aria-hidden="true"></i> well-groomed body<br><i class="fa fa-check" aria-hidden="true"></i> young and natural<br><br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">I love animals, I love to travel</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About Me...</h4><p>Calm, self-confident, modest, a little shy, straightforward, with a good sense of humor, open to all new personality</p><br><h4>Agency Estimation...</h4><p>Mila is a unique beautiful girl, baby in a million! Very rare bird. Recommended!</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review <i class="fas fa-feather"></i></a></h4></div>
<div class="accBut">Fee</div>
<div class="accCon"><div class="column last">
<div class=table-title>
</div>
<?php include_once (__ROOT__. '/includes/en/favorites-rates-2.php'); ?>
<div class="footer">
<?=$invite_en ?>
</div> </div>
    <!--noindex--><a class="close" title="close" rel="nofollow" href="#close"></a><!--/noindex-->
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