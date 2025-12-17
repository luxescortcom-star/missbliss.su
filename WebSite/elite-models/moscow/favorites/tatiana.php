<?php

$name='tatiana';
$name1='Tania';
$name2='Tania';
$blur = true;
$name3='Tania';
$picsFolio='tatiana';
$city = 'msk';
$vip = 'true';
$home = 'Москва';
$height = '173 см';
$weight = '50 кг';
$birthdate = '2002-03-21';
$dataType = 'new young slim favorite brunette msk';
$fxt='avif';

$ru_title='Татьяна 🤩 стройная красивая эффектная вип эскорт модель в Москве';
$title='Tatyana 🤩 is a slender, beautiful, and stunning VIP escort model in Moscow.';
$description = 'Flexible, I\'ve studied ballet, choreography, equestrianism, swimming, karate, oriental dancing, and I can do the splits. Born in Moscow.
Graduated with honors from the Russian Presidential Academy of National Economy and Public Administration , Faculty of Economics.';
$keywords='VIP escort, elite escort model, Moscow escort';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-msk.php');


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
<nav id="page-title">
<?php
include_once  ('../navigation.php');
$uri = substr(substr($_SERVER['REQUEST_URI'], 12), 8);
$currentFile = trim($uri, '/');
$currentFile = preg_replace('/\/+/', '/', $currentFile);
echo generateNavigation($currentFile);
?>
<h1><?=$name2 ?>. <?=$home ?></h1>
</nav>
<div id="main">
<div class="project-image portfolio">
<div class="flexslider">
<?php include_once (__ROOT__. '/includes/workers/slider_functions_FTP.php');

?>
</div>
</div>

</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>82/62/90 cm </span></p><p> Bra Size<span>2 (75B) natural </span></p><p> Dress Size<span>S</span></p><p> Hair<span>Brunette</span></p><p> Eyes<span>Light-Brown</span></p><p> Sexual orientation<span>Straight</span></p><p>Attitude to smoking <span>Non Smoker</span></p><p> Conversation<span> Russian, English</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p><br></div>
<div class="accBut">Favorites</div>
<div class="accCon">Italian and Thai cuisine, dry wine, aporel. <br>Flowers: Tulips, Orchids</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Elegant<br><i class="far fa-star"></i> Sexy femininity <br><i class="far fa-star"></i> Classic <br><br><i class="fa fa-check" aria-hidden="true"> </i> The body is clean and well-groomed <br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Flexible, I did ballet, choreography, horse riding, swimming, karate, oriental dancing, and I can do the splits.</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>Agency Estimation...</h4><p><?=$name1 ?>, A beautiful, slender, and well-groomed woman. Born in Moscow,
Graduated with honors from the Russian Presidential Academy of National Economy and Public Administration (RANEPA) in Economics. An elite model for the most discerning gentleman.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review <i class="fas fa-feather"></i></a> </h4></div>
<div class="accBut">Fee</div>
<div class="accCon"><div class="column last">
<div class=table-title>
</div>
<?php include_once (__ROOT__. '/includes/en/favorites-rates-2.php'); ?>
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
<blockquote><p>Action may not always bring happiness, but there is no happiness without action.</p></blockquote>
<blockquote><p>Handsome is as handsome does.</p></blockquote>
<blockquote><p>A good name is better than riches.</p></blockquote>
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