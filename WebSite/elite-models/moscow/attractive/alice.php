<?php

$name = 'alice';
$name1 = 'Alice';
$name2 = 'Alice';
$blur = null;
$name3 = 'Alice';
$picsFolio = 'alice-red';
$home = 'Moscow';
$birthdate = '2003-03-18';
$height = '168 см';
$weight = '53 kg';
$dataType = 'young attractive model slim bi blondie msk';
$city = 'msk';


$ru_title = 'Алиса яркая стильная стройная юная девушка с татуировками и красными волосами. МиссБлисс Москва';
$title = 'Alice is a bright stylish slender predator temptress with tattoos and red hair. Miss Bliss Moscow';
$description = 'A unique sweet relaxed and sociable girl. Artistic and very bright, she easily falls in love and surrounds with her fabulous charm';
$keywords = 'young escort, escort moscow, escort with red hair';
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
include_once (__ROOT__. '/includes/en/workers/slider_functions_old.php');

?>

</div>
</div>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Moscow</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>80/65/90 cm </span></p><p> Bra Size<span>1 (70A) Natural</span></p><p> Dress Size<span>S</span></p><p> Hair<span>Red</span></p><p> Eyes<span>Green</span></p><p>Sexual orientation<span>Bisexual</span></p><p>Attitude to smoking<span>Non Smoker</span></p><p> Conversation<span>Russian-English</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon"><i class="far fa-star"></i> Food preferences: European cuisine, Sea Food<br><i class="far fa-star"></i> Champagne, Prosecco <br><i class="far fa-star"></i> Flowers: Red and white roses</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Classic <br><i class="far fa-star"></i> Sexy Feminine<br> <i class="far fa-star"></i> Always stylish and sexy looks. <br> <br> <i class="fa fa-check" aria-hidden="true"></i>  The body of well-groomed<br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> There are tattoos on the body<br><br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Drawing, Photograph</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>Agency Estimation...</h4><p>A unique sweet relaxed and sociable girl. Artistic and very bright, she easily falls in love and surrounds with her fabulous charm. <br><br><?=$name ?> is a worthy choice when you need a young smart and beautiful girl. <br><br>Open and uninhibited with a good sense of humor and manners. Recommend! <br><br>/ Andrei / <br><br></p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>The black bull does not change color, and the leopard does not change its spots</p></blockquote>
<blockquote><p>Do not sit in the first rows, so as not to be transplanted in the last.</p></blockquote>
<blockquote><p>While I hide my secret, she is my prisoner; when I released her, I am her prisoner.</p></blockquote>
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