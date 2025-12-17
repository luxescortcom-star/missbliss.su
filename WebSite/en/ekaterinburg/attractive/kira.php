<?php 

$name='kira';
$name1='Kira';
$name2='Kira';
$name3='Kira';
$blur = true;
$picsFolio = 'kira';

$home = 'Ekaterinburg';
$birthdate = '2002-08-12'; 
$height = '170 см';
$weight = '50 kg';
$dataType = 'young attractive model brunette slim regions ekb';
$city = 'ekb';



$fxt = 'jpg';

$title='Young, slender, beautiful brunette 🤩 temperamental Fairy Elite escort in Yekaterinburg and Chelyabinsk.';
$ru_title='Юная стройная красивая брюнетка 🤩 темпераментная Фея Элитный эскорт в Екатеринбурге и Челябинске.';
$description = 'Slender cheerful sweet girl. Temperamental young Fairy in Yekaterinburg. Invite and enjoy unforgettable pleasure';
$keywords = 'young escort, escort ekaterinburg, escort chelyabinsk';


define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-ekb.php');
$canonical = ''.$url.'';
?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include_once (__ROOT__. '/includes/head.php'); ?>
<?php include_once (__ROOT__. '/includes/styles-profile.php'); ?>
</head>
		<div class="modal_age">
   <div class="modal_age_wrap" id="info_age_modal">
      <div class="modal_title">Site contains adult content</div>
      <div class="modal_age_text">
         <span>Are you over 18 years old?</span>
         <p>By clicking on the link, you also confirm that you are over 18 years old.</p>
      </div>
      <div class="modal_age_but">
		    <div class="modal_but_no">I am under 18</div>
         <div class="modal_but_yes arcticmodal-close">Yes, I am 18</div>

      </div>
   </div>
</div>
<?php include_once (__ROOT__. '/includes/en/menu2.php'); ?>
<div class="perspective_container">
<div id="header-bg"></div>
<div id="sub-header-bg"></div>
<div id="body-wrapper" class="wrapper">
<div id="header">
<!--noindex--><a href="#" rel="nofollow" id="logo"></a><!--/noindex-->
<?php include_once (__ROOT__. '/includes/menu.php'); ?>
</div>
<div id="content" class="container clearfix">
<p id="back-top" style="display: block;">
<!--noindex--><a href="#top" rel="nofollow"><span></span></a><!--/noindex-->
</p>
<nav id="page-title">
<?php
include_once  ('../navigation.php'); 
$uri = substr(substr($_SERVER['REQUEST_URI'], 9), 8);
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
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>90/58/95 см</span></p><p> Bra Size<span>2 (75B) natural</span></p><p> Dress Size<span>S-XS</span></p><p> Hair<span>Black</span></p><p> Eyes<span>Green</span></p><p> Conversation<span>Russian, English(poor)</span></p><p>Sexual orientation<span>Straight</span></p><p>Smoking <span>Non Smoker</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon"><i class="fa fa-check" aria-hidden="true"></i> Pasta, lightly rare steaks, desserts.<br><br><i class="fa fa-glass" aria-hidden="true"></i> Red table and semi-sweet wine, strong alcohol and champagne do not drink.<br><br><i class="fa fa-key" aria-hidden="true"></i> Red and white roses<br><br></div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"> </i> Sexy dresses, beautiful underwear, stylish, fashionable girl <br> <br> <i class="far fa-star"> </i> Well-groomed body. <br> <br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Fitness, dancing</div>
<div class="accBut">Dancing, traveling</div>
<div class="accCon"><h4>Agency Estimation...</h4><p> Slender cheerful cute girl. Temperamental young Fairy in Yekaterinburg. Invite and enjoy an unforgettable experience<br> <br >/ Andrei / <br> <br ></p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote> <p> A man has to make his own arrows. </p> </blockquote>
<blockquote> <p> The soul will not have a rainbow if there were no tears in the eyes. </p> </blockquote>
<blockquote> <p> Achieving your happiness is the only moral goal in your life. </p> </blockquote>
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