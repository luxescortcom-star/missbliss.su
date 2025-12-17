<?php 

$name='milana';
$name1='Milana';
$name2='Milana';
$name3='Milana';
$blur = true;
$picsFolio = 'milana';


$home = 'Ekaterinburg';
$birthdate = '1996-12-12'; 
$height = '165 см';
$weight = '65 kg';
$dataType = 'adult attractive model busty bi blonde regions ekb';
$city = 'ekb';

$title='Charming cute and spectacular blonde 🤩 with a gorgeous beautiful body. Elite escort in Ekaterinburg, Russia';
$ru_title='Обаятельная милая и эффектная блондинка 🤩 с роскошным красивым телом Элитный эскорт в Екатеринбурге и Челябинске.';
$description = 'A cheerful, slightly shy girl who will be your beautiful companion in Yekaterinburg or Chelyabinsk or on a trip to other cities and countries';
$keywords = 'ekb blonde escort, escort girl ekaterinburg, escort girl chelyabinsk';

$fxt = 'jpg';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-ekb.php');
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
<p id="back-top" style="display: block;">
<!--noindex--><a href="#top" rel="nofollow"><span></span></a><!--/noindex-->
</p>
<nav id="page-title">
<?php
include_once  ('../navigation.php'); 
$uri = substr(substr($_SERVER['REQUEST_URI'], 11), 15);
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
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>97/72/90 см</span></p><p> Bra Size<span>4 (80D) natural</span></p><p> Dress Size<span>M</span></p><p> Hair<span>Blond</span></p><p> Eyes<span>Green</span></p><p> Conversation<span>Russian, English</span></p><p>Sexual orientation<span>Bisexual</span></p><p>Smoking <span>Non Smoker</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon"><i class="fa fa-check" aria-hidden="true"></i> Omnivorous, I prefer seafood and exotic fruits.<br><br><i class="fa fa-glass" aria-hidden="true"></i> Drinks: Martini, Champagne.<br><br><i class="fa fa-key" aria-hidden="true"></i> Peonies, roses, daisies<br><br></div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"> </i> Sexy dresses, beautiful underwear, stylish, fashionable girl <br> <br> <i class="far fa-star"> </i> Well-groomed body. <br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  there is a small tattoo on the body<br><br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Travel, swimming, books, jazz music</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>Agency Estimation...</h4><p>Charming, sweet and showy blonde with a gorgeous beautiful body. A cheerful, slightly shy girl who will be your beautiful companion in Yekaterinburg or Chelyabinsk or on a trip to other cities and countries.<br> <br >/ Andrei / <br> <br ></p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote> <p> Sometimes we think too much, but we just need to live. </blockquote>
<blockquote> <p> Collect moments, not things. </blockquote>
<blockquote> <p> There is no better cometologist than Peace of Mind. </blockquote> <br>
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