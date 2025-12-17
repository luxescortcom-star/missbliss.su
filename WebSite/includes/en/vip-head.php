<?php
// vip-head.php

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
		$alt_link = str_replace('/elite-models/', '/vip-models/', $current_url_path);
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
$alt_link = $hreflangData['alternate_link'];  // Относительная альтернативная ссылка
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
<meta property="og:site_name" content="The MissBliss Escorts Agency">
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
    xhr.open("GET","'.$css.'",false);
    xhr.send();
    var lazyStyle = document.createElement(\'style\');
    lazyStyle.innerHTML = xhr.responseText;
    document.head.appendChild(lazyStyle);

    xhr.open("GET",\'https://code.jquery.com/jquery-1.12.4.min.js?\',false);
	xhr.integrity = "sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=";
	xhr.crossorigin = "anonymous";
    xhr.send();
    var lazyStyle = document.createElement(\'script\');
    lazyStyle.innerHTML = xhr.responseText;
    document.head.appendChild(lazyStyle);
</script>
';
?>