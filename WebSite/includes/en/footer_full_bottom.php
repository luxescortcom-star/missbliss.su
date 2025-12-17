<?php

echo '<div id="footer-bottom">
<div id="footer-center-bottom" class="container">
<ul class="copyright">
<li><a href="/en/about/">2003 - 2024 © The MissBliss Agency ' . $city3 . ' - Precious dream</a>
</ul>
<hr class="h40"><hr class="h40"><hr class="h40">

<!-- Top100 (Kraken) Widget -->
<span id="top100_widget"></span>
<!-- END Top100 (Kraken) Widget -->






<!--LiveInternet logo--><!--noindex--><a el="nofollow noopener" href="https://www.liveinternet.ru/click"
target="_blank"><img src="https://counter.yadro.ru/logo?17.6"
title="LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня"
alt="" style="border:0" width="88" height="31"/></a><!--/noindex--><!--/LiveInternet-->

<!-- Rating Mail.ru logo -->
<!--noindex--><a el="nofollow noopener" href="https://top.mail.ru/jump?from=1193665" target="_blank">
<img '. $lazy .' '. $data .'src="https://top-fwz1.mail.ru/counter?id=1193665;t=479;l=1" style="border:0;" height="31" width="88" alt="Top.Mail.Ru" /></a><!--/noindex-->
<!-- //Rating Mail.ru logo -->

</div>
</div>
</div>

</div><!-- /p c -->
</div><!-- /p -->



<script>
    if (window.XMLHttpRequest) {
      xhr = new XMLHttpRequest();    
    } else {
      xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhr.open("GET",\'/min/g=js_pic\',false);
    xhr.send();
    var lazyStyle = document.createElement(\'script\');
    lazyStyle.innerHTML = xhr.responseText;
    document.head.appendChild(lazyStyle);

</script>



<script>$(document).ready(function(){$("#back-top").hide();$(function(){$(window).scroll(function(){if($(this).scrollTop()>100){$(\'#back-top\').fadeIn();}else{$(\'#back-top\').fadeOut();}});$(\'#back-top a\').click(function(){$(\'body,html\').animate({scrollTop:0},800);return false;});});});</script>

<script>$(document).ready(function($){$("a[class^=\'pP\']").prettyPhoto();$(".portfolio:first a[class^=\'pP\']").prettyPhoto({animation_speed:\'normal\',theme:\'pp_default\',slideshow:4000,opacity:0.60,deeplinking:false,overlay_gallery:false,autoplay_slideshow:false});});</script>

<!-- Top100 (Kraken) Counter -->
<script>
    document.addEventListener(\'DOMContentLoaded\', () => {
	setTimeout(function(){
    (function (w, d, c) {
    (w[c] = w[c] || []).push(function() {
        var options = {
            project: 7488644,
            element: \'top100_widget\',
        };
        try {
            w.top100Counter = new top100(options);
        } catch(e) { }
    });
    var n = d.getElementsByTagName("script")[0],
    s = d.createElement("script"),
    f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = false;
    s.src =
    (d.location.protocol == "https:" ? "https:" : "http:") +
    "//st.top100.ru/top100/top100.js";


    if (w.opera == "[object Opera]") {
    d.addEventListener("DOMContentLoaded", f, false);
} else { f(); }
})(window, document, "_top100q");
        	}, 3000); // время указано в мс = 0,001 секунды
});
</script>
<noscript>
  <img '. $lazy .' '. $data .'src="//counter.rambler.ru/top100.cnt?pid=7488644" alt="Топ-100" />
</noscript>
<!-- END Top100 (Kraken) Counter -->

<!-- Rating Mail.ru counter -->
<script type="text/javascript">
    document.addEventListener(\'DOMContentLoaded\', () => {
	setTimeout(function(){
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "1193665", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = "https://top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
        	}, 3000); // время указано в мс = 0,001 секунды, изменить по вкусу
});
</script>
<noscript><div>
<img '. $lazy .' '. $data .'src="https://top-fwz1.mail.ru/counter?id=1193665;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
</div></noscript>
<!-- //Rating Mail.ru counter -->

<!--LiveInternet counter--><script>
       document.addEventListener(\'DOMContentLoaded\', () => {
	setTimeout(function(){
new Image().src = "https://counter.yadro.ru/hit?r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,150))+
";"+Math.random();
        	}, 3500); // время указано в мс = 0,001 секунды, изменить по вкусу
});</script><!--/LiveInternet-->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
		var fired = false;
 
window.addEventListener(\'scroll\', () => {
    if (fired === false) {
        fired = true;
        
        setTimeout(() => {
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(92808788, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
			        }, 2000)
    }
});
</script>
<noscript><div><img '. $lazy .' '. $data .'src="https://mc.yandex.ru/watch/92808788" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->';
?>