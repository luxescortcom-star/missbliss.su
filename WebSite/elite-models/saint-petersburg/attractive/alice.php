<?php 
$name='alice';
$name1='Alice';
$name2='Alice';
$name3='Alice';
$blur = null;
$picsFolio = 'alice';

$home = 'St. Petersburg';
$height = '165 см';
$weight = '50 kg';
$birthdate = '1990-08-16'; 
$dataType = 'adult attractive slim bi blondie spb';
$city='spb';

$fxt = 'jpg';

$title='Alice 🤩 Feminine and comfortable girl with a beautiful figure';
$ru_title='Алиса 🤩 Женственная и комфортная девушка с красивой фигурой';
$description = 'Feminine and comfortable girl with a beautiful figure. She is quite erudite and it is pleasant to talk with her on a variety of topics';
$keywords = 'blonde escort spb, beautiful figure blonde, young escort spb, alice spb escort';


define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-spb.php');



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
<h1><?=$name2 ?>. S<span>ain</span>t-Petersburg<span>, Russia</span></h1>
</nav>
<div id="main">
<div class="project-image portfolio">
<div class="flexslider">
<?php
include_once (__ROOT__. '/includes/workers/slider_functions_FTP.php');

?>
</div>
</div>
<?php

include_once (__ROOT__. '/includes/workers/lightbox_functions.php');


?>
</div>
<div id="sidebar">
<div class="widget">
<h2><?=$name2 ?></h2>
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>87/63/90 cm </span></p><p> Bra Size<span>2 (75B)</span></p><p> Dress Size<span>S</span></p><p> Hair<span>Blondie</span></p><p> Eyes<span>Green</span></p><p>Sexual orientation<span>Bisexual</span></p><p>Attitude to smoking<span>Non Smoker</span></p><p> Conversation<span> Russian-English-French</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">Japan food, wine and spirits</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Classic <br> <i class="far fa-star"></i> Always stylish and sexy looks. <br> <br> <i class="fa fa-check" aria-hidden="true"></i>  The body of well-groomed, clean <br></div>
<div class="accCon">Classical literature, language learning, psychology, interior design, dancing, playing musical instruments, vocals, traveling, film fan, I like to take part in various sports</div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon"> <i class="fa fa-star-o "aria-hidden="true"></i> I love cinema, theater, yoga, literature.</div>	
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About me...</h4><p>I love to know life in all the diversity of its faces, the world and the people around me, I believe in small and big miracles, I try to help those whom I can help. I love animals, I love nature and travel. I do not divide the world into white and black. If the stars are burning, it means someone needs it</p><br><h4>Agency Estimation...</h4><p>Feminine and comfortable girl with a beautiful figure. She is quite erudite and it is pleasant to talk with her on a variety of topics. Open-mind and cheerful girl.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>Happiness is not a destination. It is a method of life</p></blockquote>
<blockquote><p>A very small degree of hope is sufficient to cause the birth of love.</p></blockquote>
<blockquote><p>Beauty is power; a smile is its sword.</p></blockquote>
<blockquote><p>it’s better to bum out than to fade away</p></blockquote>
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