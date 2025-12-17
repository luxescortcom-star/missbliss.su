<?php

 define('__ROOT__', dirname(__FILE__));


$rates='class="current"';
$title='Цены на эскорт услуги, цены услуг по сопровождению, агентство МиссБлисс';
$css='/min/g=rates';
$script = '/min/g=js-price';
include_once (__ROOT__. '/includes/top-rates.php');
?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include_once (__ROOT__. '/includes/vip-head.php'); ?>
<?php include_once (__ROOT__. '/includes/styles-rates.php'); ?>

</head>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/en/menu2.php'; ?>
<div class="perspective_container">
<div id="header-bg"></div>
<div id="sub-header-bg"></div>
<div id="body-wrapper" class="wrapper">
<div id="header">
<!--noindex--><a href="#" rel="nofollow" id="logo"></a><!--/noindex-->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/menu.php'; ?>

</div>
<div id="content" class="container clearfix">
<nav id="page-title" >
<h1>Стоимость эскорт услуг.<span> Деньги - это ваши апплодисменты</span></h1>
</nav>

<div class="simpleTabs">
      <ul class="simpleTabsNavigation">
                 <?=$locale_rates ?>
                  
                 </ul>



<?php include_once (__ROOT__. '/includes/'. $localerates .''); ?>






</div>
<!-- /Tabs -->


    <hr class=50>

<?php include_once (__ROOT__. ''.$discr.''); ?>
<div class="tw-t">
   <hr class=50>  <hr class=50>  <hr class=50>

 <div class="accBut first">Как производить оплату?</div>
<div class="accCon"><p class="about"></p><h4>Способы оплаты:</h4><p></p><br><p class="rates-info">

<b>1. Наличные</b><br>

Принимаем купюры в следующих валютах:<br>
Российские рубли, швейцарские Франки, доллары США, Евро, британские Фунты.<br><br>

Оплата производится в начале встречи (правило «Плати и лети»).<br>
Деньги лучше положить в незапечатанный конверт и дать спутнице возможность проверить сумму.<br>
Рекомендация: Используйте крупные и новые купюры – это проявит ваше уважение к девушке.<br><br>
<b>2. Безналичный расчет</b><br>

Предоплата на банковскую карту (реквизиты предоставим по запросу).<br>
Возможен перевод через мобильный банк или другие банковские платежи.<br><br>
<b>3. Криптовалюты</b><br>

Принимаем:<br>

USDT (Tether), BUSD и другие стейблкоины.
Если хотите оплатить другой монетой – уточните у менеджера.<br><br>
<b>Важно!</b><br>

Все предоплаченные средства – это депозит, который сохраняется до завершения сопровождения..</p></div>
<div class="accBut first">Если вы заказываете в Москве или в Санкт-Петербурге</div>
<div class="accCon"><p class="about"> </p><h4>Как оформить заказ?</h4><p></p><br><p class="rates-info">

<b>Напишите письмо с указанием:</b><br>
Место встречи (где вы остановились или куда хотите пригласить девушку).<br>
Время и продолжительность встречи.<br><br>
<b>Согласование с моделями:</b><br>
Менеджер уточнит их доступность, и вам предложат на выбор тех, кто свободен в указанный период.<br><br>
<b>Условия заказа:</b><br>

Минимальное время заказа:<br>
Москва — 1,5 часа<br>
Санкт-Петербург — 1 час<br><br>
<b>Время на приезд девушки:</b><br>
30–80 минут (зависит от города и дорожной ситуации).<br><br>
<b>Оплата:</b><br>

В пределах города:<br>
Оплата при встрече (по факту).<br><br>
<b>В пригород:</b><br>
Постоянные клиенты — оплата при встрече.<br>
Новые клиенты — только после предоплаты на банковскую карту.<br><br>
<b>Дополнительно:</b><br>

Если девушка вам понравилась, вы можете отблагодарить ее:<br>

Подарками, цветами, чаевыми.</p><br>
</div>
<div class="accBut first">Если вы приглашаете девушку в другой город или в путешествие за границу
</div>
<div class="accCon"><p class="about"></p><h4>Стоимость поездки определяется индивидуально</h4><p></p> В зависимости от дистанции, вида транспорта, времени и т.д.<br> При заказе за границу минимальный заказ- от 2 х суток.<br>Предварительно оплачивается билет в обе стороны, деньги на карманные расходы в поездке($220 на каждые 6 часов поездки или перелетов), и 40% от полной суммы вознаграждения девушки.<br> Остальная часть суммы (60%) передается девушке при встрече с вами или переводится на банковский счет агентства в начале вашего свидания. <br>Все средства которые агентство получает в качестве предоплаты- это депозит до тех пор пока модель не исполнит всю свою работу.
<p></p></div></div>
<div class="one-third">
<hr class="h40"><hr class="h40"><hr class="h40">
<div class='gcw_main2142121501'><p>Калькулятор валют: ячейки изменяемые</p><div id='gcw_rates2142121501'></div><script src='https://freecurrencyrates.com/converter-widget?source=fcr&width=300&currs=USD,RUB,CHF,EUR,GBP&precision=2&language=ru&flags=1&currchangable=0&firstrowvalue=1&id=2142121501' rel="nofollow" charset='UTF-8'></script>
</div></div>
</div>

</div>
<hr class=50>  <hr class=50>  <hr class=50><hr class=50>  
<div id="footer">
<hr class=50>  <hr class=50>  <hr class=50>	
<div id="footer-center" class="container">
<div class="footer-left">
<?php include (__ROOT__. '/includes/footer.php'); ?>
</div>
</div><hr class=50>  <hr class=50>  <hr class=50><hr class=50> 
<?php include_once (__ROOT__. '/includes/footer-bottom-rates.php'); ?> 



</div></div></html>
