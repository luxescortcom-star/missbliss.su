<?php 

$name = 'elisha';
$name1 = 'Elisha';
$name2 = 'Elisha';
$blur = true;
$name3 = 'Elisha';
$picsFolio = 'elisha';
$city = 'msk';
$home = 'Moscow';
$height = '165 см';
$weight='55 kg';
$birthdate = '2000-03-15'; 
$dataType = 'adult bi busty attractive slim brunette msk';

$title = 'Elisha 🤩beautiful intelligent, interesting girl. Spectacular and very loving, romantic';
$ru_title = 'Элиша, 🤩Позволь себе лучшее - встречу со мной... Мои формы завораживают';
$description = 'Experienced, depraved, damn attractive! I know how to give true pleasure! No falsehood, only honest emotions, real passion, numerous orgasms from cunnilingus, a sea of affection - this is all about me. Allow yourself the best - a meeting with me . My forms are mesmerizing, and sex with me and divine blowjob you will remember for a long time!';
$keywords = 'experienced mistress, relaxed and experienced, escort girl Moscow';
$fxt = 'jp2';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/en/profile-top-msk.php');
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
<nav id="page-title">
<?php
include_once  ('../navigation.php'); 
$uri = substr(substr($_SERVER['REQUEST_URI'], 12), 8);
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
include_once (__ROOT__. '/includes/en/workers/slider_functions_old.php');

?>
</div>
</div>
 <a href="/xxx/fans-only/msk/<?=$name ?>/12.jp2" class="pP[fansonly]" title="<?=$name1 ?>" > // Intimate diary //</a>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>94/67/92 cm</span></p><p> Bra Size<span>3 (75B)</span></p><p> Dress Size<span>M-L</span></p><p> Hair<span>Light-Brown</span></p><p> Eyes<span>Brown</span></p><p>Conversation<span>Russian</span></p><p>Sexual orientation<span>Bisexual</span></p><p>Attitude to smoking <span>Non Smoker</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon"><i class="far fa-star"></i> I love fish, cheese, and fruits<br><i class="far fa-star"></i> Drinks:  sweet red wine BOSKA ASTI<br><i class="far fa-star"></i> Flowers: Roses pink, white</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Sexual feminity<br><i class="far fa-star"></i> Classic<br><i class="far fa-star"></i> Casual<br><br><i class="fa fa-check" aria-hidden="true"></i> Body well-groomed <br><i class="fa fa-check" aria-hidden="true"></i>All natural <br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Dancing (striptease), Drawing, Books, music.</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About me...</h4><p>Experienced, depraved, damn attractive! <br>I know how to give true pleasure!<br><br> No falsehood, only honest emotions, real passion, numerous orgasms from cunnilingus, a sea of affection - this is all about me. <br><br>Allow yourself the best - a meeting with me ... My forms are mesmerizing, and sex with me and divine blowjob you will remember for a long time!<br> <br>
<br><br>/ <?=$name1 ?> 💋/ <br><br></p><h4>Agency Estimation...</h4><p>Spectacular and very loving, romantic girl.<br><br>/ Andrey, agency manager / <br><br></p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review <i class="fas fa-feather"></i></a></h4></div>
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
<blockquote><p>Nothing betrays a person like what he laughs at </p></blockquote>
<blockquote><p>Yesterday you believed in a wonderful future with her, and today you live in the past, and you don’t understand why you need the present.</p></blockquote>
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