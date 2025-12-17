<?php


require_once 'geo_domain_redirect.php'; 

// Автоматический редирект по геолокации
GeoDomainRedirect::redirectByGeo();

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
<meta name="theme-color" content="#050f35">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include_once (__ROOT__. '/includes/vip-head.php'); ?>
<?php include_once (__ROOT__. '/includes/styles-first-page.php'); ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": ["ProfessionalService", "EscortAgency"],
  "name": "Эскорт агентство МиссБлисс",
  "description": "VIP-сопровождение в Москве и Санкт-Петербурге с 2003 года",
  "url": "https://missbliss.su/",
  "foundingDate": "2003",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": ["Москва", "Санкт-Петербург"],
    "addressRegion": ["Московская область", "Ленинградская область"]
  },
  "serviceArea": {
    "@type": "AdministrativeArea",
    "name": ["Москва", "Санкт-Петербург", "Краснодар", "Екатеринбург"]
  },
  "telephone": "+7 921 900-03-18",
  "priceRange": "$300-$500",
  "image": "https://m-b.su/social/vip/vip@1x.jpg",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "120"
  }
}
</script>

</head>

<?php include_once (__ROOT__. '/includes/menu2.php'); ?>
<div class="perspective_container">
<div id="header-bg"></div>

<div id="body-wrapper" class="wrapper">
<div id="header">
<!--noindex--><a href="#" id="logo" rel="nofollow" ></a><!--/noindex-->

<?php include_once (__ROOT__. '/includes/menu.php'); ?>
</div>
</div>
<div id=slider>
<div class=fullwidthbanner-container>
<div class=fullwidthbanner>

<?php
include_once (__ROOT__. '/includes/vip_banner.php');


?>

</div>

</div>



</div>
 <div id=wall>
<a href="/vip-models/all_vip_escorts/" title="ВИП доступ к закрытой галерее"><img alt="Красивая девушка ппреградила путь сексуально ножкой" src="https://m-b.su/social/agency/vip-access.avif"
title="Доступ для наших дорогих и любимых ВИП клиентов" max-width="100%" width="526"
  max-height="fill-available"; height="300"></a>
</div>
<div id="body-wrap">
<div id="content" class="container clearfix">
<div id="features">
<?php include_once (__ROOT__. '/includes/vip_body.php'); ?>
</div>
</div>
</div>

</div>

</div>
<div id="footer">
<div id="footer-center" class="container">
<div class="footer-left">
<?php include_once (__ROOT__. '/includes/footer.php'); ?>
 <hr class="h40"><hr class="h40"><hr class="h40"> <hr class="h40"><hr class="h40"><hr class="h40">
</div>
</div>
	
 <hr class="h40"><hr class="h40"><hr class="h40"> <hr class="h40">
<?php include_once (__ROOT__. '/includes/first-footer-bottom.php'); ?>


</div>

</div>

</div>

</div><!-- /pc -->
</div><!-- /p -->

</html>

