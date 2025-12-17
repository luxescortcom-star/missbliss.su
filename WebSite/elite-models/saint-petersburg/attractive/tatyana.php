<?php

$name='tatyana';
$name1='Tanya';
$name2='Tanya';
$name3='Tatyana';
$blur = null;
$picsFolio='tatyana';
$city='spb';
$home = 'St. Petersburg';
$height='168 см';
$weight='56 kg';
$birthdate = '1997-08-08';
$dataType = 'adult attractive bi busty blondie spb';

$fxt = 'jpg';

$title='Tatiana is a hottest slender temptress escort in St. Petersburg, Russia';
$ru_title='Комфортная веселая и стильная спутница в Санкт-Петербурге';
$description = 'A very beautiful, gentle, comfortable, cheerful and stylish companion';
$keywords = 'beautiful escort, gentle escort spb, tatyana escort spb';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-spb.php');
$canonical = 'https://missbliss.spb.ru/en/attractive/tatyana/';
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
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>89/63/91 cm </span></p><p> Bra Size<span> (75C) natural</span></p><p> Dress Size<span>S</span></p><p> Hair<span>Brown</span></p><p> Eyes<span>Grey-Green</span></p><p> Conversation<span>Russian-English</span></p><p> Sexual orientation<span>Bisexual</span></p><p>Attitude to smoking <span>Not smoker</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">I prefer European, Italian cuisine, seafood <br>
Drinks: coffee, white and red wine.</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="fa fa-star-o" aria-hidden="true"> </i> Sexual femininity <br> <i class="fa fa-star-o" aria-hidden="true"> </i> Casual <br> <i class="fa fa-star-o" aria-hidden="true"> </i> Classics <br><br> <i class="fa fa-check" aria- hidden="true"> </i> Body well-groomed, clean <br> <i class="fa fa-check" aria-hidden="true"></i> All natural <br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Music, fitness, book reading</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>Agency Estimation...</h4><p>A very beautiful, gentle, comfortable, cheerful and stylish companion</p><br><h4>Members Estimation...</h4><p>“We found the Russian Kim Basinger. She will make your 9 1/2 weeks fantasy come true. Very gentle and beautiful lady.”<br><br> Михаил 14.09.2025<br><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4></div>
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
</div>
</div>
<?php include_once __ROOT__. '/includes/footer-profile.php'; ?>


</html>