<?php

function getCopyrightByLanguage() {
    // Получаем текущий URL
    $currentUrl = $_SERVER['REQUEST_URI'];

    // Проверяем, содержит ли URL /en/ в начале пути
    if (strpos($currentUrl, '/en/') === 0) {
        // Английская версия
        return '<a href="/en/about/">2003 - 2025 © The MissBliss Agency, Your Intimate Dream</a>';
    } else {
        // Русская версия (по умолчанию)
        return '<a href="about/">2003 - 2025 © Агентство &laquo;MissBliss&raquo;. Сокровенная Мечта</a>';
    }
}

// Использование:
$copyright = getCopyrightByLanguage();

echo '
<hr class="h40">
<div id="footer-bottom">
<hr class="h40">
<div id="footer-center-bottom" class="container">
<ul class="copyright">
<li>'.$copyright.'
</ul>
<hr class="h40"><hr class="h40"><hr class="h40">




<!--LiveInternet logo--><a href="https://www.liveinternet.ru/click"
target="_blank"><img src="https://counter.yadro.ru/logo?17.10"
title="LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня"
alt="" style="border:0" width="88" height="31"/></a><!--/LiveInternet-->


</div>
</div>
</div>

</div><!-- /p c -->
</div><!-- /p -->


<script src="/js/jquery.min.js" ></script>
<script src="/js/rs-plugin/jquery.themepunch.plugins.min.js" ></script>
<script src="/js/rs-plugin/jquery.themepunch.revolution.min.js" ></script>
<script src="/js/selectnav_x.min.js" ></script>
<script src="/js/jquery.jcarousel.pack.js" ></script>
<script src="/js/custom.js" ></script>
<script src="/js/menu.js" ></script>






<script>$(document).ready(function(){$("#back-top").hide();$(function(){$(window).scroll(function(){if($(this).scrollTop()>100){$(\'#back-top\').fadeIn();}else{$(\'#back-top\').fadeOut();}});$(\'#back-top a\').click(function(){$(\'body,html\').animate({scrollTop:0},800);return false;});});});</script>


<script>var tpj=jQuery;tpj.noConflict();tpj(document).ready(function(){if(tpj.fn.cssOriginal!=undefined)
tpj.fn.css=tpj.fn.cssOriginal;tpj(\'.fullwidthbanner\').revolution({delay:9000,startwidth:1280,startheight:500,onHoverStop:"on",navigationArrows:"verticalcentered",navigationStyle:"round",touchenabled:"on",navOffsetHorizontal:0,navOffsetVertical:20,stopAtSlide:-1,stopAfterLoops:-1,fullWidth:"on",shadow:0});});</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BX94Z4ZSFH"></script>
<script>
				var fired = false;

window.addEventListener(\'scroll\', () => {
    if (fired === false) {
        fired = true;

        setTimeout(() => {
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(\'js\', new Date());

  gtag(\'config\', \'G-BX94Z4ZSFH\');
									        }, 1000)
    }
});
</script>



<!--LiveInternet counter--><script>
new Image().src = "https://counter.yadro.ru/hit?r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,150))+
";"+Math.random();</script><!--/LiveInternet-->

';
?>