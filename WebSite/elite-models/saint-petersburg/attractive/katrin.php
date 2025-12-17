<?php 

$name='katrin';
$name1='Katrin';
$name2='Katrin';
$name3='Katrin';
$picsFolio='katrin';

$blur = true;

$fxt = 'jp2';
$city='spb';

$home = 'Санкт-Петербург';
$height='165 см';
$weight='50 кг';
$birthdate = '1997-09-17'; 
$dataType = 'adult attractive busty slim  brunette spb';

$title='Katrin 🤩is an intelligent smart beautiful brunette! Beautiful model for escort in St. Petersburg';
$ru_title='Катрин 🤩интеллигентная умная красивая брюнетка! Красивая модель для эскорта в Санкт-Петербурге';
$description = 'Katrin is an amazing smart intelligent charismatic girl. She really surprised me when I met her. Katrin, like many of our girls, has a professional background, works in a prestigious company, and is a physician by profession.  The girl, well-groomed and tastefully dressed, brought a beautiful red dress. All this she can, if desired, dress for a date with you.';
$keywords = 'beautiful brunette, beautiful bright sexy, katrin escort spb';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-spb.php');

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
include_once (__ROOT__. '/includes/workers/slider_functions_FTP_old.php');

?>
</div>
</div>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>93/60/90 см</span></p><p> Bra Size<span>3 (75B)</span></p><p> Dress Size<span>S-XS</span></p><p> Hair<span>Black</span></p><p> Eyes<span>Green</span></p><p> Conversation<span>Russian, English</span></p><p>Sexual orientation<span>Straight</span></p><p>Smoking <span>Non Smoker</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon"><i class="fa fa-check" aria-hidden="true"></i> Seafood, rice, grilled vegetables. Italian desserts.<br><br><i class="fa fa-glass" aria-hidden="true"></i> Whiskey Jameson, Red semi-sweet wine<br><br><i class="fa fa-key" aria-hidden="true"></i> Red and white roses<br><br></div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"> </i> Sexy dresses, beautiful underwear, stylish, fashionable girl <br> <br> <i class="far fa-star"> </i> Well-groomed body. <br> <br> <i class="fa fa-exclamation-triangle" aria-hidden="true"> </i> There are tattoos <br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Fitness, art, I like to draw, sculpt clay products, make soap and make organic cosmetics, cook homemade food and go hiking in the mountains.</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4> About me ... </h4>I love my purposeful character, cheerfulness, curiosity, energy, optimism and
the ability to be friends. <br> <br> I appreciate life for the opportunity to develop, meet new people, the process of learning and fresh emotions. <br> <br>
I like charismatic, smart, kind, with their own business in life, able to do things, men. <br> <br> / <?=$name1 ?> 💋 / <br> <br> </p> <br> <h4> Agency Estimation ... </h4> <p> Katrin is an amazing smart intelligent charismatic girl. She really surprised me when I met her. <br> <br> Although she first wrote to us about the job a year ago, after talking with her and finding out the conditions, we even agreed on a photo session, but she did not come then. A year later, she turned again and at the meeting said that the last time she had read some reviews on the Internet and changed her mind. Now I decided to try it myself, but still with apprehension about my honesty and reputation. <br> <br> We met in a cafe and drank tea and talked for a very long time. Katrin, like many of our girls, has a professional background, works in a prestigious company, and is a physician by profession. For her, an escort is an opportunity to earn extra money in her free time, as well as additional entertainment and attention of men. <br> <br> The girl, well-groomed and tastefully dressed, brought a beautiful red dress and several beautiful sets of underwear to the photo session. All this she can, if desired, dress for a date with you. <br> <br> I recommend this unique girl, date her, you will really like her! <br> <br> / Andrey, agency manager / <br> <br ></p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4></div>
<div class="accBut">Fee</div>
<div class="accCon"><div class="column last">
<div class=table-title>
</div>
<?php include_once __ROOT__. '/includes/model-prices.php'; ?>
<div class="footer">
<?=$invite ?>
</div> </div>
    <!--noindex--><a class="close" title="сlose" rel="nofollow" href="#close"></a><!--/noindex-->
    </div>
</div>
</div>
<div class="widget clearfix">
<hr>
<div class="testimonial">
<blockquote><p>More than cleverness, we need kindness and gentleness.</blockquote>
<blockquote><p>You'll find that life is still worthwhile, if you just smile.</blockquote>
<blockquote><p>If you cannot convince them, confuse them.</blockquote>
</div>
<?=$invite ?>	
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