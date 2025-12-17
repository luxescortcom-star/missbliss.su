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
    
    return $symbols[$currencyCode] ?? $currencyCode ; // Возвращаем код, если символ не найден
}

  $symbol = getCurrencySymbol($currencyCode) ?? $symbol = '$';

echo '
<div class="simpleTabsContent">
<div class="pricing-table-second clearfix">
<div class=column>
<div class=table-title>
<h1 style="cursor: pointer; cursor: hand;"><a href="/attractive/">Фотомодели</a></h1>
</div>
<div class=header>
<h2>'.$symbol.'<span>'.$geoplugin->convert(300) .' </span>  Свидание 2 ч.</h2>
</div>
<ul>
<li><span>'.$geoplugin->convert(200) .' '.$symbol.'  </span> Сладкое мгновение (60 мин.)
<li><span>'.$geoplugin->convert(400) .' '.$symbol.'  </span> Третье искушение (3ч.)
<li><span>'.$geoplugin->convert(500) .' '.$symbol.'  </span> Свидание с ужином (4ч.)
<li><span>'.$geoplugin->convert(700) .' '.$symbol.'  </span> Романтическое свидание (6ч.)
<li><span>'.$geoplugin->convert(1000) .' '.$symbol.'  </span> От заката до рассвета (12ч.)
<li><span>'.$geoplugin->convert(1500) .' '.$symbol.'  </span> В омут с головой (24ч)
<li><span>'.$geoplugin->convert(1000) .' '.$symbol.'  </span> Каждые следующие сутки*
<li><p>* При заказе от 5 дней - <b>'.$geoplugin->convert(700) .' '.$symbol.'  </b> в сутки<br></p>

</ul>
<div class="footer">
<a href="/attractive/" class="btn black">Выбрать<span> из Моделей</span></a>
</div>
</div>
<div class="column last">
<div class=table-title>
<h1 style="cursor: pointer; cursor: hand;"><a href="/favorites/">Фаворитки</a></h1>
</div>
<div class=header>
<h2>'.$symbol.'<span>'.$geoplugin->convert(500) .' </span>  Свидание 2 ч.</h2>
</div>
<ul>
<li><span>'.$geoplugin->convert(300) .' '.$symbol.'  </span> Сладкое мгновение (60 мин.)
<li><span>'.$geoplugin->convert(700) .' '.$symbol.'  </span> Третье искушение (3ч.)
<li><span>'.$geoplugin->convert(800) .' '.$symbol.'  </span> Свидание с ужином (4ч.)
<li><span>'.$geoplugin->convert(1000) .' '.$symbol.'  </span> Романтическое свидание (6ч.)
<li><span>'.$geoplugin->convert(1500) .' '.$symbol.'  </span> От заката до рассвета (12ч.)
<li><span>'.$geoplugin->convert(2000) .' '.$symbol.'  </span> В омут с головой (24ч)
<li><span>'.$geoplugin->convert(1500) .' '.$symbol.'  </span> Каждые следующие сутки*
<li><p>* При заказе от 5 дней - <b>'.$geoplugin->convert(1000) .' '.$symbol.'  </b> в сутки</p>

</ul>
<div class="footer">
<a href="/favorites/"  class="btn black">Выбрать<span> из Фавориток</span></a>
</div>
</div>
</div>
</div>';
?>