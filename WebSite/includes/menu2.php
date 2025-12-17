<?php
function generateMobileMenu($isEnglish = false, $currentUri = '') {
    // Определяем базовые пути
    $mainBasePath = $isEnglish ? 'en/' : '';
    $modelsBasePath = $isEnglish ? 'elite-models/' : 'vip-models/';
    
    // Генерация ссылки для переключения языка
    if ($isEnglish) {
        $en_link = str_replace('/elite-models/', '/vip-models/', $currentUri);
        $en_link = str_replace('/en/', '/', $en_link);
        $language_text = 'По Русски';
        $language_title = 'Switch to Russian';
    } else {
        if (strpos($currentUri, '/vip-models/') === 0) {
            $en_link = str_replace('/vip-models/', '/elite-models/', $currentUri);
        } else {
            $en_link = '/en' . $currentUri;
        }
        $language_text = 'English';
        $language_title = 'Switch to English';
    }

    if ($isEnglish) {
        // АНГЛИЙСКАЯ ВЕРСИЯ
        echo '<div class="all-elements">
        <div id="perspective" class="perspective effect-airbnb">
        <div class="outer-nav">
        <div class="inner-nav">
        <div class="nav-item"> <a href="#" class="deploy-nav-sub-item active-item">The MissBliss</a>
            <div class="nav-sub-item">
            <a href="/en/">First Page</a>
            <a href="/en/about/">About</a>
        </div>
        </div>
        <div class="nav-item">
            <a href="/elite-models/new-york/favorites/natasha/">New-York, USA</a>
        </div>
        <div class="nav-item">
            <a href="/elite-models/moscow/">Moscow</a>
        </div>
        <div class="nav-item">
            <a href="/elite-models/saint-petersburg/">Saint-Petesburg</a>
        </div>
        <div class="nav-item">
            <a href="/elite-models/krasnodar/">Krasnodar</a>
        </div>
        <div class="nav-item">
            <a href="/elite-models/ekaterinburg/">Ekaterinburg</a>
        </div>
        <div class="nav-item">
            <!--noindex--><a href="#" rel="nofollow" class="deploy-nav-sub-item">Casting</a><!--/noindex-->
            <div class="nav-sub-item">
            <a href="/en/casting/">USA</a>
            <a href="/en/casting/">Europe</a>
            <a href="/en/occupazione/">Italy</a>
            <a href="/en/casting/">Other Countries</a>
        </div>
        </div>
        <div class="nav-item">
        <a href="/en/contact/">Contact</a>
        </div>
        <div class="nav-item">
        <a href="'.$en_link.'" title="'.$language_title.'">'.$language_text.'</a>
        </div>
        <div class="nav-item">
        <!--noindex--><a id="closeMenu" rel="nofollow" href="#">Close</a><!--/noindex-->
        </div>
        </div>
        </div>';
    } else {
        // РУССКАЯ ВЕРСИЯ
        echo '<div class="all-elements">
        <div id="perspective" class="perspective effect-airbnb">
        <div class="outer-nav">
        <div class="inner-nav">
        <div class="nav-item"> <a href="#" class="deploy-nav-sub-item active-item">МиссБлисс</a>
            <div class="nav-sub-item">
            <a href="/about/">Услуги</a>
            <a href="/rates/">Цены</a>
        </div>
        </div>
        <div class="nav-item">
            <a href="/vip-models/new-york/favorites/natasha/" class="active-item">Нью-Йорк, США</a>
        </div>
        <div class="nav-item">
            <a href="/vip-models/moscow/" class="active-item">Москва</a>
        </div>
        <div class="nav-item">
            <a href="/vip-models/saint-petersburg/" class="active-item">Санкт-Петербург</a>
        </div>
        <div class="nav-item">
            <a href="/vip-models/krasnodar/" class="active-item">Краснодар</a>
        </div>
        <div class="nav-item">
            <a href="/vip-models/ekaterinburg/" class="active-item">Екатеринбург</a>
        </div>
        <div class="nav-item">
            <!--noindex--><a href="#" rel="nofollow" class="deploy-nav-sub-item">Кастинг</a>
            <div class="nav-sub-item">
            <!--noindex--><a>Приглашаем девушек <br>проживающих<br> в следующих городах</a><!--/noindex-->
            <a href="/casting/">Москва</a>
            <a href="/casting/">Санкт-Петербург</a>
            <a href="/casting/">Другие регионы России</a>
        </div>
        </div>
        <div class="nav-item">
            <a href="/contact/">Контакт</a>
        </div>
        <div class="nav-item">
        <a href="'.$en_link.'" title="'.$language_title.'">'.$language_text.'</a>
        </div>
        <div class="nav-item">
        <!--noindex--><a id="closeMenu" href="#" rel="nofollow">Закрыть</a><!--/noindex-->
        </div>
        </div>
        </div>';
    }
}

// Использование
$currentUri = $_SERVER['REQUEST_URI'];
$englishSections = ['/en/', '/elite-models/'];
$isEnglish = false;
foreach ($englishSections as $section) {
    if (strpos($currentUri, $section) === 0) {
        $isEnglish = true;
        break;
    }
}

generateMobileMenu($isEnglish, $currentUri);
?>