<?php 


$name='vip';
$picsFolio='vip';


$en_title='Contact details and methods of communication escort agency MissBliss';
$title='Контактные данные и способы связи эскорт агентство МиссБлисс';
$description = 'Наша форма связи позволит вам с нами быстро связаться и получить ответ. Также у нас есть ссылка на наш приватный мессенджер';
$keywords = 'missbliss контакт, эскорт агентство контакт, мисс блисс контакт,агентство мисс блисс сайт';
$canonical = 'https://missbliss.ru/contact/';
$fxt = 'jpg';

define('__ROOT__', dirname(__FILE__));
include_once (__ROOT__. '/includes/top-contact.php');


?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
include_once (__ROOT__. '/includes/vip-head.php'); ?>
<?php include_once (__ROOT__. '/includes/styles-contact.php'); ?>




</head>
<?php include_once (__ROOT__. '/includes/menu2.php'); ?>

<div class="perspective_container">
<div id="header-bg"></div>
<div id="sub-header-bg"></div>
<div id="body-wrapper" class="wrapper">
<div id="header">
<!--noindex--><a href="#" rel="nofollow" id="logo"></a><!--/noindex-->

<?php include_once (__ROOT__. '/includes/menu.php'); ?>

</div>
<div id="content" class="container clearfix">
<nav id="page-title">
<h1>Контакты.<span> Эскорт Агентство</span>  МиссБлисс.<span> На связи!</span></h1>
</nav>
</div>
</div>
<div id=contact-map>
<div id=contact-info>
<div class=one-fourth>
<div id=contact-details>
<h4>Наши контакты:</h4>
	<p> 24/7<br>ждем ваших сообщений<br>
</p>
<ul>
<li><a href="https://t.me/<?=$telegram ?>?text=Привет! Я нашел ваш контакт здесь ->  <?=$url ?>" target="_blank" class="telegramim_button telegramim_shadow telegramim_pulse" style="font-size:14px;width:110px;background:#eeeeee;box-shadow:1px 1px 3px #eeeeee;color:#002;border-radius:2px;" title="Мы заботимся о вашей конфиденциальностиб в телеграмм вы сможете легко удалить все следы ваших подвигов."><i></i> Telegram</a></li>
<li><br><!--noindex--><a href="mailto:office@lux-escort.com?subject=<?=$url ?>" class="telegramim_button telegramim_shadow " style="font-size:14px;width:110px;background:#eeeeee;box-shadow:1px 1px 3px #eeeeee;color:#002;border-radius:2px;" title="Отправить письмо на нашу почту, конфиденциально. Наша почта находится под защитой от несанкционированного взлома.">Отправить@email</a><!--/noindex-->
</li>
</ul>
<p></p>
</div>
</div>
<div class="three-fourth last">
<div id=contact-form>
<h4>Заказать сопровождение:
<br>
<div id=message></div>
<form method="post" action="/directions/mail_sql/" name="contactform" id="contactform" >
<input name=name id=name size=30 onfocus="if(this.value == 'Ваше Имя') { this.value=''; }" onblur="if(this.value == '') { this.value='Ваше Имя'; }" value="Ваше Имя">
<input name=email id=email size=30 onfocus="if(this.value == 'E-mail') { this.value=''; }" onblur="if(this.value == '') { this.value='E-mail'; }" value=E-mail>
<input id="phone" type="tel" placeholder="Номер телефона" size="30" name="phone" value="" class="last"><input id="intlTelInputHidden" type="hidden" name="phone-full">
<span id="valid-msg" class="hide">✓ Корректный номер</span>
<span id="error-msg" class="hide">Некорректный номер</span>
<textarea name="comments" cols="40" rows="3" id="comments" onfocus="if(this.value == 'Сообщение') { this.value=''; }" onblur="if(this.value == '') { this.value='Сообщение'; }" value="Сообщение">Сообщение</textarea>
<input type="text" id="website" name="website"/>
<input type=submit class="btn-image" id=submit value=Отправить title="Отправить сообщение, конфиденциально. Наша почта защищена от взлома и спама. Ваши данные не передаются никому."/>

</form>

 </div>

</div>

</div>


</div>
<div id="footer">
<div id="footer-center" class="container">
<div class="footer-left">	
<?php include_once (__ROOT__. '/includes/footer.php'); ?>

<div class="fee">
<!--noindex--><a href="#x" class="overlay" rel="nofollow" id="spam"></a><!--/noindex-->
   <div class="popup">
   <div id="contact-form">
     <h3>Правила обработки почты</h3>
<p>В связи с большим потоком спама мы были вынуждены запретить вставку ссылок в форму обратной связи. <br><br><i class="fas fa-exclamation-triangle"></i> Также, мы не перезваниваем на номера<br><br><i class="fas fa-exclamation-triangle"></i> Нам не нужны никакие клиентские базы<br><br><i class="fas fa-exclamation-triangle"></i> Мы не покупаем фальшивые деньги<br><br><i class="fas fa-exclamation-triangle"></i> И мы не нуждаемся в спам-рассылках.<br><br><br><i class="fas fa-fingerprint"></i> Если вы не робот, если вы живой человек и хотите выслать ссылку на анкету интересующей вас девушки - воспользуйтесь напрямую мессенджером<br> <br><a href="https://t.me/TheMissBlissAgency" target="_blank" class="telegramim_button telegramim_shadow telegramim_pulse" style="font-size:14px;width:110px;background:#eeeeee;box-shadow:1px 1px 3px #eeeeee;color:#666666;border-radius:2px;" title="Мы заботимся о вашей конфиденциальности"><i></i> Telegram</a> <br><br>или заполните форму обратной связи и если вам удобно, мы вам перезвоним на тот номер, который вы укажете в сообщении. Не бойтесь оставлять свои контактные данные. Мы заботимся о вашей конциденциальности. </p>
<br><br></div>
    <!--noindex--><a class="close" title="сlose" rel="nofollow" href="#close"></a><!--/noindex-->
    </div>
</div>
<div class="privacy">
<!--noindex--><a href="#x" class="overlay" rel="nofollow" id="spam"></a><!--/noindex-->
   <div class="popup">
   <div id="contact-form">
     <h3>Правила обработки почты</h3>
<p>В связи с большим потоком спама мы были вынуждены запретить вставку ссылок в форму обратной связи. <br><br><i class="fas fa-exclamation-triangle"></i> Также, мы не перезваниваем на номера<br><br><i class="fas fa-exclamation-triangle"></i> Нам не нужны никакие клиентские базы<br><br><i class="fas fa-exclamation-triangle"></i> Мы не покупаем фальшивые деньги<br><br><i class="fas fa-exclamation-triangle"></i> И мы не нуждаемся в спам-рассылках.<br><br><br><i class="fas fa-fingerprint"></i> Если вы не робот, если вы живой человек и хотите выслать ссылку на анкету интересующей вас девушки - воспользуйтесь напрямую мессенджером<br> <br><a href="https://t.me/TheMissBlissAgency" target="_blank" class="telegramim_button telegramim_shadow telegramim_pulse" style="font-size:14px;width:110px;background:#eeeeee;box-shadow:1px 1px 3px #eeeeee;color:#666666;border-radius:2px;" title="Мы заботимся о вашей конфиденциальности"><i></i> Telegram</a> <br><br>или заполните форму обратной связи и если вам удобно, мы вам перезвоним на тот номер, который вы укажете в сообщении. Не бойтесь оставлять свои контактные данные. Мы заботимся о вашей конциденциальности. </p>
<br><br></div>
    <!--noindex--><a class="close" title="сlose" rel="nofollow" href="#close"></a><!--/noindex-->
    </div>
</div>	
<div class=mail>
<!--noindex--><a href="#x" class="overlay" rel="nofollow" id="mail"></a><!--/noindex-->
   <div class="popup">
   <div id="contact-form">
     <h3>Что важно указать в письме?</h3>
<p>Если вы хотите пригласить девушку, то напишите: <br><br> 1. Когда, в какой день и в каком часу вы хотели бы встретиться с девушкой?<br><br> 2. Напишите где, по какому адресу или в каком месте будет проходить свидание? <br>Или возможно вы хотите, чтобы мы вам забронировали отель?<br><br> 3. Напишите имя или имена понравившихся вам красавиц. <br><br> Подробная информация поможет нам дать быстрый ответ с подробной информацией о свободных моделях.<br><br> Для нас важно понимать и время и место. Не все девушки могут быть доступны в определенное время и не все девушки смогут приехать в определенное место. Если вы все подробно напишите, то сможете получить быстрый исчерпывающий ответ.</p></div>
    <!--noindex--><a class="close" title="сlose" rel="nofollow" href="#close"></a><!--/noindex-->
    </div>
</div>
</div>
</div> <hr class="h40"><hr class="h40"><hr class="h40"><hr class="h40"><hr class="h40"><hr class="h40">

<?php include_once (__ROOT__. '/includes/footer-bottom-contact.php'); ?>







<script type="text/javascript">(function() {var script=document.createElement("script");script.type="text/javascript";script.async =true;script.src="https://telegram.im/widget-button/index.php?id=@TheMissBlissAgency";document.getElementsByTagName("head")[0].appendChild(script);})();</script>

 <script>

     $("#phone").intlTelInput({
  defaultCountry: "auto",
  geoIpLookup: function(callback) {
    $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
      var countryCode=(resp && resp.country) ? resp.country : "";
      callback(countryCode);
    });
  },
  utilsScript: "/forbidden/build/js/utils.js"
});</script>

<script>
 $("#phone").intlTelInput({
  utilsScript: "/forbidden/build/js/utils.js"
});

$("form").submit(function() {
  $("#intlTelInputHidden").val($("#phone").intlTelInput("getNumber"));
});
  </script>

<script>
var telInput=$("#phone"),
  errorMsg=$("#error-msg"),
  validMsg=$("#valid-msg");


telInput.intlTelInput({
utilsScript: "/forbidden/build/js/utils.js"
});


telInput.blur(function() {
  if ($.trim(telInput.val())) {
    if (telInput.intlTelInput("isValidNumber")) {
      validMsg.removeClass("hide");
    } else {
      telInput.addClass("error");
      errorMsg.removeClass("hide");
      validMsg.addClass("hide");
    }
  }
});

telInput.keydown(function() {
  telInput.removeClass("error");
  errorMsg.addClass("hide");
  validMsg.addClass("hide");
});

 </script>
	







</html>