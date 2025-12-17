<?php 

$name='slava';
$name1='Slava';
$name2='Slava';
$name3='Slava';
$blur = true;
$picsFolio = 'slava';
$city='spb';
$home = 'St. Petersburg';
$height='164 см';
$weight='52 кг';
$birthdate = '1978-02-12'; 
$dataType = 'adult attractive bi brunette spb';


$ru_title='Слава, взрослая красивая стройная Леди для приятного досуга в Санкт-Петербурге. Агентство МиссБлисс';
$title='Slava, adult beautiful slim Lady for pleasant leisure in Saint Petersburg. The MissBliss escorts Agency';
$description = 'Calm, self-confident, modest, a little shy, straightforward, with a good sense of humor, open to everything new ';
$keywords = 'experienced escort, slava escort spb, adult lady escort spb';

$fxt = 'jpg';
$departures='Russia only';
$volumes='82/68/93 cм';
$bra='1 (75B)  natural';
$eyes='Grey-Green';
$hair='Brunette';
$size='S-М';
$orientation='Bisexual';
$languages='Russain, Türkçe';
$smoking='Not Smoker';


$preferences='I love Italian cuisine, dry white wine';

$style='<i class="far fa-star"></i> Sexy elegance<br><i class="far fa-star"></i> Casual<br><i class="far fa-star"></i> Classic<br><br><i class="fa fa-check" aria-hidden="true"></i> The body is well-groomed and clean,<br><i class="fa fa-check" aria-hidden="true"></i> all natural. <br><br>';

$hobby='Books, Cinema, Travel';

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
<div id=content class="container clearfix">
<p id=back-top style="display: block;">
<a href=#top><span></span></a>
</p>
<nav id=page-title>
<?php
include_once  ('../navigation.php'); 
$uri = substr(substr($_SERVER['REQUEST_URI'], 16), 14);
$currentFile = trim($uri, '/');
$currentFile = preg_replace('/\/+/', '/', $currentFile);
echo generateNavigation($currentFile);
?>
<h1><?=$name1 ?>. S<span>ain</span>t-Petersburg<span>, Russia</span></h1>
</nav>
<div id=main>
<div class="project-image portfolio"> 
<div class=flexslider>
<?php
include_once (__ROOT__. '/includes/workers/slider_functions_v.php');

?>
</div>
</div>
</div>
<div id=sidebar>
<div class=widget>
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Profile</div>	
<div class="accCon"><p>City:<span><?=$home ?></span></p><p>Travel<span><?=$departures ?></span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span><?=$volumes ?></span></p><p>Bra Size:<span><?=$bra ?></span></p><p>Eyes<span><?=$eyes ?></span></p><p>Hair<span><?=$hair ?></span></p><p>Dress Size<span><?=$size ?></span></p><p> Sexual orientation<span><i class="fas fa-venus-mars"></i> <?=$orientation ?></span></p><p>Conversation<span><?=$languages ?></span></p><p>Attitude to smoking<span><?=$smoking ?></span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p><br></div>
<div class="accBut">Favorites</div>
<div class="accCon"><?=$preferences ?></div>
<div class="accBut">Style</div>
<div class="accCon"><?=$style ?></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon"><?=$hobby ?></div>
 <div class="accBut">Estimations</div>
<div class="accCon"><h4>About me...</h4><p>Calm, self-confident, modest, a little shy, straightforward, with a good sense of humor, open to everything new <br><br></p><h4>Agency Estimation...</h4><p>Slava- interesting sexy woman. Your temperamental companion for a holiday in St. Petersburg</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review</a> <i class="far fa-thumbs-up"></i></h4><br></div>
<div class=accBut>Fee</div>
<div class=accCon><div class="column last">
<div class=table-title>
</div>
<?php include_once __ROOT__. '/includes/model-prices.php'; ?>
<div class=footer>
<?=$invite_en ?>
</div> </div>
    <a class="close" title="close" href="#close"></a>
    </div>
</div>
</div>
<div class="widget clearfix">
<hr>

<div class=testimonial>
<blockquote><p>It does not matter how slowly you go so long as you do not stop.</blockquote>
<blockquote><p>Illusion is the first of all pleasures.</blockquote>
<blockquote><p>Love as expensive crystal, you with it be cautious!</blockquote>
<blockquote><p>I just want to be with you</blockquote>
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