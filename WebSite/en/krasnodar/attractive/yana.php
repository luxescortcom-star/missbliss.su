<?php  

$name='yana';
$name1='Yana';
$name2='Yana';
$name3='Yana';
$blur = null;
$picsFolio = 'yana';

$home = 'Krasnodar';
$birthdate = '1997-11-28'; 
$height = '165 см';
$weight = '65 kg';
$dataType = 'adult attractive model busty blondie regions krasnodar';
$city = 'krasnodar';

$title='Yana - Beautiful adult escort girl with a luxurious, appetizing figure. Elite escort in Krasnodar.';
$ru_title='Яна- Красивая взрослая эскортница с роскошной аппетитной фигурой. Элитный эскорт в Краснодаре.';
$description = 'Yana - Beautiful adult escort with a luxurious, appetizing figure. Comfortable in communication and cheerful, it will be easy for you to talk to her on any topic. Charismatic, kind, comfortable companion in Krasnodar.';
$keywords = 'Krasnodar escort, escort girl Krasnodar, Yana escort girl';

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
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/menu2.php'; ?>
<div class="perspective_container">
<div id="header-bg"></div>
<div id="sub-header-bg"></div>
<div id="body-wrapper" class="wrapper">
<div id="header">
<!--noindex--><a href="#" rel="nofollow" id="logo"></a><!--/noindex-->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/menu.php'; ?>
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
<h1><?=$name1 ?>. <?=$home ?></h1>
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
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Sochi-Moscow-Spb</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>95/69/98 cm </span></p><p> Bra Size<span>3 (90C) Natural</span></p><p> Dress Size<span>M-L</span></p><p> Hair<span>Light-Brown</span></p><p> Eyes<span>Grey-Green</span></p><p>Sexual orientation<span>Straight</span></p><p>Attitude to smoking<span>Smoker</span></p><p> Conversation<span>Russian, English</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon"><i class="far fa-star"></i> Food preferences: European cuisine <br><i class="far fa-star"></i> Champagne, Prosecco <br><i class="far fa-star"></i> Flowers: Red and white roses</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Classic <br><i class="far fa-star"></i> Sexy Feminine<br> <i class="far fa-star"></i> Always stylish and sexy looks. <br> <br> <i class="fa fa-check" aria-hidden="true"></i>  The body of well-groomed<br><br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Travel, adventure</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>Agency Estimation...</h4><p>Yana is a beautiful adult girl with a gorgeous appetizing figure. Comfortable in communication and cheerful, it will be easy for you to communicate with her on any topic. Charismatic, kind, comfortable companion in Krasnodar.<br><br>/ Manager / <br><br></p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4></div>
<div class="accBut">Fee</div>
<div class="accCon"><div class="column last">
<div class=table-title>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/fee-attractive.php'; ?>
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