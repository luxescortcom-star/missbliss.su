<?php 

$name='caroline';
$name1='Carol';
$name2='Caroline';
$name3='Caroline';
$blur = true;
$picsFolio = 'caroline';

$home = 'Krasnodar';
$birthdate = '2000-04-10'; 
$height = '167 см';
$weight = '55 kg';
$dataType = 'adult attractive model busty brunette regions krasnodar';
$city = 'krasnodar';

$en_title='Caroline, sexy beautiful escort, bright comfortable brunette, your companion in Krasnodar';
$title='Каролина, сексуальная красивая эскортницв, яркая комфортная брюнетка, ваша спутница в Краснодаре.';
$description = 'Каролина, сексуальная красивая эскортницв, яркая комфортная брюнетка, ваша спутница в Краснодаре';
$keywords = 'краснодар эскорт, эскортница краснодар, эскорт брюнетка краснодар';

$fxt = 'jp2';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-krasnodar.php');
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
<?php include_once (__ROOT__. '/includes/menu.php'); ?>
</div>
<div id="content" class="container clearfix">
<p id="back-top" style="display: block;">
<!--noindex--><a href="#top" rel="nofollow"><span></span></a><!--/noindex-->
</p>
<nav id="page-title">
<?php
include_once  ('../navigation.php'); 
$uri = substr(substr($_SERVER['REQUEST_URI'], 9), 5);
$currentFile = trim($uri, '/');
$currentFile = preg_replace('/\/+/', '/', $currentFile);
echo generateNavigation($currentFile);
?>
<h1><?=$name2 ?>. <?=$home ?></h1>
</nav>
<div id="main">
<div class="project-image portfolio">
<div class="flexslider">
<?php

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
<h2><?=$name2 ?></h2>
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Krasnodar</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>90/68/110 cm </span></p><p> Bra Size<span>4(80В) Natural</span></p><p> Dress Size<span>M</span></p><p> Hair<span>Brunette</span></p><p> Eyes<span>Green</span></p><p>Sexual orientation<span>Straight</span></p><p>Attitude to smoking<span>Non smoker</span></p><p> Conversation<span>Russian, English</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon"><i class="far fa-star"></i> Food preferences: European cuisine <br><i class="far fa-star"></i> Champagne <br><i class="far fa-star"></i> Flowers: Red and white roses</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Classic <br><i class="far fa-star"></i> Sport Casual<br> <i class="far fa-star"></i> Always stylish and sexy looks. <br> <br> <i class="fa fa-check" aria-hidden="true"></i>  The body of well-groomed<br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Tattoos on the body<br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Drawing</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>Agency Estimation...</h4><p>Caroline, sexy beautiful escort, bright comfortable brunette, your companion in Krasnodar<br><br>/ Manager / <br><br></p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4></div>
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