<?php 

$name = 'varvara';
$name1 = 'Varya';
$name2 = 'Varya';
$blur = true;
$name3 = 'Varya';
$picsFolio = 'varvara';
$city = 'msk';

$home = 'Moscow';
$birthdate = '1997-09-14'; 
$height = '171 см';
$weight = '55 кг';
$dataType = 'adult attractive model busty blonde msk';


$title = 'Varvara 🤩hottest blondie escort';
$ru_title = 'Варя 🤩красивая любвеобильная блондинка, элитный эскорт в Москве';
$description = 'Bright, stylish, sexy. Very selective in dating. I guarantee a great time. With mutual sympathy, many things are possible';
$keywords = 'gorgeous blonde, beautiful escort, varvara escort moscow, blonde escort moscow';
$fxt = 'jpg';

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
$folder='b';
include_once (__ROOT__. '/includes/workers/slider_functions_FTP_old.php');

?>
</div>
</div>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Spb, Moscow</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>89/60/90 cm </span></p><p> Bra Size<span>2 (75C) natural</span></p><p> Dress Size<span>42-44</span></p><p> Hair<span>Blond</span></p><p> Eyes<span>Green</span></p><p>Sexual orientation<span>Straight</span></p><p>Attitude to smoking<span>Non smoker</span></p><p> Conversation<span> Russian, English</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">Italien and Thai cuisine, soft drinks</div>
<div class="accBut">Style</div>
<div class="accCon">Sexual femininity <br> Casual <br> Classics <br><br> <i class="fa fa-check" aria-hidden="true"></i> Body well-groomed, clean, <br> <i class="fa fa-check" aria-hidden="true"> </i> all natural. <br><br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Travel, Fitness, Skiing</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About Me...</h4><p>Bright, stylish, sexy. Very selective in dating. I guarantee a wonderful pastime, passionate sex, relaxing massage. With mutual sympathy, much is possible</p><h4>Agency Estimation...</h4><p><?=$name ?>, an interesting hottest beautiful blondie. Tender and feminine.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review <i class="fas fa-feather"></i></a></h4></div>
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
<blockquote><p>All virtue is summed up in dealing justly.</blockquote>
<blockquote><p>The gods too are fond of a joke.</blockquote>
<blockquote><p>Liking money like I like it, is nothing less than mysticism. Money is a glory.</blockquote>
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