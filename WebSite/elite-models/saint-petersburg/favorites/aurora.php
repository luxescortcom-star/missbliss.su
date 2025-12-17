<?php 


$name='aurora';
$name1='Aurora';
$name2='Aurora';
$name3='Aurora';
$blur = null;
$picsFolio = 'aurora';
$city='spb';
$home = 'St. Petersburg';
$height = '170 см';
$weight = '54 kg';
$birthdate = '1996-08-28'; 
$dataType = 'adult favorite busty slim brunette spb';

$fxt = 'jp2';

$title='A bewitching mixture of coquetry and sexuality, an easy-going, cheerful, intelligent girl. Elite escort in St. Petersburg';
$ru_title='Завораживающая смесь кокетства и сексуальности, легкая в общении веселая интеллигентная девушка. Элитный эскорт в Санкт-Петербурге';
$description = 'Feminine inside and out. Charismatic, artistic, alluring, a bewitching mixture of coquetry and sexuality, an easy-going, cheerful, intelligent girl. A beautiful, unique young lady with a luxurious figure. Knows how to be loved';
$keywords = 'brunette escort, escort spb, aurora escort spb';

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
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Russia only</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>90-64-90 см</span></p><p> Bra Size<span>2 (80С), natural</span></p><p> Dress Size<span>M-S</span></p><p> Hair<span>Golden Blonde</span></p><p> Eyes<span>Blue</span></p><p> Sexual orientation<span>Bisexual </span></p><p>Attitude to smoking <span>Non smoker</span></p><p> Conversation<span>Russian, English</span></p><p>Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon">I prefer seafood, italian cuisine. <br> From drinks - Wine red dry or semi-sweet, coffee, coffee with rum.</div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Elegant femininity<br><br><i class="far fa-star"></i> * Clean, well-groomed body.<br><br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Reading fiction and business literature, nature walks, music, poetry, dancing, cooking.</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4>About Me...</h4><p>Real, sincere. <br>Feminine inside and out.<br> Charismatic, artistic, alluring, <br>with a twinkle.<br> I can easily be uninhibited, but I will never be vulgar. <br><br>In men I appreciate decency, gallantry. / <?=$name ?> /</p><br><h4>Agency Estimation...</h4><p>a bewitching mixture of coquetry and sexuality, an easy-going, cheerful, intelligent girl. A beautiful, unique young lady with a luxurious figure. Knows how to be loved.</p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a feedback</a> <i class="far fa-thumbs-up"></i></h4></div>
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
<blockquote><p>There is no better deodorant than success.</p></blockquote>
<blockquote><p>When a forty-year-old man falls in love with a twenty-year-old girl, he is not looking for her youth, but his own.</p></blockquote>
<blockquote><p>The two most useful books for a girl are her mother's kitchen book and her father's checkbook.</p></blockquote>
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