<?php 

$name = 'milana';
$name1 = 'Milana';
$name2 = 'Milana';
$blur = true;
$name3 = 'Milana';
$picsFolio = 'milana';

$home = 'Moscow';
$birthdate = '2004-11-15'; 
$height = '163 см';
$weight = '59 kg';
$dataType = 'young attractive escort busty  brunette msk';
$city = 'msk';

$en_title = 'Milana, a kind and sweet beauty. Sexy escort, Moscow';
$title = 'Милана, добрая и милая красавица. сексуальный эскорт, Москва.';
$description = 'A bright, charming, very feminine and sexy girl. For VIPs and very wealthy gentlemen.';
$keywords = 'sweet gentle escort, milana escort, model with beautiful breasts, escort milana moscow';
$fxt='avif';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-msk.php');




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

include_once (__ROOT__. '/includes/workers/slider_functions_FTP.php');

?>
</div>
</div>
   
</div>
<div id="sidebar">
<div class="widget">
<h2>Milana</h2>
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>90/60/92 cm</span></p><p> Bra Size<span>2 (75B) natural</span></p><p> Dress Size<span>S-XS</span></p><p> Hair<span>Brown</span></p><p> Eyes<span>Grey-Blue</span></p><p>Conversation<span>Russian, English</span></p><p>Sexual orientation<span>Bisexual</span></p><p>Attitude to smoking <span>Non Smoker</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">Japanese, European cuisine<br><br> Soft drinks</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Sexual feminity<br><i class="far fa-star"></i> Classic<br><i class="far fa-star"></i> Casual<br><br><i class="fa fa-check" aria-hidden="true"></i> Body well-groomed <br><i class="fa fa-check" aria-hidden="true"></i>All natural <br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Make up and backgammon</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>Agency Estimation...</h4><p>A very beautiful and striking woman, she's also well-mannered and knows how to present herself with dignity. Milana will beautifully highlight your high status and create a warm atmosphere.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review <i class="fas fa-feather"></i></a></h4></div>
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