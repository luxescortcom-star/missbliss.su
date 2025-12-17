<?php 

$name='kristine';
$name1='Tina';
$name2='Kristine';
$name3='Kristine';
$blur = true;
$picsFolio='kristine2';
$city='spb';
$home = 'St. Petersburg';
$height='169 см';
$weight='62 kg';
$birthdate = '1994-11-10'; 
$dataType = 'adult favorite  busty brunette spb';

$fxt = 'jp2';

$title='Beautiful bright slim showy model. Cheerful sociable smart girl. Elite escort in St. Petersburg';
$ru_title='Элегантная и стильная девушка. Опытная искусительница. Элитный эскорт в Санкт-Петербурге';
$description = 'Don\'t be sad, invite me and let\'s have fun! Kristine an elegant and stylish girl. Experienced temptress';
$keywords = 'spectacular model, beautiful bright slim, kristina escort spb';

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
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Europe</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>90/62/90 см</span></p><p> Bra Size<span>3 (80C)</span></p><p> Dress Size<span>S-XS</span></p><p> Hair<span>Light-Brown</span></p><p> Eyes<span>Green</span></p><p> Sexual orientation<span>Straight</span></p><p>Attitude to smoking <span>Non smoker</span></p><p> Conversation<span>Russian, English</span></p><p>Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon"><i class="far fa-star"></i> snacks <br><br> <i class="far fa-star"></i> From drinks -Champagne<br><br> <i class="far fa-star"></i> Flowers: red roses</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Elegant femininity<br><br><i class="far fa-star"></i> Sport, Casual<br><br><i class="far fa-star"></i> Well-groomed body.<br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Three small tattoos<br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Art, travel, sports, fashion</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About Me...</h4><p>Don't be sad, invite me and let's have fun! <br><br>/ <?=$name1 ?> / <br><br><h4>Agency assessment...</h4><p><?=$name1 ?>- An elegant and stylish girl. Experienced temptress.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a feedback</a> <i class="far fa-thumbs-up"></i></h4></div>
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