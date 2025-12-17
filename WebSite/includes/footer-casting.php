<?php

echo '<div id="footer">
<div id="footer-center" class="container">
<div class="footer-left">
<ul class="footer-menu">
<li ' . $favorites . '><a href="/favorites/" title="Фаворитки, элитные дорогие эскортницы, красивые девушки, эскорт агентство МиссБлисс">Фаворитки</a>
<li ' . $attractive . '><a href="/attractive/" title="Эскорт модели фотомодели, эскортницы для элитного досуга">Фотомодели</a>
<li ' . $casting . '><a href="/casting/" title="Работа для девушек в эскорт агентстве МиссБлисс">Работа для девушек</a>
<li ' . $contact . ' class="footer-last"><a href="/contact/" title="Контакты эскорт агентства">Контакт</a>
</ul>
<ul class="footer-address">
<li><i class="fab fa-telegram-plane"></i><a href="tg://resolve?domain=' . $telegram . '">Telegram</a>
<li><i class="fab fa-whatsapp"></i><a href="https://wa.me/' . $phone . '?text=' . $time . ',%20меня%20заинтересовала%20вакансия%20эскорт-модели ' . $city . ',%20напишите%20пожалуйста%20подробнее...%20https://missbliss.ru/casting/">WhatsApp</a>
<li><i class="fab fa-apple"></i><a href="tel:+' . $phone . '" title="Круглосуточно можно звонить">' . $iPhone . '</a>
<li><i class="fa fa-comments" aria-hidden="true"></i><a href="sms:+' . $phone . '">SMS</a>
<li><i class="fab fa-viber"></i> ' . $viber . '
';
?>