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

echo '<hr class="h40">
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


<script src="/js/selectnav.min.js" ></script>
<script src="/js/jquery-1.6.2.min.js" ></script>
<script src="/js/jquery.quicksand2.js" ></script>
<script src="/js/jquery.easing.1.3.js" ></script>
<script src="/js/script.js" ></script>
<script src="/js/menu.js" ></script>
<script src="/js/lazysizes.min.js" ></script>
<script src="/js/jquery.prettyPhoto.js" ></script>




<script>$(document).ready(function(){$("a[class^=\'pP\']").prettyPhoto();$(".portfolio:first a[class^=\'pP\']").prettyPhoto({animation_speed:\'normal\',theme:\'dark_rounded\',slideshow:4000,opacity:0.98,deeplinking:false,overlay_gallery:true,autoplay_slideshow:false});});</script>




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