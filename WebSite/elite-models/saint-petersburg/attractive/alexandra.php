<?php 



$name = 'alexandra';
$name1 = 'Sasha';
$name2 = 'Sasha';
$blur = true;
$picsFolio = 'alexandra2';
$city='spb';
$home = 'St Petersburg';
$height = '160 см';
$weight = '40 kg';
$birthdate = '2000-11-15'; 
$dataType = 'slim attractive brunette spb';

$fxt = 'jp2';


$title = 'Alexandra 🤩 is a young busty baby with a magnificent figure. Cheerful, funny coquette! Beautiful model for escort in St. Petersburg';
$ru_title = 'Саша 🤩юная малышка с пышной фигурой. Веселая смешливая кокетка! Красивая модель для эскорта в Санкт-Петербурге';
$description = 'Stylish beautiful slim girl. Eastern temperamental lover. Cheerful and comfortable. With a beautiful slim body';
$keywords = 'slim girl, escort spb, sasha escort spb';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-spb.php');


?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include_once (__ROOT__. '/includes/head.php'); ?>
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
include_once (__ROOT__. '/includes/workers/slider_functions_FTP_old.php');

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
<div class="accCon"><p>Home Area<span>Saint-Petersburg</span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>78/60/88 cm </span></p><p> Bra Size<span>2 (75B) Natural</span></p><p> Dress Size<span>S-XS</span></p><p> Hair<span>Light-Brown</span></p><p> Eyes<span>Green</span></p><p>Sexual orientation<span>Bisexual</span></p><p>Attitude to smoking<span>Non Smoker</span></p><p> Conversation<span>Russian-English(poor)</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon"><i class="far fa-star"></i> Seafood, rice, grilled vegetables. Asian food <br><i class="far fa-star"></i> Martini  <br><i class="far fa-star"></i> Flowers: Red and white roses</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Classic <br><i class="far fa-star"></i> Sexy Feminine<br> <i class="far fa-star"></i> Always stylish and sexy looks. <br> <br> <i class="fa fa-check" aria-hidden="true"></i>  The body of well-groomed, clean </div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Oriental dances, massage, spiritual experiences</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About me...</h4><p>I like myself: appearance, character, intelligence, style, sophistication
Appreciate in life: For what I am. Life gives me the opportunity to feel: love, joy, etc. It is very nice. Life gives us a lot of opportunities, the main thing is to have time to realize them.
I like men: strong, smart, active, sexy, self-confident, promising, successful in society, with adequate self-esteem, optimistic<br><br>/ <?=$name1 ?> / <br><br></p><h4>Agency Estimation...</h4><p>Stylish beautiful slender girl. Eastern temperamental mistress. Cheerful and comfortable. With a beautiful slender body. Will become your wonderful companion in St. Petersburg, Russia<br><br>/ Andrei / <br><br></p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>And my little inner goddess, gently rocking her hips, dances a victorious samba.</p></blockquote>
<blockquote><p>When you overhear someone else's conversation, you will not hear anything pleasant for yourself.</p></blockquote>
<blockquote><p>If you can not beat someone, join him</p></blockquote>
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