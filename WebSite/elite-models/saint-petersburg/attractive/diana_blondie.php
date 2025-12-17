<?php 

$name='diana';
$name1='Diana';
$name2='Diana';
$name3='Diana';

$picsFolio='diana_blondie';
$blur = null;

$home = 'Санкт-Петербург';
$height='165 см';
$weight='55 kg';
$birthdate = '1997-10-10'; 
$dataType = 'adult attractive busty blondie spb';
$city='spb';

$fxt = 'jpg';

$title='Diana beautiful luxurious blonde. Escort Saint Petersburg';
$ru_title='Диана - красивая роскошная блондинка. Ваша яркая спутница в Санкт-Петербурге';
$description = 'Diana is an adult, intelligent girl, with no experience as an escort. Easy and sweet to talk to. A bright petite blonde with a gorgeous figure.';
$keywords = 'adult escort, beautiful breasts escort, diana blonde escort spb';


define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-spb.php');


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
<p id="back-top" style="display: block;">
<!--noindex--><a href="#top" rel="nofollow"><span></span></a><!--/noindex-->
</p>
<nav id="page-title">
<?php
include_once  ('../navigation.php'); 
$uri = substr(substr($_SERVER['REQUEST_URI'], 16), 14);
$currentFile = trim($uri, '/');
$currentFile = preg_replace('/\/+/', '/', $currentFile);
echo generateNavigation($currentFile);
?>
</p><h1><?=$name1 ?>. S<span>ain</span>t-Petersburg<span>, Russia</span></h1>
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
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>St. Petersburg only</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>991/66/92 cm </span></p><p> Bra Size<span>4 (70 D) </span></p><p> Dress Size<span>S</span></p><p> Hair<span>Blond</span></p><p> Eyes<span>Blue-Green</span></p><p>Sexual orientation<span>Straight</span></p><p>Attitude to smoking<span>Non Smoker</span></p><p> Conversation<span>Russian-English</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon"><i class="far fa-star"></i> Seafood, rice, grilled vegetables. Asian food <br><i class="far fa-star"></i> Martini  <br><i class="far fa-star"></i> Flowers: Red and white roses</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Classic <br><i class="far fa-star"></i> Sexy Feminine<br> <i class="far fa-star"></i> Always stylish and sexy looks. <br> <br> <i class="fa fa-check" aria-hidden="true"></i>  The body of well-groomed <br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> There are two cute,<br> delicate tattoos on the body.<br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Fitnes, Books</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>Agency Estimation...</h4><p>Diana is an adult, intelligent girl, with no experience as an escort. Easy and sweet to talk to. A bright petite blonde with a gorgeous figure.<br><br>/ Andrei / <br><br></p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>And my little inner goddess, gently rocking her hips, dances a victorious samba.</blockquote>
<blockquote><p>When you overhear someone else's conversation, you will not hear anything pleasant for yourself.</blockquote>
<blockquote><p>If you can not beat someone, join him</blockquote>
</div>
</div>
</div>
<?=$invite_en ?>
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