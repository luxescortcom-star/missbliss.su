<?php 

$name='vika';
$name1='Vicky';
$name2='Vicky';
$name2='Vicky';
$blur = true;
$picsFolio='vika';
$city='spb';
$home = 'St. Petersburg';
$height='170 см';
$weight='62 kg';
$birthdate = '1995-08-08'; 
$dataType = 'adult attractive busty blondie spb';

$fxt = 'jpg';

$title='Vika 🤩 busty blonde hottest escort';
$ru_title='Вика 🤩роскошная блондинка с красивой грудью';
$description = 'Hot blonde with beautiful turquoise eyes will easily drive you crazy. A cheerful character and a sufficient share of coquetry will not let you get bored. And do not even try to resist her spell, it is useless.';
$keywords = 'luxury escort, blonde beautiful breasts, Vicky escort St. Petersburg';

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
<ul class="slides">
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
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>90/63/93 cm </span></p><p> Bra Size<span>2 (75C) natural</span></p><p> Dress Size<span>42</span></p><p> Hair<span>Сhocolate</span></p><p> Eyes<span>Grey-green</span></p><p> Conversation<span>Russian, English</span></p><p>Sexual orientation<span>Straight</span></p><p>Smoking <span>Smoker</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">Sashimi with Ponzu, Nicoise, Cheese (brie, Camembert, Dor Blue, Parmesan) <br> Jamon (Iberico) <br> Green grapes <br> Chinese cuisine is the tastiest for me. <br> <br>
The wine is white dry, the savignon is better than Chile, or glade. Champagne Widow Clicquot</div>
<div class="accBut">Style</div>
<div class="accCon">Womanly, stylish, sexy, vivacious<br><br>* Clean, well-groomed body.<br> 100% natural body.</div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Fitness, Singing, Dance, Travel</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About Me...</h4><p>I walk through life boldly and confidently, I, as the heroine of Mila Jovovich from the movie "Resident Evil", is full of energy and ready to win. But all my aggression does not prevent me from maintaining female tenderness and charm - this is my main weapon. My figure, a direct open look, is always on alert. I am passionate, vulgar and at the same time tender. I love experiments. You can do whatever you want with me, I will fulfill your every desire. I love slap on the pope and oral sex</p><br><h4>Agency Estimation...</h4><p>Hot slim blonde with beautiful turquoise eyes will easily drive you crazy. A cheerful character and a sufficient share of coquetry will not let you get bored. And do not even try to resist her spell, it is useless.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>More than cleverness, we need kindness and gentleness.</blockquote>
<blockquote><p>You'll find that life is still worthwhile, if you just smile.</blockquote>
<blockquote><p>If you cannot convince them, confuse them.</blockquote>
</div>

</div>
</div>
<?=$invite_en ?>
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