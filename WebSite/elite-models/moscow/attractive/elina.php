<?php 

$name = 'elina';
$name1 = 'Elina';
$name2 = 'Elina';
$blur = true;
$name3 = 'Elina';
$picsFolio = 'elina';
$home = 'Moscow';
$birthdate = '2001-02-13'; 
$height = '168 см';
$weight = '55 kg';
$dataType = 'adult attractive model busty brunette msk';
$city = 'msk';

$ru_title = 'Элина, интересная сексуальная кокетка. Ваша темпераментная спутница для отдыха в Москве. Агентство МиссБлисс';
$title = 'Elina, an interesting sexy coquette. Your temperamental companion for a vacation in Moscow. The MissBliss escorts Agency';
$description = 'Calm, self-confident, modest, a little shy, straightforward, with a good sense of humor, open to everything new';
$keywords = 'brunette escort, beautiful brunette without complexes, sexy escort moscow';
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
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/menu2.php'; ?>
<div class="perspective_container">
<div id="header-bg"></div>
<div id="sub-header-bg"></div>
<div id="body-wrapper" class="wrapper">
<div id="header">
<!--noindex--><a href="#" rel="nofollow" id="logo"></a><!--/noindex-->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/xxx-menu.php'; ?>
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
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>90/65/95 cm </span></p><p> Bra Size<span>2,5 (75B) Natural</span></p><p> Dress Size<span>S-M</span></p><p> Hair<span>Dark-Brown</span></p><p> Eyes<span>Green</span></p><p> Sexual orientation<span>Straight</span></p><p>Attitude to smoking <span>Non Smoker</span></p><p> Conversation<span> Russian, English(poor)</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">White wine, champagne, Italian, European cuisine</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Elegant<br><i class="far fa-star"></i> Sexy femininity <br><i class="far fa-star"></i> Classic <br><br><i class="fa fa-check" aria-hidden="true"> </i> The body is clean and well-groomed <br> <i class="fa fa-check" aria-hidden="true"> </i> All natural. </div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Books, Films, Travel</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>Agency Estimation...</h4><p><?=$name1 ?>, a modest and reverent girl. Cheerful tender lover in Moscow.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review <i class="fas fa-feather"></i></a></h4></div>
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
<blockquote><p>Action may not always bring happiness, but there is no happiness without action.</blockquote>
<blockquote><p>Handsome is as handsome does.</blockquote>
<blockquote><p>A good name is better than riches.</blockquote>
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