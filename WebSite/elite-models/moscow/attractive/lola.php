<?php 

$name = 'lola';
$name1 = 'Lola';
$name2 = 'Lola';
$blur = null;
$name3 = 'Lola';
$picsFolio = 'lola';
$city = 'msk';
$home = 'Moscow';
$birthdate = '2003-08-10'; 
$height = '157 см';
$weight = '47 кг';
$dataType = 'young attractive slim model bi blondie msk';


$title = 'Lola, 🤩petite bright blonde with a beautiful sexy figure. Escort agency Miss Bliss Moscow';
$ru_title = 'Лола- 🤩миниатюрная яркая блондинка с красивой сексуальной фигуркой';
$description = 'Lola - miniature bright intelligent blonde. Beautiful with a sexy figure. Sweet, gentle and comfortable companion.';
$keywords = 'lola  escort, young blonde escort, lola escort moscow';
$fxt = 'jp2';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-msk.php');

$canonical = 'https://missbliss.moscow/en/attractive/lola/';
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
<?php

include_once (__ROOT__. '/includes/workers/lightbox_functions.php');


?>
  
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>85/59/92 cm </span></p><p> Bra Size<span>2 (75B) natural</span></p><p> Dress Size<span>S-M</span></p><p> Hair<span>Blond</span></p><p> Eyes<span>Brown</span></p><p> Sexual orientation<span>Bi-Sexy</span></p><p>Attitude to smoking <span>Non Smoker</span></p><p> Conversation<span> Russian, English</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">I prefer semi-sweet wines, champagne and Italian cuisine</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Elegant<br><i class="far fa-star"></i> Sexy femininity <br><i class="far fa-star"></i> Classic <br><br><i class="fa fa-check" aria-hidden="true"> </i> The body is clean and well-groomed <br> <i class="fa fa-check" aria-hidden="true"> </i> All natural. <br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Dancing, traveling, books</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About me...</h4><p>Young and playful, I like to spend time with nice people in a relaxed atmosphere. I study at the university in the city of Mtsensk. I visit Moscow. A week in Moscow - two weeks in Mtsensk. If you invite me in advance, I will come to you. Write, we will agree. ... <br> <br> / Lola xxx /</p><br><h4>Agency Estimation...</h4><p>Lola - miniature bright intelligent blonde. Beautiful with a sexy figure. Sweet, gentle and comfortable companion. <br> <br> / Andrei /</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review <i class="fas fa-feather"></i></a></h4></div>
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
<blockquote><p>All virtue is summed up in dealing justly.</blockquote>
<blockquote><p>The gods too are fond of a joke.</blockquote>
<blockquote><p>Liking money like I like it, is nothing less than mysticism. Money is a glory.</blockquote>
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