<?php 

$name='nicole';
$name1='Nicole';
$name2='Nicole';
$name3='Nicole';
$picsFolio='nicole';

$blur = true;
$city='spb';

$home = 'St. Petersburg';
$height='169 см';
$weight='62 кг';
$birthdate = '1998-05-17'; 
$dataType = 'young favorite bi busty slim brunette spb';

$fxt = 'jp2';

$title='Beautiful bright slim showy model. Cheerful sociable smart girl. Elite escort in St. Petersburg';
$ru_title='Красивая яркая стройная эффектная модель. Веселая общительная умная девушка. Элитный эскорт в Санкт-Петербурге';
$description = 'A beautiful slender body, slender legs and waist, beautiful symmetrical breasts, sensual tender lips, large beautiful eyes. Favorite girl.';
$keywords = 'beautiful body escort, beautiful bright slim, nicole escort spb';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-spb.php');

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
include_once (__ROOT__. '/includes/workers/slider_functions_FTP_old.php');

?>
</div>
</div>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Europe</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>88-65-99 см</span></p><p> Bra Size<span>2 (75B)</span></p><p> Dress Size<span>M-S</span></p><p> Hair<span>Dark-Brown</span></p><p> Eyes<span>Blue</span></p><p> Sexual orientation<span>Straight </span></p><p>Attitude to smoking <span>Non smoker</span></p><p> Conversation<span>Russian, Deutsch</span></p><p>Zodiac sign<span>&#9803; Taurus</span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">Italian cuisine, pasta salads.<br> From drinks - Dry white wine</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Sexy feminine, evening dresses, high heels. Classic, business suit, oversized jackets with shorts and high heels<br><br><i class="far fa-star"></i>  Well-groomed sexy body.<br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Has tattoo<br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Fitness, makeup and style, travel</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About Me...</h4><p>I love beautiful sunsets, the sound of waves
I love my sense of style and character <br>
Like gallant men with a sense of humor. <br>/ <?=$name1 ?> /</p><br><h4>Agency Estimation...</h4><p>A beautiful slender body, slender legs and waist, beautiful symmetrical breasts, sensual tender lips, large beautiful eyes. Favorite girl.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a feedback</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>The real character of a man is found out by his amusements.</p></blockquote>
<blockquote><p>We desire nothing so much as what we ought not to have.</p></blockquote>
<blockquote><p>Gratitude is not only the greatest of virtues, but the parent of all the others.</p></blockquote>
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