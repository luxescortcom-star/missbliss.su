<?php

$name = 'ira';
$name1 = 'Ira';
$name2 = 'Ira';
$name3 = 'Ira';
$blur = null;
$picsFolio = 'ira';
$city = 'msk';
$home = 'Moscow';
$birthdate = '1992-01-28'; 
$height = '168 см';
$weight = '53 kg';
$dataType = 'adult attractive escort brunette msk';


$title = 'Ira 🤩 beautiful middle aged girl escort in Moscow, Russia';
$ru_title = 'Ирина 🤩 Красивая девушка средних лет, элитный эскорт в Москве';
$description = 'A beautiful middle-aged girl';
$description = 'Красивая девушка средних лет';
$keywords = 'beautiful escort, middle-aged girl escort moscow';
$fxt = 'jp2';
define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-msk.php');

$canonical = 'https://missbliss.moscow/en/attractive/ira/';


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
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Inside Russia</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>94/67/94 см</span></p><p> Bra Size<span>2 (80B) natural</span></p><p> Dress Size<span>S-M</span></p><p> Hair<span>Light-Brown</span></p><p> Eyes<span>Grey</span></p><p> Conversation<span>Russian</span></p><p>Sexual orientation<span>Straight</span></p><p>Smoking <span>Non smoker</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon"><i class="fa fa-check" aria-hidden="true"></i> Russian, European, Italian cuisine<br><i class="fa fa-glass" aria-hidden="true"></i>I drink wine, champagne, martini<br><br><i class="fa fa-key" aria-hidden="true"></i> Roses</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Classic<br><i class="far fa-star"></i> Modern<br><br><i class="fa fa-check" aria-hidden="true"></i> body well-groomed and clean<br><i class="fa fa-check" aria-hidden="true"></i> 100% natural.<br><br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Сinema, books</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About Me...</h4><p>I am purposeful, kind, modest, cheerful.
In men, I like that he is cheerful, strong, kind, understanding, respectful.</p><br><h4>Agency Estimation...</h4><p>A beautiful middle-aged girl.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>I can resist anything but temptation.</blockquote>
<blockquote><p>We all live under the same sky, but we don't all have the same horizon.</blockquote>
<blockquote><p>If you were born without wings, do nothing to prevent them from growing.</blockquote>
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