<?php 

$name='olly';
$name1='Olly';
$name2='Olly';
$name3='Olly';
$picsFolio='olly-red';

$blur = null;

$fxt = 'jp2';
$city='spb';
$home = 'St. petersburg';
$height='166 см';
$weight='57 кг';
$birthdate = '2003-02-07'; 
$dataType = 'adult attractive slim blondie spb';

$title='Olya is a romantic, gentle and bright girl.';
$ru_title='Оля- романтичная нежная и яркая девушка.';
$description = 'Friendly and sociable, always glad to new acquaintances, ready to support any dialogue, I love active rest, but I can just rest easy, I am in eternal attempts to quit smoking';
$keywords = 'Olya escort spb, slender escort spb, escort girl Olya';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-spb.php');

?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include_once (__ROOT__. '/includes/vip-head.php'); ?>
<?php include_once (__ROOT__. '/includes/styles-profile.php'); ?>
</head>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/menu2.php'; ?>
<div class="perspective_container">
<div id="header-bg"></div>
<div id="sub-header-bg"></div>
<div id="body-wrapper" class="wrapper">
<div id="header">
<!--noindex--><a href="#" rel="nofollow" id="logo"></a><!--/noindex-->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/xxx-menu.php'; ?>
</div>
<div id=content class="container clearfix">
<p id=back-top style="display: block;">
<a href=#top><span></span></a>
</p>
<nav id=page-title>
<?php
include_once  ('../navigation.php'); 
$uri = substr(substr($_SERVER['REQUEST_URI'], 16), 14);
$currentFile = trim($uri, '/');
$currentFile = preg_replace('/\/+/', '/', $currentFile);
echo generateNavigation($currentFile);
?>
<h1><?=$name1 ?>. S<span>ain</span>t-Petersburg<span>, Russia</span></h1>
</nav>
<div id=main>
<div class="project-image portfolio">
<div class=flexslider>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/workers/slider_functions.php';

?>
</div>
</div>
<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/workers/lightbox_functions.php';


?>
</div>
<div id=sidebar>
<div class=widget>
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Profile</div>
<div class=accCon><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Spb only</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>88/56/94 cm</span></p><p> Bra Size<span>2 (75C) natural</span></p><p> Dress Size<span>M</span></p><p> Hair<span>Red</span></p><p> Eyes<span>Green</span></p><p> Conversation<span>Russian-English</span></p><p> Sexual orientation<span>Bi-sexy</span></p><p>Attitude to smoking<span>Smoker</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class=accBut>Favorites</div>
<div class=accCon>I prefer dishes of European or Italian or Japanese cuisine. I prefer dry wines.</div>
<div class=accBut>Style</div>
<div class=accCon>Casual, feminine, sexy<br><br>* Body well-groomed natural and clean</div>
<div class=accBut>Hobbies/Interests</div>
<div class=accCon>Books, music</div>
<div class=accBut>Estimations</div>
<div class=accCon><h4>About Me...</h4><p>Friendly and sociable, always glad to new acquaintances, ready to support any dialogue, I love active rest, but I can just rest easy, I am in eternal attempts to quit smoking</p><br><h4>Agency Estimation...</h4><p><?=$name1 ?>, a young showy girl, cheerful, talkative, likes to laugh and have fun.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4></div>
<div class=accBut>Fee</div>
<div class=accCon><div class="column last">
<div class=table-title>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/fee-attractive.php'; ?>
<div class=footer>
<?=$invite_en ?>
</div> </div>
    <a class="close" title="close" href="#close"></a>
    </div>
</div>
</div>
<div class="widget clearfix">
<hr>

<div class=testimonial>
<blockquote><p>It does not matter how slowly you go so long as you do not stop.</blockquote>
<blockquote><p>Illusion is the first of all pleasures.</blockquote>
<blockquote><p>Love as expensive crystal, you with it be cautious!</blockquote>
<blockquote><p>I just want to be with you</blockquote>
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
</div>
</div>
<?php include_once __ROOT__. '/includes/footer-profile.php'; ?>


 

</html>