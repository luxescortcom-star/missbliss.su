<?php

$name = 'alina';
$name1 = 'Alina';
$name2 = 'Alina';
$blur = null;
$name3 = 'Alina';
$picsFolio = 'alina';

$home = 'Moscow';
$birthdate = '2002-10-02';
$height = '170 см';
$weight = '50 kg';
$dataType = 'young attractive slim bi model blondie msk';
$city = 'msk';


$title = 'Alina, is hottest and sexy blondie  Moscow escort';
$ru_title = 'Алина, стройная спортивная модель. Эскорт для комфортного отдыха в Москве';
$description = 'A hot, luxurious girl, Alina, a relaxed hot girl who will become a comfortable companion to a VIP or businessman in Moscow and on a trip abroad. Positive and fervent, sweet and cheerful, with charisma and angelic smile';
$keywords = 'slim blonde escort moscow escort with tattoos';
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
<h2>Alina</h2>
<div class="accBut first">Profile</div>
	<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>87/60/88 cm </span></p><p> Bra Size<span>2 (75C) natural</span></p><p> Dress Size<span>42-44</span></p><p> Hair<span>Blonde</span></p><p> Eyes<span>Blue</span></p><p> Sexual orientation<span>Bisexual </span></p><p>Attitude to smoking <span>Non Smoker</span></p><p> Conversation<span> Russian, English(poor)</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">White wine, champagne, Italian, European cuisine</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Elegant<br><i class="far fa-star"></i> Sexy femininity <br><i class="far fa-star"></i> Classic <br><br><i class="fa fa-check" aria-hidden="true"> </i> The body is clean and well-groomed <br> <i class="fa fa-check" aria-hidden="true"> </i> All natural. </div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Literature, fitness, travel</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About Me...</h4><p>Positive and fervent, sweet and cheerful, with charisma and angel smile <br> <br> You will love me. But not at once. <br>
You will love me secretly. <br>
You will love me with a start of a body, <br>
It's like a bird came to you in the window.</p><br><h4>Agency Estimation...</h4><p>A hot, luxurious girl, Alina, a relaxed hot girl who will become a comfortable companion to a VIP or businessman in Moscow and on a trip abroad. Positive and fervent, sweet and cheerful, with charisma and angelic smile</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review <i class="fas fa-feather"></i></a></h4></div>
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