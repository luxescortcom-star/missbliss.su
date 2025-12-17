<?php 

$name = 'oxana';
$name1 = 'Oxana';
$name2 = 'Oxana';
$blur = true;
$name3 = 'Oxana';
$picsFolio = 'oxana';

$home = 'Moscow';
$birthdate = '1998-08-16'; 
$height = '164 см';
$weight = '49 kg';
$dataType = 'adult attractive slim model bi brunette msk';
$city = 'msk';


$ru_title = 'Оксана умная интеллигентная девушка, красивая, с ухоженным молодым телом. МиссБлисс Москва';
$title = 'Oksana is a smart, intelligent girl, beautiful, with a well-groomed young body. Miss Bliss Moscow';
$description = 'I am a sweet passionate versatile sociable girl. I love the sea, flowers, theater and parties. I like intelligent and kind men.';
$keywords = 'intelligent girl, beautiful escort, escort young body, cute passionate escort';
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
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Profile</div>
<div class="accCon"><p>Home Area<span><?=$home ?></span></p><p>Travel<span>Moscow only</span></p><p>Age:<span><?php echo $ageData['age']; ?></span></p><p> Height:<span><?=$height ?></span></p><p>Weight:<span><?=$weight ?></span></p><p> Parameters:<span>87/62/90 cm </span></p><p> Bra Size<span>2 (70B) natural</span></p><p> Dress Size<span>S-XS</span></p><p> Hair<span>Brown</span></p><p> Eyes<span>Green</span></p><p> Sexual orientation<span>Bisexual</span></p><p>Attitude to smoking <span>Non Smoker</span></p><p> Conversation<span> Russian</span></p><p> Zodiac sign<span><?php echo $ageData['zodiac']; ?></span></p></div>
<div class="accBut">Favorites</div>
<div class="accCon"><i class="far fa-star"></i> Seafood, European cuisine<br><i class="far fa-star"></i> Drinks: Wine, champagne whiskey<br><i class="far fa-star"></i> Flowers: Roses red, white<br></div>
<div class="accBut">Style</div>
<div class="accCon"><i class="far fa-star"></i> Elegant<br><i class="far fa-star"></i> Smart Casual <br><i class="far fa-star"></i> Classic <br><br><i class="fa fa-check" aria-hidden="true"> </i> The body is clean and well-groomed <br> <i class="fa fa-check" aria-hidden="true"> </i> All natural. <br></div>
<div class="accBut">Hobbies/Interests</div>
<div class="accCon">Fitness, fiction, dance</div>
<div class="accBut">Estimations</div>
<div class="accCon"><h4> About me ... </h4> <p> I am a sweet passionate versatile sociable girl. I love the sea, flowers, theater and parties. I like intelligent and kind men. <br> <br> / Oksana / <br> <br> </p><h4>Agency Estimation...</h4><p>Most of the girls come for an interview and after that they are immediately ready to take a photo for the profile. <br> Oksana came, asked a lot of questions, worried about confidentiality, and then decided to think for another week. I thought that he would not write any more. But no, a week later I called and we agreed on a photo session. <br> <br> Unfortunately for the shooting I arrived late, there is a main job. Therefore, most of the shots with artificial lighting in a hotel room are unfortunately not the best. But I tried to show Oxana in all her glory. And I must say she made me happy and was very relaxed. The only thing: she hid her face behind a mask because she was afraid that a former man or her colleagues in her main job would see her. <br> <br> Oksana is a smart, intelligent girl, beautiful, with a well-groomed young body. She is engaged in fitness, and she not only bought a subscription, but is engaged. And it can be seen from her, slender chiseled legs, elastic ass, waist, skin tender, clean, beautiful. The body is athletic and young. <br> <br> By nature, a little closed, but quite sociable, and in the process of communication, more and more is revealed. I recommend it if it is important for you that the girl was brought up smart and at the same time sexy enough and relaxed. <br> <br> Oksana can dress stylishly beautifully in an evening dress or business style. With her, you will feel comfortable and no one looking from the side will even think that she is from the escort, however this can be said about many of our girls.<br> <br> / Andrei, agency manager / <br> <br></p><br><h4><a href="<?=$feedback_en ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Write a review <i class="fas fa-feather"></i></a></h4></div>
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
<blockquote><p>People's feelings are much more interesting than their thoughts..</blockquote>
<blockquote><p>Happiness is hot chocolate on a cold day!</blockquote>
<blockquote><p>The length of the road is recognized by its width.</blockquote>
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