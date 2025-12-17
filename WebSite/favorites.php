<?php  

$name='vip';
$picsFolio='vip';


$en_title='Exclusive Favoritest of MissBliss Agency | Elite Companions & Lovers';
$title='Фаворитки агентства МиссБлисс | Идеальные спутницы и любовницы';
$description = 'Наши фаворитки — тщательно отобранные элитные модели с безупречной внешностью, изысканными манерами и комфортным характером. Идеальные спутницы для ценителей женственности.';
$keywords = 'фаворитки эскорта, эскорт фаворитки, идеальные любовницы, спутницы для ВИП, элитные любовницы, отборные эскортницы, премиум эскорт';

$fxt = 'jpg';

define('__ROOT__', dirname(__FILE__));
include_once (__ROOT__. '/includes/top-escorts.php');
?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include_once (__ROOT__. '/includes/head.php'); ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "Фаворитки агентства МиссБлисс",
  "description": "Элитные отобранные модели с безупречной внешностью и манерами",
  "url": "https://missbliss.ru/favorites/",
  "serviceType": "Эскорт-сопровождение",
  "areaServed": ["Москва", "Санкт-Петербург"]
}
</script>	
</head>
<div class="modal_age">
<div class="modal_age_wrap" id="info_age_modal">
  <div class="modal_title">Страница содержит материалы для взрослых</div>
  <div class="modal_age_text">
     <span>Вам исполнилось 18 лет?</span>
      <p>Перейдя по ссылке вы так же подтверждаете что вам исполнилось 18 лет</p>
</div>
   <div class="modal_age_but">
	<div class="modal_but_no">Мне нет 18</div>
    <div class="modal_but_yes arcticmodal-close">Да, мне есть 18</div>

</div>
</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/menu2.php'; ?>
<div class="perspective_container"> 
<div id="header-bg"></div>
<div id="top-m" class="default">
<ul class="filter group">
<li class="current all"><!--noindex--><a href="#favorites" rel="nofollow">Фаворитки</a><!--/noindex-->
<li class="мск"><!--noindex--><a href="#мск" rel="nofollow">Москва</a><!--/noindex-->
<li class="спб"><!--noindex--><a href="#спб" rel="nofollow">Санкт-Петербург</a><!--/noindex-->   
<li class="новенькая"><!--noindex--><a href="#новенькие" rel="nofollow">новенькие</a><!--/noindex-->
<li class="блондинка"><!--noindex--><a href=#блондинки rel="nofollow">блондинки</a><!--/noindex-->
<li class="брюнетка"><!--noindex--><a href=#брюнетки rel="nofollow">брюнетки</a><!--/noindex-->
 
	

</ul>
</div>
<div id="shb"></div>
<div id="body-wrapper" class="wrapper">
<div id="header">
<!--noindex--><a href="#" rel="nofollow" id="logo"></a><!--/noindex-->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/menu.php'; ?>
</div>
<div id="content" class="container clearfix>"
><p id="back-top" style="display: block;">
<a href="#top"><span></span></a>
</p>
<ul class="filter group">
<li class="current all"><!--noindex--><a href="#favorites" rel="nofollow">Фаворитки</a><!--/noindex-->
<li class="мск"><!--noindex--><a href="#мск" rel="nofollow">Москва</a><!--/noindex-->
<li class="спб"><!--noindex--><a href="#спб" rel="nofollow">Санкт-Петербург</a><!--/noindex-->
<li class="новенькая"><!--noindex--><a href="#новенькие" rel="nofollow">новенькие</a><!--/noindex-->    
<li class="блондинка"><!--noindex--><a href=#блондинки rel="nofollow">блондинки</a><!--/noindex-->
<li class="брюнетка"><!--noindex--><a href=#брюнетки rel="nofollow">брюнетки</a><!--/noindex-->
   
	

</ul>


<div id="projects3">
<?php include_once ('gallery_generator.php'); ?>
</div>
</div>
</div>
<div id="footer">
<div id="footer-center" class="container">
<div class="footer-left">	
<?php include_once (__ROOT__. '/includes/footer.php'); ?>

</div>




</div><hr class="h40"><hr class="h40"> <hr class="h40"><hr class="h40"><hr class="h40"> <hr class="h40">
<?php include_once (__ROOT__. '/includes/footer_full_bottom.php'); ?>
</html>
