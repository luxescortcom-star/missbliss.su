<?php

//head.php

// Подключаем гео-редирект ПЕРВЫМ делом с безопасными проверками
if (file_exists(__DIR__ . '/geo_domain_redirect.php')) {
    require_once __DIR__ . '/geo_domain_redirect.php';
    
    // Проверяем, что класс существует и метод доступен
    if (class_exists('GeoDomainRedirect') && method_exists('GeoDomainRedirect', 'redirectByGeo')) {
        try {
            GeoDomainRedirect::redirectByGeo();
        } catch (Exception $e) {
            // Логируем ошибку, но не прерываем выполнение
            error_log("Geo redirect error: " . $e->getMessage());
        }
    }
}

function generateHreflangData() {
    $current_url_path = $_SERVER['REQUEST_URI'];
    $domain = 'https://missbliss.ru';
    $current_url = $domain . $current_url_path;
    
    // Определяем текущий язык
    if (strpos($current_url_path, '/elite-models/') === 0) {
        $current_lang = 'en';  // Текущий язык - английский
        $alternate_lang = 'ru'; // Альтернативный язык - русский
        $alternate_link = $domain . str_replace('/elite-models/', '/vip-models/', $current_url_path);
    } elseif (strpos($current_url_path, '/vip-models/') === 0) {
        $current_lang = 'ru';  // Текущий язык - русский
        $alternate_lang = 'en'; // Альтернативный язык - английский
        $alternate_link = $domain . str_replace('/vip-models/', '/elite-models/', $current_url_path);
    } else {
        if (strpos($current_url_path, '/en/') === 0) {
            $current_lang = 'en';  // Текущий язык - английский
            $alternate_lang = 'ru'; // Альтернативный язык - русский
            $alternate_link = $domain . str_replace('/en/', '/', $current_url_path);
        } else {
            $current_lang = 'ru';  // Текущий язык - русский
            $alternate_lang = 'en'; // Альтернативный язык - английский
            $alternate_link = $domain . '/en' . $current_url_path;
        }
    }
    
    return [
        'current_lang' => $current_lang,      // Текущий язык для og:locale
        'alternate_lang' => $alternate_lang,  // Альтернативный язык для hreflang
        'alternate_link' => $alternate_link,  // Альтернативная ссылка
        'current_url' => $current_url         // Текущий полный URL
    ];
}

// Получаем данные
$hreflangData = generateHreflangData();
$current_lang = $hreflangData['current_lang'];      // Текущий язык
$alternate_lang = $hreflangData['alternate_lang'];  // Альтернативный язык
$alternate_link = $hreflangData['alternate_link'];  // Альтернативная ссылка
$current_url = $hreflangData['current_url'];        // Текущий URL

// Теперь можно использовать все переменные в head
echo '
<html lang="'.$current_lang.'">
<head prefix="og: http://ogp.me/ns#">
<meta name="theme-color" content="#050f35">
<meta name="robots" content="index,follow">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="alternate" hreflang="'.$alternate_lang.'" href="'.$alternate_link.'" />
<!--[if ie]><meta http-equiv=\'X-UA-Compatible\' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, viewport-fit=cover">
<title>'.$title.'</title>
<meta name="keywords" content="'.$keywords.'">
<meta name="description" property="og:description" content="'.$description.'">
<link rel="canonical" href="'.$current_url.'"/>
<meta property="og:url" content="'.$current_url.'">
<meta property="og:locale" content="'.$current_lang.'" />
<meta property="og:site_name" content="The MissBliss Premium Escort Agency">
<meta property="og:title" content="'.$title.'" />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://'.$slink.'/'.$picsFolio.'/'.$name.'@1x.'.$fxt.'" />
<meta property="og:image:width" content="450" />
<meta property="og:image" content="https://'.$slink.'/'.$picsFolio.'/'.$name.'@2x.'.$fxt.'" />
<meta property="og:image:width" content="1008" />
<meta  property="og:image" content="https://'.$slink.'/'.$picsFolio.'/'.$name.'@3x.'.$fxt.'" />
<meta property="og:image:width" content="1480" />
<meta property="og:image:secure_url" content="https://'.$slink.'/'.$picsFolio.'/'.$name.'@1x.'.$fxt.'" />
<meta name="twitter:card" content="summary_large_image" />

 <script>
    if (window.XMLHttpRequest) {
      xhr = new XMLHttpRequest();
    } else {
      xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
 

    xhr.open("GET",\'https://code.jquery.com/jquery-1.12.4.min.js?\',false);
	xhr.integrity = "sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=";
	xhr.crossorigin = "anonymous";
    xhr.send();
    var lazyStyle = document.createElement(\'script\');
    lazyStyle.innerHTML = xhr.responseText;
    document.head.appendChild(lazyStyle);
</script>


<script>jQuery.cookie=function(b,j,m){if(typeof j!="undefined"){m=m||{};if(j===null){j="";m.expires=-1}var e="";if(m.expires&&(typeof m.expires=="number"||m.expires.toUTCString)){var f;if(typeof m.expires=="number"){f=new Date();f.setTime(f.getTime()+(m.expires*24*60*60*1000))}else{f=m.expires}e="; expires="+f.toUTCString()}var l=m.path?"; path="+(m.path):"";var g=m.domain?"; domain="+(m.domain):"";var a=m.secure?"; secure":"";document.cookie=[b,"=",encodeURIComponent(j),e,l,g,a].join("")}else{var d=null;if(document.cookie&&document.cookie!=""){var k=document.cookie.split(";");for(var h=0;h<k.length;h++){var c=jQuery.trim(k[h]);if(c.substring(0,b.length+1)==(b+"=")){d=decodeURIComponent(c.substring(b.length+1));break}}}return d}};</script>
<!-- modal plugin -->
<script src="/jss/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
<style>
.arcticmodal-overlay,
.arcticmodal-container { position: fixed; left: 0; top: 0; right: 0; bottom: 0; z-index: 1000; }
.arcticmodal-container { overflow: auto; margin: 0; padding: 0; border: 0; border-collapse: collapse; }
*:first-child+html .arcticmodal-container { height: 100% }
.arcticmodal-container_i { height: 100%; margin: 0 auto; }
.arcticmodal-container_i2 { padding: 30px; margin: 0; border: 0; vertical-align: middle; }
.arcticmodal-error { padding: 20px; border-radius: 10px; background: #000; color: #fff; }
.arcticmodal-loading { width: 80px; height: 80px; border-radius: 10px; background: #000 url(loading.gif) no-repeat 50% 50%; }
/* modal */
#info_age_modal{max-width:500px;min-width:50%;background:#fff;padding:30px;border: 1rem solid red}.modal_age{display:none;}.modal_age_but{text-align:center;margin-top:15px;}.modal_age_text{text-align:center;}.modal_age_text span{text-transform:uppercase;font-size:22px;font-weight:700;color:red;margin-bottom:10px;display:inline-block;}.modal_but_no{display:inline-block;background:#eee;color:#000;font-size:20px;cursor:pointer;padding:8px 12px;}.modal_but_no:hover{background:red;}.modal_but_yes{display:inline-block;background:#eee;color:#000;font-size:20px;cursor:pointer;padding:8px 12px;}.modal_but_yes:hover{background:green;}.modal_title{text-align:center;color:#000;font-size:22px;margin-bottom:15px;}@media only screen and orientation portrait and (min-width 360px) and (max-width 896px) #info_age_modal{max-width:100%;background:#fff;padding:30px;}.modal_age_text span{font-size:16px;font-weight:500;}.modal_but_no{font-size:16px;cursor:pointer; margin: 0 5px 0 -10%}.modal_but_yes{font-size:16px;cursor:pointer;margin:0 -10% 0 5px}@media only screen and orientation portrait and (min-width 280px) and (max-width 359px) #info_age_modal{max-width:100%;background:#fff;padding:50px;}.modal_age_text span{font-size:16px;font-weight:500;}.modal_but_no{font-size:16px;cursor:pointer; margin: 0 5px 0 -10%}.modal_but_yes{font-size:16px;cursor:pointer;margin:0 -10% 0 5px}
	</style>
<script>
!function(e){addEventListener("DOMContentLoaded",function(){e.cookie("was")||e("#info_age_modal").arcticmodal({closeOnOverlayClick:!1,closeOnEsc:!1,openEffect:{type:"fade",speed:100},closeEffect:{type:"fade",speed:1500},overlay:{css:{backgroundColor:"#123",backgroundImage:"url(https://m-b.su/social/agency/vip.jpg)",backgroundRepeat:"repeat",backgroundPosition:"50% 0",opacity:1}}}),e(".modal_but_no").click(function(){return window.history.back(),!1}),e(".modal_but_yes").click(function(){return e.cookie("was",!0,{expires:5,path:"/"}),!1})})}(jQuery);
</script>
';


?>