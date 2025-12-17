<?php 

$name='lily';
$name1='Lily';
$name2='Lily';
$name3='Lily';
$blur = null;
$picsFolio='lily';
$city = 'msk';
$home='Moscow';
$height='170 см';
$weight='59 kg';
$birthdate = '1990-04-18'; 
$dataType = 'attractive adult model blondie msk';

$escorts='class="current"';
$class='attractive';
$attractive='class="current"';
$msk='class="current"';
$title='Lily 🤩a beautiful stylish worthy sharpener';
$ru_title='Лилия 🤩красивая стильная достойная обостительница';
$description = 'Lily is a beautiful, stylish, adult, universal girl. She knows how to present herself beautifully, she is always well and stylishly dressed. It\'s nice to talk with her, a fun interlocutor who knows how to listen.';
$keywords='experienced escort, loving woman, Liliya escort Moscow';
$fxt='jp2';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-msk.php');

$canonical = 'https://missbliss.moscow/en/attractive/lily/';

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
<h1><?=$name1 ?>. <?=$home ?></h1>
</nav>
<div id="main">
<div class="project-image portfolio">
<div class="flexslider">
<?php
$folder='b';
include __ROOT__. '/includes/workers/slider_functions_FTP_old.php';

?>
</div>
</div>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>90/66/92 cm </span></p><p> Bra Size<span>2 (75B) natural</span></p><p> Dress Size<span>S-M</span></p><p> Hair<span>Blond</span></p><p> Eyes<span>Blue</span></p><p> Sexual orientation<span>Straight</span></p><p>Attitude to smoking <span>Non Smoker</span></p><p> Conversation<span> Russian</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">Japanese, European cuisine, sparkling wines.</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Elegant<br><i class="far fa-star"></i> Sexy femininity <br><i class="far fa-star"></i> Classic <br><br><i class="fa fa-check" aria-hidden="true"> </i> The body is well-groomed <br> <i class="fa fa-check" aria-hidden="true"> </i> All natural. <br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Traveling, books, music</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>Agency Estimation...</h4><p><?=$name1 ?> is a beautiful, stylish, adult, universal girl. She knows how to present herself beautifully, she is always well and stylishly dressed. It's nice to talk with her, a fun interlocutor who knows how to listen.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review <i class="fas fa-feather"></i></a></h4></div>
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
<blockquote><p>My Heart beats only for those who know how to hear from him... For the rest I have no Heart!</p></blockquote>
<blockquote><p>Yes, I have a complex character ...but everyone chooses to have a kitten or a tame lioness </p></blockquote>
<blockquote><p>I have no sense if I'm without you.</p></blockquote>
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