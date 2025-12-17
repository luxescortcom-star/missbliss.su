<?php 

require_once __DIR__ . '/../geo_functions.php';



$name='vip';
$picsFolio='vip';


$en_title='Contact details and methods of communication escort agency MissBliss';
$title='Работа для девушек в эскорте – свободный график, высокий доход | Кастинг в агентстве МиссБлисс';
$description = 'Эскорт-агентство «МиссБлисс» приглашает девушек на работу с гибким графиком. Только выезды, без офиса – вы свободны и зарабатываете до 50 000 ₽ за встречу. Профессиональные фотосессии, безопасность и VIP-клиенты. Оставьте заявку на кастинг!';
$keywords = 'работа для девушек в эскорте, кастинг в эскорт-агентство, свободный график работы, высокий доход для моделей, вакансии для студенток, сопровождение на мероприятиях, работа без офиса';

$fxt = 'jpg';

define('__ROOT__', dirname(dirname(__FILE__)));

include_once (__ROOT__. '/includes/top-casting.php');
?>
<!DOCTYPE html>
<link rel="alternate" hreflang="it" href="https://missbliss.su/en/occupazione/" />
<link rel="alternate" hreflang="x-default" href="https://missbliss.su/casting/"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include_once (__ROOT__. '/includes/vip-head.php'); ?>
<?php include_once (__ROOT__. '/includes/styles-casting.php'); ?>



</head>
<?php include_once (__ROOT__. '/includes/en/menu2.php'); ?>
<div class="perspective_container">
<div id="header-bg"></div>
<div id="sub-header-bg"></div>
<div id="body-wrapper" class="wrapper">
<div id="header">
<!--noindex--><a href="#" rel="nofollow" id="logo"></a><!--/noindex-->

<?php include_once (__ROOT__. '/includes/menu.php'); ?>

</div>
<div id="content" class="container clearfix">
<p id="back-top" style="display: block;">
<a href="#top"><span></span></a>
</p>
<nav id="page-title" >
<h1>We hire a new Models <span>to The MissBliss Escort Agency </span> </h1>
</nav>
<h2 class="about">We invite beautiful girls. <br>You’ll be able to earn with us in any place and in any country.</h2>
	<hr class="h50">
           <video  controls="controls"  preload=none;  poster="https://<?=$slink ?>/casting.jpg">
<source src="https://<?=$slink ?>/employment.webm"   type="video/webm" />
<source src="https://<?=$slink ?>/employment.mp4"   type="video/mp4" /></video>
<hr class="h50">
<div class="one-half">
<h4><a href="#" rel="nofollow"><i class="far fa-check-circle"></i> Our offer</a></h4>
<p class="about">
We offer you good clients, high salary, support and security.<br> Why the escort agency is the best solution if you decided to do it? <br>Because we are your reliable assistant, agent and defender. <br>We will solve all the issues of advertising, a filtering of calls, a negotiating with clients, the issues of payment, the order of tickets and booking hotels.<br> Wherever you are, if you want to have a trusted intermediary for the implementation of your services, so we are always happy to offer you our agency. </p>
 <hr class="h40"><hr class="h40"><hr class="h40">
<h4><a href="#" rel="nofollow"><i class="fas fa-check-circle"></i> What do we expect?</a></h4>
<p class="about">Are you a happy person? Are you a beautiful girl or a handsome guy? Are you free inside and full of positive energy? Are you well educated person and constantly develop yourself? Do you lead a healthy lifestyle? Are you ready to become a member of the team and create new values together? Do you need a responsible agent and assistant in the implementation of your services? Are you ready to follow the rules and regulations of our agency?<br>
If it’s all about you, please fill out the form below and write your information and telephone number, we will call you back.</p>
</div>
    <div class="one-third">

 <h2>FAQ</h2>
    <div class="accBut first">The main question: How much do girls earn?</div>
<div class="accCon"><p>Our current prices are indicated on the page: </p><hr class="h40"><a href="/en/rates/" title="The MissBliss Agency Rates" ><i class="fas fa-dollar-sign"></i> Our Rates</a><hr class="h40">You will receive from 50% to 80% of the amount paid by the client.<br>At first we look, do you meet our prices or not? If you correspond, we will recruit you<br>Also, the price may be higher if we see in you a unique rare and very beautiful girl. In this case, you can claim a more high price.</div>
<div class="accBut">What cities and countries can I work in?</div>
<div class="accCon"><p>Our residence is located in Moscow and St. Petersburg, Russia. But we can provide you with advertising and placement using our website in any country and in any city. We can work remotely.</p></div>
<div class="accBut">What do you need to get started?</div>
<div class="accCon"><p>In St. Petersburg and Moscow - we ourselves make the girls photographs for advertising for free.<br> <br>If you are located in another country, then you need to take care of the photo shoot and then provide us with high-resolution photos. <br><br>We will also conduct an interview.<br> We will also need your personal data (age, height, weight, etc.).<br> After we will post your profile on our website.<br> We will add you to our group and we will provide you clients for escort.</p></div>
<div class="accBut">How safe is it?</div>
<div class="accCon"><p class="about"></p><p>Our agency has existed since 2003.<br><br> We have extensive experience and this allows us to provide a high level of security.<br><br> Ensuring your safety is one of the main services of the agency!<br><br> Our customer service principles help us create a safe working environment for you.</p>
</div>




</div>

 <hr class="h40"><hr class="h40">
<div class="three-fourth">
<div id=contact-form>
<h4>Please, send Youre a brief CV.</h4><br>
<div id="message"></div>
<form method=post action="/directions/en/job/" name="contactform" id="contactform">
<input name=name id=name size=30 onfocus="if(this.value == 'Youre Name') { this.value=''; }" onblur="if(this.value == '') { this.value='Youre Name'; }" value="Youre Name">
<input name=email id=email size=30 onfocus="if(this.value == 'E-mail') { this.value=''; }" onblur="if(this.value == '') { this.value='E-mail'; }" value=E-mail>
<input id="phone" type="tel" placeholder="Phone" size="30" name="Phone" value="" class="last"><input id="intlTelInputHidden" type="hidden" name="phone-full">
<span id="valid-msg" class="hide">✓ Correct</span>
<span id="error-msg" class="hide">Incorrect phone number</span>
<textarea name=comments cols=40 rows=3 id=comments onfocus="if(this.value == 'Your brief CV') { this.value=''; }" onblur="if(this.value == '') { this.value='Your brief CV'; }" value="Your brief CV">Your brief CV</textarea>

<input  type="hidden"  id="website" name="website"/>	
<input type=submit class="btn-image" id=submit value=Send>

</form>

</div>
<hr class="h40"><hr class="h40"><hr class="h40">
<h2><a href=#Our_advantages><i class="far fa-star"></i> Our advantages </a></h2>

 <p><i class="fas fa-history"></i> You can work with us at any convenient time, working with our agency you are completely free, you live your life, you can even combine with studies or day work. <br><br><i class="fas fa-comment-dollar"></i> We will only bother you if the client is interested in you. If you are free, you are going on a date; if not, the client chooses a different model for himself or is waiting for you. <br><br><i class="fas fa-chess-queen"></i> You will not have to go to work every day, live in apartments or sit in hotels. You do not need to sit in chat rooms constantly sending your photos and videos to muddy recipients. There is no need to spoil the skin of the hands by rubbing kilograms of gels, washing the visitors of massage parlors. You are free and work whenever you want. With us you will always be beautiful and rested.
	<br><br><i class="fas fa-chart-pie"></i> It is important for us that you make good money. Therefore, working with us you can receive up to 80% of the order amount. These are the largest payouts among all escort agencies.<br><br><i class="fas fa-shield-alt"></i> We make sure that you work safely, so that only wealthy, healthy, well-educated people become your customers.<br><br><i class="fas fa-cogs"></i> Our site is able to protect your privacy.<br> At your request, we can hide your profile for visitors from a specific city<br> or from a specific country. <br><br><i class="far fa-grin-stars"></i>  We will take care of your advertising ourselves, we will make you a photo shoot for advertising for free (in Moscow and St. Petersburg). We will negotiate, discuss all the details with the client. All that is required of you is a desire to work and a good mood. </p>
 <hr class="h40"><hr class="h40"><hr class="h40"> <hr class="h40"><hr class="h40"><hr class="h40">


</div>
</div>
</div>
<div id="footer">
<div id="footer-center" class="container">
<div class="footer-left">
<?php include_once (__ROOT__. '/includes/footer.php'); ?>

</div>
<div class="spam">
<!--noindex--><a href="#x" class="overlay" rel="nofollow" id="spam"></a><!--/noindex-->
   <div class="popup">
   <div id="contact-form">
     <h3>Правила обработки почты</h3>
<p>В связи с большим потоком спама мы были вынуждены запретить вставку ссылок в форму обратной связи. <br><i class="fas fa-exclamation-triangle"></i> Также, мы не перезваниваем на номера<br><br><i class="fas fa-fingerprint"></i> Если вы не робот, если вы живой человек и хотите связаться с нами по работе - воспользуйтесь напрямую мессенджером<br> <br><a href="https://t.me/TheMissBlissAgency" target="_blank" class="telegramim_button telegramim_shadow telegramim_pulse" style="font-size:14px;width:110px;background:#eeeeee;box-shadow:1px 1px 3px #eeeeee;color:#666666;border-radius:2px;" title="Мы заботимся о вашей конфиденциальности"><i></i> Telegram</a> <br><br>или заполните форму обратной связи и если вам удобно, мы свяжемся с вами по E-mail. Мы заботимся о вашей конфиденциальности. Ваши данные и переписка никуда не передаются и по вашей просьбе мы все удалим. </p>
<br><br></div>
    <!--noindex--><a class="close" title="сlose" rel="nofollow" href="#close"></a><!--/noindex-->
    </div>
</div>
<div class=mail>
<a href="#x" class="overlay" id="mail"></a>
   <div class="popup">
   <div class="pricing-table-second clearfix">
     <h3 style="font-size:2em;margin: 50px;">What to write??</h3>
<p style="font-size:1.5em; line-height: 25px; letter-spasing: 3px;margin: 5px 30px;" >
1. Your age, height, and weight.<br><br>

2. How can we contact you?<br>
	What time works best for a call<br> or message?<br><br>

3. Which city are you currently in,<br> and where would you like to work?<br><br>

4. If you have any questions,<br> feel free to include them—we’ll reply with detailed answers.<br><br>Best! 🤗</p></div>
    <!--noindex--><a class="close" title="сlose" rel="nofollow" href="#close"></a><!--/noindex-->
    </div>
</div>
</div>
<?php include_once (__ROOT__. '/includes/footer-bottom-contact.php'); ?>
</div>
</div>

    <!-- /p c -->

<!-- /p -->


<script>$(document).ready(function() {$('.accBut').click(function() {$('.accBut').removeClass('on'); $('.accCon').slideUp('normal');if($(this).next().is(':hidden') == true) {$(this).addClass('on'); $(this).next().slideDown('normal');}}); $('.accBut').mouseover(function() {$(this).addClass('over');}).mouseout(function() {$(this).removeClass('over');}); $('.accCon').hide();});</script>

<script>$(document).ready(function(){$("#back-top").hide();$(function(){$(window).scroll(function(){if($(this).scrollTop()>100){$('#back-top').fadeIn();}else{$('#back-top').fadeOut();}});$('#back-top a').click(function(){$('body,html').animate({scrollTop:0},800);return false;});});});</script>

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