<?php 

 define('__ROOT__', dirname(dirname(__FILE__)));


$name = 'vip';
$picsFolio = 'vip';

$en_title = 'Elite escort agency MissBliss | VIP models of Moscow and St. Petersburg';
$title = 'Элитное эскорт агентство МиссБлисс | VIP-модели Москвы и Санкт-Петербурга';
$description = 'Эскорт агентство премиум-класса в Москве и СПб, а также в других городах России. Подбор моделей для мероприятий и отдыха. Фото без обработки, проверенные анкеты, конфиденциальность.';
$keywords = 'элитный эскорт, эскорт агентство, vip модели москва, проверенные эскортницы, спутницы для мероприятий, эскорт спб, красивые модели агентства';
$canonical = 'https://missbliss.su/';
$fxt = 'jpg';

include_once (__ROOT__. '/includes/first-top.php'); 


$title_ru = 'Эскорт Агентство "МиссБлисс"  Элитный Эскорт в Санкт-Петербурге';
$title = 'The MissBliss Escorts Agency, St Petersburg, Russia';
?>
<!DOCTYPE HTML>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include_once (__ROOT__. '/includes/vip-head.php'); ?>
<?php include_once (__ROOT__. '/includes/styles-first-page.php'); ?>
</head>

<?php include_once (__ROOT__. '/includes/en/menu2.php'); ?>
<div class="perspective_container">
<div id="header-bg"></div>

<div id="body-wrapper" class="wrapper">
<div id="header">
<a href="#"  id="logo" title="MissBliss Agency, Entrance to Narnia"></a>
<?php include_once (__ROOT__. '/includes/menu.php'); ?>
</div>
</div>
<div id="slider">
<div class="fullwidthbanner-container">
<div class="fullwidthbanner">
<ul>
<?php
if (file_exists(__ROOT__ . '/includes/en/banner-msk.php')) {
    include_once(__ROOT__ . '/includes/en/banner-msk.php');
}
if (file_exists(__ROOT__ . '/includes/en/banner-spb.php')) {
    include_once(__ROOT__ . '/includes/en/banner-spb.php');
}
if (file_exists(__ROOT__ . '/includes/en/banner-casting.php')) {
    include_once(__ROOT__ . '/includes/en/banner-casting.php');
}
?>
</ul>
</div>
</div>
</div>
<div id="wall">
    <a href="/vip-models/all_vip_escorts/" title="VIP escorts from agency MissBliss">
        <!-- Теперь ссылка ведет на виртуальный файл, который рандомизирует PHP -->
        <img src="/social/agency/random_wall.avif" width="600" height="450" alt="VIP Escorts">
    </a>
</div>
<div id="body-wrap">
<div id="content" class="container clearfix">
<hr class=50>
<?php include_once (__ROOT__. '/includes/en/features.php'); ?>
</div>

</div>
 
<div id="footer">
<div id="footer-center" class="container">
<div class="footer-left">
<?php include_once (__ROOT__. '/includes/footer.php'); ?>
 <hr class=50>  <hr class=50>  <hr class=50>   <hr class=50>		 <hr class=50>  <hr class=50>	 <hr class=50>  <hr class=50>
</div>
</div>		 <hr class=50>  <hr class=50>	 <hr class=50>  <hr class=50>
<?php include_once (__ROOT__. '/includes/first-footer-bottom.php'); ?>

</div>
</body>
</html>

