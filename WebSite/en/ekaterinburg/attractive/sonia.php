<?php 

$name='sonia';
$name1='Sonia';
$name2='Sonia';
$name3='Sonia';
$blur = true;
$picsFolio = 'sonia';

$home = 'Ekaterinburg';
$birthdate = '2003-04-11'; 
$height = '170 см';
$weight = '58 kg';
$dataType = 'young attractive escort blonde regions ekb';
$city = 'ekb';

$title='Sonya 🤩bright stylish slender student and dancer with a luxurious young body! Elite escort in Yekaterinburg.';
$ru_title='Соня 🤩яркая стильная стройная студентка и танцовщица с роскошным юным телом! Элитный эскорт в Екатеринбурге.';
$description = 'Gentle and sensitive, her reactions are natural and lively. She is not playing, she enjoys the process herself!';
$keywords = 'ekb blonde escort, escort girl ekaterinburg, escort girl chelyabinsk';


$fxt = 'jpg';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-ekb.php');
$canonical = ''.$url.'';

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
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>96/66/86 см</span></p><p> Bra Size<span>2 (75B) natural</span></p><p> Dress Size<span>S-XS</span></p><p> Hair<span>Honey-light</span></p><p> Eyes<span>Green</span></p><p> Conversation<span>Russian, English(poor)</span></p><p>Sexual orientation<span>Straight</span></p><p>Smoking <span>Non Smoker</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon"><i class="fa fa-check" aria-hidden="true"></i> Fish dishes, Japanese cuisine.<br><br><i class="fa fa-glass" aria-hidden="true"></i> Drinks: light cocktails.<br><br><i class="fa fa-key" aria-hidden="true"></i> Red and white roses<br><br></div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"> </i> Sexy dresses, beautiful underwear, stylish, fashionable girl <br> <br> <i class="far fa-star"> </i> Well-groomed body. <br> <br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Chess, theater</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4> About me ... </h4>I like myself, my adventurism, abilities, my beautiful appearance and my intellect. <br> <br> Open for communication with a worthy interesting person. <br> <br>
In men I value kindness, tenderness, sense of humor, confidence, passion.<br><br>/ <?=$name1 ?> 💋/ <br><br></p><br><h4>Agency Estimation...</h4><p> Sonia is a striking, stylish, slim studentwith a gorgeous youthful body. <br> <br> This gentle and relaxed mistress is able to instantly turn your head and take you to the planet of love! <br> <br> Gentle and quivering, her reactions are natural and lively. She does not play, she herself enjoys the process!<br> <br >/ Andrei / <br> <br ></p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4></div>
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