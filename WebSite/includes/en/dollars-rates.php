<?php

function getCurrencySymbol($currencyCode) {
    $symbols = [
        'RUB' => '₽',      // Российский рубль
        'USD' => '$',      // Доллар США
        'EUR' => '€',      // Евро
        'GBP' => '£',      // Британский фунт
        'DKK' => 'kr.',    // Датская крона
        'INR' => '₹',      // Индийская рупия
        'IRR' => '﷼',      // Иранский риал
        'CAD' => 'C$',     // Канадский доллар
        'CNY' => '¥',      // Китайский юань
        'CHF' => 'CHF',    // Швейцарский франк
        // Можно добавить другие валюты по необходимости
    ];
    
    return $symbols[$currencyCode] ?? $currencyCode; // Возвращаем код, если символ не найден
}
  $symbol = getCurrencySymbol($currencyCode) ?? $symbol = '$';

echo '
<div class="simpleTabsContent">
<div class="pricing-table-second clearfix">
<div class=column>
<div class=table-title>
<h1 style="cursor: pointer; cursor: hand;"><a href="/en/attractive/">Attractive</a></h1>
</div>
<div class=header>
<h2>'.$symbol.'<span>'.$geoplugin->convert(300) .'</span>  up to 2 hrs</h2>
</div>
<ul>
<li><span>'. $geoplugin->convert(200) .' '.$symbol.' </span> The First Impression (60 min.)
<li><span>'. $geoplugin->convert(400) .' '.$symbol.'</span> A little more time (up to 3 hrs)
<li><span>'. $geoplugin->convert(500) .' '.$symbol.'</span> A date with dinner (up to 4 hrs)
<li><span>'. $geoplugin->convert(700) .' '.$symbol.'</span> Romantic evening (up to 6 hrs)
<li><span>'. $geoplugin->convert(1000) .' '.$symbol.'</span> Long sweet nigh(up to 12 hrs)
<li><span>'. $geoplugin->convert(1500) .' '.$symbol.'</span> Twenty-four hours of bliss
<li><span>'. $geoplugin->convert(1000) .' '.$symbol.'</span> *Every additional overnight*
<li><p>* from 5 nights or more for each night <b>'.$symbol.' '.$geoplugin->convert(700) .' </b> <br></p>

</ul>
<div class="footer">
<a href="/en/attractive/" class="btn black">Choose <span>a Attractive</span></a>
</div>
</div>
<div class="column last">
<div class=table-title>
<h1 style="cursor: pointer; cursor: hand;"><a href="/en/favorites/">Favorites</a></h1>
</div>
<div class=header>
<h2>'.$symbol.'<span>'.$geoplugin->convert(500) .'</span>  up to 2 hrs</h2>
</div>
<ul>
<li><span>'. $geoplugin->convert(300) .' '.$symbol.'</span> The First Impression (60 min.)
<li><span>'. $geoplugin->convert(700) .' '.$symbol.'</span> A little more time (up to 3 hrs)
<li><span>'. $geoplugin->convert(800) .' '.$symbol.'</span> A date with dinner (up to 4 hrs)
<li><span>'. $geoplugin->convert(1000) .' '.$symbol.'</span> Romantic evening (up to 6 hrs)
<li><span>'. $geoplugin->convert(1500) .' '.$symbol.'</span> Long sweet nigh(up to 12 hrs)
<li><span>'. $geoplugin->convert(2000) .' '.$symbol.'</span> Twenty-four hours of bliss
<li><span>'. $geoplugin->convert(1500) .' '.$symbol.'</span> *Every additional overnight*
<li><p>* from 5 nights or more for each night <b>'.$symbol.' '. $geoplugin->convert(1000) .' </b></p>

</ul>
<div class="footer">
<a hhref="/en/favorites/" class="btn black" >Choose <span>a Favorite</span></a>
</div>
</div>
</div>
</div>';
?>