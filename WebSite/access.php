<?php

$name='vip';
$picsFolio='vip';


$en_title='Elite escort agency MissBliss | VIP models of Moscow and St. Petersburg';
$title='Элитное эскорт агентство МиссБлисс | VIP-модели Москвы и Санкт-Петербурга';
$description = 'Эскорт агентство премиум-класса в Москве и СПб, а также в других городах России. Подбор моделей для мероприятий и отдыха. Фото без обработки, проверенные анкеты, конфиденциальность.';
$keywords = 'элитный эскорт, эскорт агентство, vip модели москва, проверенные эскортницы, спутницы для мероприятий, эскорт спб, красивые модели агентства';
$canonical = 'https://missbliss.su/';
$fxt = 'jpg';

define('__ROOT__', dirname(__FILE__));
include_once (__ROOT__. '/includes/first-top.php');

?>
<!DOCTYPE HTML>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include_once (__ROOT__. '/includes/vip-head.php'); ?>
<?php include_once (__ROOT__. '/includes/styles-first-page.php'); ?>
</head>
<?php include (__ROOT__. '/includes/menu2.php'); ?>
<div class="perspective_container">
<div id="header-bg"></div>

<div id="body-wrapper" class="wrapper">
<div id="header">
<!--noindex--><a href="#" id="logo" rel="nofollow" ></a><!--/noindex-->

<?php include (__ROOT__. '/includes/menu.php'); ?>

</div>
</div>
<div id=slider>
<div class=fullwidthbanner-container>
<div class=fullwidthbanner>

<ul>

<li data-transition="fade" data-slotamount=50 data-thumb="https://ic.m-b.su/thumbs/1.jpg">
<img src=https://ic.m-b.su/slides/thumb9.jpg  alt="">
<div class="caption sfl" data-x=200 data-y=0 data-speed=1500 data-start=10 data-easing=easeOutBack><img src=https://ic.m-b.su/pen.jpg width=292 height=500 alt="Penelopa"></div>
<div class="caption lft big_white"  data-x=550 data-y=120 data-speed=400 data-start=10 data-easing=easeOutExpo>Нужен доступ?</div>
<div class="caption lfl medium-white" data-x=550 data-y=250 data-speed=400 data-start=100 data-easing=easeOutExpo>Пожалуйста, пришлите нам запрос.</div>
	 <div class="caption lfb glow_big_white"  data-x=240 data-y=365 data-speed=1000 data-start=2000 data-easing=easeOutExpo><b><span id="time"></span></b></div>
<div class="caption sfb" data-x=550 data-y=340 data-speed=1000 data-start=1800 data-easing=easeOutBack><a href="https://t.me/TheMissBlissAgency?text=<?=($isEnglish ? 'Hello! I would like to get access to the VIP directory -> ' : 'Привет! Я хотел бы получить доступ в VIP каталог -> ') ?><?=$url ?>" class="btn-image-black">Получить доступ</a></div>
</li>


</ul>
	     <script type="text/javascript">
var i=33;
function time(){
 document.getElementById("time").innerHTML=i;
 i--;
 if (i < 0) location.href="https://missbliss.su/about/";
}
//time();
//setInterval(time, 1050);
</script>
</div>
</div>
</div>
<div id="body-wrap">
<div id="content" class="container clearfix">
<div id="features">
<?php include (__ROOT__. '/includes/first-access.php'); ?>
</div>
</div>

</div>

</div>



</div>
<div id="footer">
<div id="footer-center" class="container">
<div class="footer-left">
<?php include (__ROOT__. '/includes/footer.php'); ?>

</div>
</div>
	
 <hr class="h40"><hr class="h40"><hr class="h40"> <hr class="h40"><hr class="h40"> <hr class="h40">
<?php include (__ROOT__. '/includes/first-footer-bottom.php'); ?>
</div>
</div>
</div>

</div><!-- /pc -->
</div><!-- /p -->




</html>

