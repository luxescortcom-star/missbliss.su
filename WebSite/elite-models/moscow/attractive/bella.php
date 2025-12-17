<?php

$name = 'bella';
$name1 = 'Bella';
$name2 = 'Bella';
$blur = null;
$name3 = 'Bella';
$picsFolio = 'bella';
$home = 'Moscow';
$birthdate = '2004-11-15';
$height = '163 см';
$weight = '48 kg';
$dataType = 'young attractive busty bi slim brunette msk';
$city = 'msk';


$title = 'Bella is a young slim temptress escort in Moscow, Russia';
$ru_title = 'Бэлла- юная стройная искусительница, красивая эскортница в Москве';
$description = 'Bella is a young slim temptress. With a beautiful figure, her toned chest, round ass and slender legs. Uninhibited interesting interlocutor';
$keywords = 'young escort, brunette escort moscow, escort with a beautiful slim body';
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
<p id="back-top" style="display: block;">
<!--noindex--><a href="#top" rel="nofollow"><span></span></a><!--/noindex-->
</p>
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
include_once (__ROOT__. '/includes/en/workers/slider_functions.php');

?>
</div>
</div>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>85/63/92 cm </span></p><p> Bra Size<span>2 (75B) natural</span></p><p> Dress Size<span>S-XS</span></p><p> Hair<span>Brown</span></p><p> Eyes<span>Grey</span></p><p> Conversation<span>Russian-English-Italian</span></p><p> Sexual orientation<span>Bisexual</span></p><p>Attitude to smoking <span>Non Smoker</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">Russian, Italian cuisine. Eastern sweets, fruit. As for drinks, I prefer sparkling, light wine.</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="fa fa-star-o" aria-hidden="true"> </i> Sexual femininity <br> <i class="fa fa-star-o" aria-hidden="true"> </i> Casual <br> <i class="fa fa-star-o" aria-hidden="true"> </i> Classics <br><br> <i class="fa fa-check" aria- hidden="true"> </i> Body well-groomed, clean <br> <i class="fa fa-check" aria-hidden="true"></i> All natural <br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Have tatoo<br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Linguistics and Sports</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>Agency Estimation...</h4><p>Bella is a young slender temptress. With a beautiful figure, her toned chest, round ass and slender legs. Uninhibited interesting interlocutor.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4></div>
<div class="accBut">Fee </div>
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
<blockquote><p>Love is not blind; it simply enables one to see things others fail to see</p></blockquote>
<blockquote><p>You’ve spent your whole life running and running, trying to catch up with something that has never been there for you. And all you’ve done is go farther and farther away from the precious love that’s been waiting for you all the time.</p></blockquote>
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