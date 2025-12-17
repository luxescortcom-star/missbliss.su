<?php 

$name = 'alina';
$name1 = 'Aline';
$name2 = 'Aline';
$blur = null;
$name3 = 'Aline';
$picsFolio = 'alina-busty';
$city = 'msk';

$birthdate = '1993-07-28'; 
$home = 'Moscow';
$height = '175 см';
$weight = '59 kg';
$dataType = 'adult favorite blondie busty msk';

$fxt = 'jp2';
$ru_title = 'Алина 🤩 яркая эффектная блондинка, элитный эскорт в Москве';
$description = 'Взрослая интеллигентная красивая спутница';
$title = 'Alina 🤩busty spectacular blonde, elite escort in Moscow';
$description = 'Bright spectacular blonde. Adult intelligent beautiful companion for your worthy rest and pleasant leisure.';
$keywords = 'luxurious body and soul, vip level escort, luxurious escort lady moscow';


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
<?php include_once (__ROOT__. '/includes/workers/slider_functions_FTP.php');

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
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>96/65/96 cm </span></p><p> Bra Size<span>4 (85D) natural </span></p><p> Dress Size<span>S-M</span></p><p> Hair<span>Blondie</span></p><p> Eyes<span>Brown-Green</span></p><p> Sexual orientation<span>Straight</span></p><p>Attitude to smoking <span>Non Smoker</span></p><p> Conversation<span>Russian</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">Like to drink herbal tea or cappuccino with cinnamon. A sip of white wine for company. I love seafood.<br> Flowers: White roses, Orchids</div>
<div class="accBut">Style</div>
<div class="accCon"><p><i class="far fa-star"></i> Elegant<br><i class="far fa-star"></i> Sexy femininity <br><i class="far fa-star"></i> Classic <br><br><i class="fa fa-check" aria-hidden="true"> </i> The body is  well-groomed <i class="fa fa-check" aria-hidden="true"> </i> 100% natural<br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Fitness, swimming, yoga, I study clinical psychology at the magistracy, I like to learn new things, develop, I love theater, I make a career in cinema, while in TV shows, I like sociability, lightness, I like to sleep in the morning. I love sports. I try to take care of my health. I don't take drugs.</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>Обо мне...</h4><p>I can find a common language with any person. I believe in the power of thought
Feminine, but I am fond of firearms and edged weapons, sometimes I go to the shooting gallery.</p><h4>Agency Estimation...</h4><p><?=$name1 ?> - busty spectacular blonde. An adult intelligent beautiful companion for your worthy rest and pleasant leisure.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review <i class="fas fa-feather"></i></a></h4></div>
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
<blockquote><p>Happiness is not a destination. It is a method of life</p></blockquote>
<blockquote><p>A very small degree of hope is sufficient to cause the birth of love.</p></blockquote>
<blockquote><p>Beauty is power; a smile is its sword.</p></blockquote>
<blockquote><p>it’s better to bum out than to fade away</p></blockquote>
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