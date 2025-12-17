<?php 

$name='camilla';
$name1='Camilla';
$name2='Camilla';
$name3='Camilla';
$blur = false;
$picsFolio = 'camilla';
$city = 'rnd';
$home = 'Rostov-on-Don';
$birthdate = '2003-06-15';
$height = '168-170 см';
$weight = '55 kg';
$dataType = 'young new favorite  brunette regions rostov';


$title='✨ Camilla, a young, sexy doll of unearthly beauty in Rostov-on-Don';
$ru_title='✨ Камилла, юная сексуальная куколка неземной красоты в Ростове на Дону';
$description = 'Camilla will brighten up your evening and make it unforgettable in Rostov-on-Don. But if you\'re willing to pay for travel and book at least a day in advance, Camilla is also ready to fly to another city.';
$keywords = 'sexy doll escort, escort rostov, camilla sexy doll rostov-on-don';

$fxt = 'avif';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/en/workers/birth_date.php');

include_once (__ROOT__. '/includes/profile-top-rnd.php');

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
<p><a  href="#" title=Lera><i class="scr"></i></a></p>
<p><a href="../../../all_vip_escorts/" title="Escorts Girls from MissBliss Agency"><i class="scli"></i></a></p>
<p><a  href="#" title=Maria><i class="scl"></i></a></p>
	<h1><?=$name1 ?>. <?=$home ?></h1>
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
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Worldwide</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>90/65/95 см</span></p><p> Bra Size<span>2 (75B)</span></p><p> Dress Size<span>S</span></p><p> Hair<span>Dark-Brown</span></p><p> Eyes<span>Brown</span></p><p> Sexual orientation<span>Straight </span></p><p>Attitude to smoking <span>Non smoker</span></p><p> Conversation<span>Russian, English</span></p><p>Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">I prefer seafood. <br> From drinks - champagne</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Elegant femininity<br><br><i class="far fa-star"></i> * Clean, well-groomed body.<br><br></div>

<div class="accBut">Estimations</div>
<div class="accCon"><h4>Agency Estimation...</h4><p>Camilla, a young, sexy doll of unearthly beauty, will brighten up your evening and make it unforgettable in Rostov-on-Don. But if you're willing to pay for travel and book at least 24 hours, Camilla is also ready to fly to another city.<br></p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a feedback</a> <i class="far fa-thumbs-up"></i></h4></div>
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

</div>
<?=$invite_en ?>
</div>
</div>
</div>
</div>

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