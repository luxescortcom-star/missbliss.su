<?php 


$name='lera';
$name1='Lera';
$name2='Lera';
$name3='Lera';
$picsFolio='lera';

$blur = null;

$fxt = 'jp2';
$city='spb';

$home = 'St. Petersburg';
$height='166 см';
$weight='55 kg';
$birthdate = '1999-07-17'; 
$dataType = 'adult attractive brunette spb';

$title='Lera 🤩Hot cheerful escort girl. Escort Saint Petersburg';
$ru_title='Лера 🤩Горячая веселая девочка эскортница. Эскорт Санкт-Петербург';
$description = 'Lera is a bright modern girl with plump lips and a good figure. Quite relaxed and comfortable in communication. You can discuss any topic with her, she is a good companion and drinking buddy. Knows how to drink and have fun.';
$keywords = 'sex escort, sexy girl peter, lera escort spb';

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
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Russia only</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>93/64/102 cm </span></p><p> Bra Size<span>2 (80B) natural</span></p><p> Dress Size<span>S-M</span></p><p> Hair<span>Light-Brown</span></p><p> Eyes<span>Grey-Blue</span></p><p> Conversation<span>Russian, English(B2)</span></p><p>Sexual orientation<span>Bisexual</span></p><p>Smoking <span>Not Smoker</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">I love seafood, European and Chinese cuisine <br>
from alcohol - dry white wine, whiskey, gin</div>
<div class="accBut">Style</div>
<div class="accCon">Sexy dresses, skirts<br><br>* Body well-groomed, all natural.<br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <br>On the body there are tattoos on the theme of cartoons and memes<br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">sports, knitting, psychology, medicine</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About Me...</h4><p>In myself I like:<br> lightness, sense of humor, intelligence <br>

<br>In men: purposefulness, care, attentiveness, sense of humor<br>

<br>In life: that everything is possible in life, the main thing is to make efforts and patience, and that there are pluses and minuses in everything, there is no black and white</p><br><h4>Agency Estimation...</h4><p>Lera is a bright modern girl with plump lips and a good figure. Quite relaxed and comfortable in communication. You can discuss any topic with her, she is a good companion and drinking buddy. Knows how to drink and have fun.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4></div>
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