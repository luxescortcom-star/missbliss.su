<?php 

$name='natasha';
$name1='Natalie';
$name2='Natasha';
$name3='Natasha';
$blur = null;
$picsFolio = 'natasha';
$city = 'nyc';
$home = 'New-York';
$birthdate = '2000-04-10'; 
$height = '167 см';
$weight = '55 kg';
$dataType = 'adult favorite  busty brunette regions nyc';
$fxt = 'jpg';

$title='Your mistress in new york. Natasha will be your unforgettable adventure';
$ru_title='Твоя любовница в Нью-Йорке. Наташа станет твоим незабываемым приключением.';
$description = 'Make your most cherished fantasies a reality. Your mistress in new york. Natasha will be your unforgettable adventure';
$keywords = 'mistress new york, escort new york, natasha escorts new york';



define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-nyc.php');

$canonical = 'https://missbliss.ru/en/nyc/favorites/natasha/';
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
<p><a  href="../../../saint-petersburg/favorites/masha/" title="Maria"><i class="scr"></i></a></p>
<p><a href="../../../all_vip_escorts/" title="Escorts Girls from MissBliss Agency"><i class="scli"></i></a></p>
<p><a  href="../../../moscow/attractive/bella/" title="Bella"><i class="scl"></i></a></p>
	<h1><?=$name1 ?>. New-York City, USA</h1>
</nav>
<div id="main">
<div class="project-image portfolio">
<div class="flexslider">
<?php
$folder = 'b';
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
<div class="accCon"><p>Home Area<span>New-Yourk City</span></p><p>Travel<span>USA</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>90/65/95 см</span></p><p> Bra Size<span>3 (75C)</span></p><p> Dress Size<span>M-S</span></p><p> Hair<span>Dark-Brown</span></p><p> Eyes<span>Brown</span></p><p> Sexual orientation<span>Straight </span></p><p>Attitude to smoking <span>Non smoker</span></p><p> Conversation<span>Russian, English</span></p><p>Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">I prefer seafood. <br> From drinks - champagne</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Elegant femininity<br><br><i class="far fa-star"></i> * Clean, well-groomed body.<br><br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Dancing, music, books, travel.</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About Me...</h4><p>Make your most cherished fantasies a reality / <?=$name1 ?> /</p><br><h4>Agency Estimation...</h4><p>Your mistress in new york. Natasha will be your unforgettable adventure <br></p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a feedback</a> <i class="far fa-thumbs-up"></i></h4></div>
<div class="accBut">Fee</div>
<div class="accCon"><div class="column last">
<div class=table-title>
</div>
<?php include_once (__ROOT__. '/includes/en/nyc_favorites_rates.php'); ?>
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
<blockquote><p>The real character of a man is found out by his amusements.</p></blockquote>
<blockquote><p>We desire nothing so much as what we ought not to have.</p></blockquote>
<blockquote><p>Gratitude is not only the greatest of virtues, but the parent of all the others.</p></blockquote>
</div>
<?=$invite_en ?>
</div>
</div>
</div>
</div>

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