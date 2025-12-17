<?php

$name = 'alyona';
$name1 = 'Alyona';
$name2 = 'Alyona';
$blur = null;
$name3 = 'Alyona';
$picsFolio = 'alyona';
$home = 'Moscow';
$birthdate = '1993-12-10';
$height = '165 см';
$weight = '55 kg';
$dataType = 'adult attractive slim model blondie msk';
$city = 'msk';



$ru_title = 'Алёна- красивая стильная достойная обостительница';
$title = 'Alena is a beautiful, stylish, worthy sharpener escort. Your worthy companion in Moscow';
$description = 'Alena is a beautiful, stylish, worthy sharpener escort. Easy-to-speak is able to listen to her interesting and sometimes naive stories only give her charm and uniqueness. Kind and lovely girl.';
$keywords = 'beautiful lady, decent model, bright companion, favorite escort, escort in Moscow, Alyona escort';
$fxt = 'jp2';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-msk.php');
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
include_once (__ROOT__. '/includes/en/workers/slider_functions_old.php');

?>
</div>
</div>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>90/66/92 cm </span></p><p> Bra Size<span>2 (75B) natural</span></p><p> Dress Size<span>S-M</span></p><p> Hair<span>Blond</span></p><p> Eyes<span>Blue</span></p><p> Sexual orientation<span>Straight</span></p><p>Attitude to smoking <span>Smoker</span></p><p> Conversation<span> Russian, English</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">European / Japanese cuisine, dry red wine<br>
Flowers - red roses, yellow lilies</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Elegant<br><i class="far fa-star"></i> Sexy femininity <br><i class="far fa-star"></i> Classic <br><br><i class="fa fa-check" aria-hidden="true"> </i> The body is well-groomed <br> <i class="fa fa-check" aria-hidden="true"> </i> All natural. <br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Have tattoos<br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Camping, travel</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About me...</h4><p>A bit shy, but overall quite pleasant to talk to. I maintain a conversation on many topics, I do it with pleasure. I will help you spend a pleasant evening with a worthy man.<br><br></p><h4>Agency Estimation...</h4><p>Alena is a beautiful, stylish, worthy sharpener escort. Easy-to-speak is able to listen to her interesting and sometimes naive stories only give her charm and uniqueness. Kind and lovely girl.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review <i class="fas fa-feather"></i></a></h4></div>
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
<blockquote><p>Each animal has its own toys.</blockquote>
<blockquote><p>It’s bad for someone who does no good to anyone.</blockquote>
<blockquote><p>Better with the smart to lose than with a fool to find.</blockquote>
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