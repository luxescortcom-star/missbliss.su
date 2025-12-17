<?php 

$name='alla';
$name1='Alla';
$name2='Alla';
$name3='Alla';
$blur = null;
$picsFolio = 'alla';
$city='spb';
$home = 'St. Petersburg';
$height = '170 см';
$weight = '55 kg';
$birthdate = '1995-08-28'; 
$dataType = 'adult favorite brunette spb';

$fxt = 'jpg';


$title='Alla, Beautiful elegant lady, supermodel, diamond escort Saint-Petersburg';
$ru_title='Алла, интеллигентная девушка с хорошими манерами, Агентство МиссБлисс Спб';
$description = 'Стильная, красивая, ухоженная веселая очень обоятельная девушка! Слегка кокетлива, загадочна, с ней ваше сердце будет биться учащенно, а разум оставит вас в покое на некоторое время ';
$keywords = 'эскортница спб,брюнетка опытная эскорница, брюнетка эскорт спб, алла спб эскорт';

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
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Russia only!</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>91/62/90 cm </span></p><p> Bra Size<span>2 (80B) natural</span></p><p> Dress Size<span>44-46</span></p><p> Hair<span>Medium Blonde</span></p><p> Eyes<span>Green brown</span></p><p> Sexual orientation<span>Straight </span></p><p>Attitude to smoking <span>Non smoker</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">Russian, Italian cuisine. Eastern sweets, fruit. As for drinks, I prefer sparkling, light wine.</div>
<div class="accBut">Style</div>
<div class="accCon">Elegant femininity.<br><br>* Clean, well-groomed body.<br> 100% natural body. No tattoos.</div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Model business, travel.</div>
<div class="accBut">Conversation</div>
<div class="accCon">Russian, English(Basic)</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>Agency Estimation...</h4><p>Stylish, beautiful, well-groomed, cheerful, very charming girl! Slightly flirtatious, mysterious, with her your heart will beat faster, and your mind will leave you alone for a while</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a feedback</a> <i class="far fa-thumbs-up"></i></h4></div>	
<div class="accBut">Fee </div>
<div class="accCon"><div class="column last">
<div class=table-title>
</div>
<?php include_once (__ROOT__. '/includes/en/favorites-rates2.php'); ?>
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