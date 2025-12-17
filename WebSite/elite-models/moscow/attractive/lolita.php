<?php 


$name = 'lolita';
$name1 = 'Lolita';
$name2 = 'Lolita';
$name3 = 'Lolita';
$picsFolio = 'lolita';

$home = 'Moscow';
$birthdate = '2002-09-19'; 
$height = '156 см';
$weight = '47 kg';
$dataType = 'young attractive model blondie msk';
$city = 'msk';

$ru_title = 'Лолита юная красивая малышка Агентство МиссБлисс Москва';
$title = 'Lolita, Young beautiful baby escort in Moscow, The MissBliss Agency';
$description = 'Lolita is a cheerful, relaxed girl who communicates easily and loves to be the center of attention. A young, gentle baby with snow-white, gentle, snowy, gentle fresh skin, a blonde you can fall in love with.';
$keywords = 'lola girl, lola escort moscow, blonde lola escort';
$fxt = 'jp2';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-msk.php');

$canonical = 'https://missbliss.moscow/en/attractive/lolita/';
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
include_once (__ROOT__. '/includes/en/workers/slider_functions_old.php');

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
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>83/65/93 cm</span></p><p> Bra Size<span>2 (75B) natural</span></p><p> Dress Size<span>M-L</span></p><p> Hair<span>Brown</span></p><p> Eyes<span>Grey-Blue</span></p><p>Conversation<span>Russian</span></p><p>Sexual orientation<span>Straight</span></p><p>Attitude to smoking <span>Non Smoker</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">European cuisine</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Sexual feminity<br><i class="far fa-star"></i> Classic<br><i class="far fa-star"></i> Casual<br><br><i class="fa fa-check" aria-hidden="true"></i> Body well-groomed <br><i class="fa fa-check" aria-hidden="true"></i>All natural <br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Psychology, astronomy</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About me...</h4><p>Calm self-confident, I like to try something new. I like men with a good sense of humor.<br><br></p><h4>Agency Estimation...</h4><p>Young beautiful baby. Lolita confessed to me that she dreamed of working as an escort since the age of 17. It shows that she is a temperamental and loving girl, big beautiful eyes and plump lips speak of good health and hormonal background. Lolita is a cheerful uninhibited girl who communicates easily and loves to be in the spotlight. A young gentle baby with snow-white gentle, snowy, delicate fresh skin, a blonde you can fall in love with. I recommend this girl if you are looking for a natural relaxed cheerful young girl who will not pretend, who enjoys herself. And with her you will succeed and you can feel 15 years younger without any Viagra and other means.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review <i class="fas fa-feather"></i></a></h4></div>
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