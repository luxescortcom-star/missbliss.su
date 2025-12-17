<?php

$name='linda';
$name1='Linda';
$name2='Linda';
$name3='Linda';

$picsFolio='linda';

$blur = true;

$fxt = 'jp2';
$city='spb';

$home = 'St. Petersburg';
$height='166 см';
$weight='57 kg';
$birthdate = '1993-07-17'; 
$dataType = 'adult attractive brunette spb';


$title='Linda 🤩Bright interesting cheerful girl';
$ru_title='Линда 🤩Яркая интересная веселая девушка в Санкт-Петербурге';
$description = 'Linda if you like older Ladys, Ladys with background. If you like filled with interesting and at the same time sexy beauties.';
$keywords = 'linda escort spb, brunette adult escort';

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
</p><h1><?=$name1 ?>. S<span>ain</span>t-Petersburg<span>, Russia</span></h1>
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
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>77/71/97 cm </span></p><p> Bra Size<span>2 (75B) Natural</span></p><p> Dress Size<span>S-M</span></p><p> Hair<span>Brown</span></p><p> Eyes<span>Brown</span></p><p>Sexual orientation<span>Straight</span></p><p>Attitude to smoking<span>Smoker</span></p><p> Conversation<span> Russian</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">I give food preferences to Russian and European cuisine <br> In drinks I prefer thin alcohol, wine, martinis or cocktails <br> Flowers: Roses</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Classic <br><i class="far fa-star"></i> Sexy Feminine<br> <i class="far fa-star"></i> Always stylish and sexy looks. <br> <br> <i class="fa fa-check" aria-hidden="true"></i>  The body of well-groomed, clean </div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">There is no particular hobby, I work as a bartender, I go for a walk in my free time, or I earn some money by entertaining you, Lord</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About me...</h4><p>I like the taste of life <br> I appreciate the courage in people to be myself <br>
Men like a sense of humor, reliability, sensitivity<br><br>/ Linda / <br><br></p><h4>Agency Estimation...</h4><p>A bright interesting cheerful Lady. She works as a bartender and there almost every day she receives offers to marry. I decided to monetize my popularity. I learned about this from her at an interview in a Starbucks cafe. She drank cappuccino, I drank tea. Linda communicates freely, smiling, cheerful, joking, laughing in response to my jokes. Easy and comfortable Lady. At the photo session, she was relaxed and freely posed and she herself enjoyed the process. She is very artistic and you can see it in the photo. What I would like to note is that this is a pretty beautiful body despite the imbalance. The thighs are plump, the chest is beautiful, its own two. For her age, Linda looks very good. I would recommend Linda if you like older Ladys, Ladys with background. If you like filled with interesting and at the same time sexy beauties.<br><br>/ Andrei / <br><br></p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4></div>
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