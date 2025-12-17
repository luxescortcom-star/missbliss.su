<?php 


$name = 'masha';
$name1 = 'Maria';
$name2 = 'Maria';
$picsFolio = 'masha';
$blur = 'true';
$vip = 'true';
$city='spb';
$home = 'Saint-Petersburg';
$birthdate = '2000-03-05'; 
$height = '175 см';
$weight = '55 kg';
$dataType = 'new young favorite slim brunette spb';
$fxt = 'avif';

$title = '✨ Masha | Elite escort in Saint Petersburg | Refined brunette with aristocratic grace';
$ru_title = '✨ Маша | Элитный эскорт в Санкт-Петербурге | Утонченная брюнетка с аристократической грацией';
$description = 'Masha is the embodiment of elegance and mystery. A tall, slender brunette with impeccable manners and enveloping calm. Her beauty is like a rare antique: exquisite, deep, alluring. An ideal companion for social events, romantic dinners and private meetings in St. Petersburg.';
$keywords = 'escort spb, elite girls peter, brunettes st petersburg, companion for the evening, beautiful women peter, escort accompaniment, sophisticated ladies, luxury escort';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-spb.php');
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
<a href="#"  id="logo" title="MissBliss Agency, Entrance to Narnia"></a>
<?php include_once (__ROOT__. '/includes/xxx-menu.php'); ?>
</div>
<div id="content" class="container clearfix">
<nav id="page-title">
<?php
include_once  ('../navigation.php'); 
$uri = substr(substr($_SERVER['REQUEST_URI'], 16), 14);
$currentFile = trim($uri, '/');
$currentFile = preg_replace('/\/+/', '/', $currentFile);
echo generateNavigation($currentFile);
?>
<h1><?=$name1 ?>. S<span>ain</span>t-Petersburg<span>, Russia</span></h1>
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
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Europe</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>80/63/95 см</span></p><p> Bra Size<span>2 (75B) natural</span></p><p> Dress Size<span>M-S</span></p><p> Hair<span>Dark Chocolate</span></p><p> Eyes<span>Light-Brown</span></p><p> Sexual orientation<span>Straight </span></p><p>Attitude to smoking <span>Non smoker</span></p><p> Conversation<span>Russian, English</span></p><p>Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">Omnivorous, likes to try new things. <br> Drinks: red/white wine</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Elegant femininity<br><br><i class="far fa-star"></i> * well-groomed  and clean body.<br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Pole dancing</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About Me...</h4><p>I am one of those whose hands know silence.<br>
Whose smile is like the light through the branches of birches at sunset.<br>
In my voice is the whisper of summer rain, in my gestures is the smoothness of river water.<br><br>

I do not argue with the wind and do not break fate.<br>
I am the one who knows how to listen and feel without words.<br>
My humility is not weakness, but wisdom.<br> Like the earth that accepts rain and gives flowers.<br><br>

In a man I seek a kindred spirit - someone whose strength is in calmness,<br>
whose kindness is like a warm light in a window on a winter road.<br>
If you value quiet mornings, sincerity without pathos and tenderness without reminders -
let's breathe in the same rhythm. <br><br>/ <?=$name1 ?> / <br><br><h4>Agency Estimation...</h4><p>Masha is like a rare wine from the cellars of St. Petersburg:<br>
tall, with a wasp waist and dark smooth hair that flows over her shoulders like silk.<br><br>

Her beauty is not for everyone.<br>
It is for those who value ideal proportions, hidden sensuality and the ability to be desired without a single unnecessary gesture.<br><br>

In her movements there is the grace of a panther, in her voice there is a velvety depth.<br>
She speaks little, but each of her words is a hint of a secret.<br><br>

Her calm is hypnotizing.<br>
Her presence attracts glances.<br>
Her laughter is like the sound of a crystal glass in the semi-darkness.<br><br>

If you are looking for more than just girl, and the mood - Masha will create it with one look.<br><br> We recommend!</p><br>
	<h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a feedback</a> <i class="far fa-thumbs-up"></i></h4></div>
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
</div>
</div>
<?php include_once __ROOT__. '/includes/footer-profile.php'; ?>



</html>