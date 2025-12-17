<?php

function getContentByLanguage($type) {
    $currentUrl = $_SERVER['REQUEST_URI'];
    $isEnglish = (strpos($currentUrl, '/en/') === 0);

    $content = [
        'copyright' => [
            'en' => '<a href="/en/about/">2003 - 2025 © The MissBliss Agency, Your Intimate Dream</a>',
            'ru' => '<a href="about/">2003 - 2025 © Агентство &laquo;MissBliss&raquo;. Сокровенная Мечта</a>'
        ],
        'blur_title' => [
            'en' => ' is waiting for you 💖',
            'ru' => ' ждет тебя 💖'
        ]
    ];

    return $content[$type][$isEnglish ? 'en' : 'ru'];
}

// Использование:
$copyright = getContentByLanguage('copyright');
$blurSuffix = getContentByLanguage('blur_title');

function getCurrentLanguage() {
    $url = $_SERVER['REQUEST_URI'] ?? '';
    return strpos($url, '/elite-models/') !== false ? 'en' : 'ru';
}

$currentLanguage = getCurrentLanguage();

// Определяем тексты на основе языка
$texts = [
    'close' => $currentLanguage === 'en' ? 'Close' : 'Закрыть',
    'invite_title' => $currentLanguage === 'en' ? 'Invite ' : 'Пригласить ',
    'datetime_label' => $currentLanguage === 'en' ? 'Date and time *' : 'Дата и время встречи *',
    'duration_label' => $currentLanguage === 'en' ? 'Duration (hours) *' : 'Продолжительность (часы) *',
    'duration_placeholder' => $currentLanguage === 'en' ? 'Select duration' : 'Выберите продолжительность',
    'duration_options' => [
        '1' => $currentLanguage === 'en' ? '1 hour - First impression' : '1 час - Первое впечатление',
        '2' => $currentLanguage === 'en' ? '2 hours - Date' : '2 часа - Свидание',
        '3' => $currentLanguage === 'en' ? '3 hours - A little more time' : '3 часа - Немного больше времени',
        '4' => $currentLanguage === 'en' ? '4 hours - Date with dinner' : '4 часа - Свидание с ужином',
        '5' => $currentLanguage === 'en' ? '5+ hours' : '5+ часов',
        '6' => $currentLanguage === 'en' ? '6 hours - Romantic date' : '6 часов - Романтичное свидание',
        '12' => $currentLanguage === 'en' ? '12 hours - From sunset to sunrise' : '12 часов - От заката до рассвета',
        '24' => $currentLanguage === 'en' ? '24 hours - Full day' : '24 часа - Полные сутки',
    ],
    'place_type_label' => $currentLanguage === 'en' ? 'Place type *' : 'Тип места *',
    'place_type_placeholder' => $currentLanguage === 'en' ? 'Select place type' : 'Выберите тип места',
    'place_type_options' => [
        'отель' => $currentLanguage === 'en' ? 'Hotel' : 'Отель',
        'дом' => $currentLanguage === 'en' ? 'House/Apartment' : 'Дом/Квартира',
        'ресторан' => $currentLanguage === 'en' ? 'Restaurant' : 'Ресторан',
        'событие' => $currentLanguage === 'en' ? 'Event' : 'Событие/Мероприятие',
        'другое' => $currentLanguage === 'en' ? 'Other' : 'Другое',
    ],
    'address_label' => $currentLanguage === 'en' ? 'Address *' : 'Адрес *',
    'address_placeholder' => $currentLanguage === 'en' ? 'Enter exact address' : 'Укажите точный адрес',
    'contact_method_label' => $currentLanguage === 'en' ? 'Preferred contact method *' : 'Предпочтительный способ связи *',
    'contact_method_placeholder' => $currentLanguage === 'en' ? 'Select contact method' : 'Выберите способ связи',
    'contact_method_options' => [
        'telegram' => 'Telegram',
        'phone' => $currentLanguage === 'en' ? 'Phone' : 'Телефон',
        'email' => 'Email',
    ],
    'your_name_label' => $currentLanguage === 'en' ? 'Your name *' : 'Ваше имя *',
    'name_placeholder' => $currentLanguage === 'en' ? 'How should we address you?' : 'Как к вам обращаться?',
    'phone_label' => $currentLanguage === 'en' ? 'Phone *' : 'Телефон *',
    'phone_placeholder' => $currentLanguage === 'en' ? 'Phone number' : 'Номер телефона',
    'comments_label' => $currentLanguage === 'en' ? 'Additional wishes' : 'Дополнительные пожелания',
    'comments_placeholder' => $currentLanguage === 'en' ? 'Special wishes, dress code, additional services, etc.' : 'Особые пожелания, dress code, дополнительные услуги и т.д.',
    'submit_button' => $currentLanguage === 'en' ? 'Send invitation' : 'Отправить приглашение',
];

echo '<div id="footer-bottom">
<div id="footer-center-bottom" class="container">
<ul class="copyright">
<li>' . $copyright . '
</ul>
<hr class="h40"><hr class="h40"><hr class="h40">


<!--LiveInternet logo--><a href="https://www.liveinternet.ru/click"
target="_blank"><img src="https://counter.yadro.ru/logo?17.10"
title="LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня"
alt="" style="border:0" width="88" height="31"/></a><!--/LiveInternet-->


</div>
</div>
</div>
</div><!-- /pc -->
</div><!-- /p -->


<script src="/js/invite-form.js"></script>
<script src="/forbidden/build/js/intlTelInput.min.js"></script>
<script src="/js/jquery.prettyPhoto.js" ></script>
<script src="/js/selectnav.min.js" ></script>
<script src="/js/jquery.flexslider.js" ></script>
<script src="/js/accordion.js" ></script>
<script src="/js/menu.js" ></script>
<script src="/slick/slick.js" ></script>
<script src="/js/jquery.mousewheel.js" ></script>





<script>$(document).ready(function(){$("a[class^=\'pP\']").prettyPhoto();$(".portfolio:first a[class^=\'pP\']").prettyPhoto({animation_speed:\'normal\',theme:\'dark_rounded\',slideshow:4000,opacity:0.98,deeplinking:false,overlay_gallery:true,autoplay_slideshow:false});});</script>

<script>$(window).load(function(){$(".flexslider").flexslider({touch:!0,animation:"fade",slideshow:!0,initDelay:0,start:function(t){t.count-1;$(t).find("img.get:eq(0)").each(function(){var t=$(this).attr("data-src");$(this).attr("src",t).removeAttr("data-src")})},before:function(t){var a=t.slides,i=t.animatingTo,n=$(a[i]),r=(n.find("img[data-src]"),i),e=r+1,s=r-1;n.parent().find("img.get:eq("+r+"), img.get:eq("+s+"), img.get:eq("+e+")").each(function(){var t=$(this).attr("data-src");$(this).attr("src",t).removeAttr("data-src")})}})});
</script>
<script>
window.onblur=function () {document.title=\'✋🏻 ' . $name1 . ' ' . $blurSuffix . '\'}
window.onfocus=function () {document.title=\'' . $title . '\'}
</script>


<script type="text/javascript">
$(document).on("ready",function(){$(".lazy").slick({lazyLoad:"ondemand",infinite:!0,speed:800,adaptiveHeight:!0,autoplay:!0,autoplaySpeed:6e3,slidesToShow:4,slidesToScroll:3,responsive:[{breakpoint:5e3,settings:{infinite:!0,slidesToShow:8,slidesToScroll:7}},{breakpoint:2560,settings:{infinite:!0,slidesToShow:6,slidesToScroll:5}},{breakpoint:1280,settings:{infinite:!0,slidesToShow:5,slidesToScroll:4}},{breakpoint:1079,settings:{infinite:!0,slidesToShow:4,slidesToScroll:3}},{breakpoint:767,settings:{infinite:!0,slidesToShow:3,slidesToScroll:2}},{breakpoint:479,settings:{infinite:!0,slidesToShow:2,slidesToScroll:2}}]})});
</script>



<!--LiveInternet counter--><script>
new Image().src = "https://counter.yadro.ru/hit?r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,150))+
";"+Math.random();</script><!--/LiveInternet-->

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

<script>
document.addEventListener(\'DOMContentLoaded\', function() {
  // Определяем путь к файлу с цитатами в зависимости от языковой версии
  const quotesPath = window.location.pathname.startsWith(\'/en/\')
    ? \'/en/en_quotes.json\'
    : \'/quotes.json\';

  fetch(quotesPath)
    .then(response => {
      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
      }
      return response.json();
    })
    .then(quotes => {
      const testimonialBlock = document.querySelector(\'.testimonial\');
      if (!testimonialBlock) return;

      // Очищаем блок (если там были старые цитаты)
      testimonialBlock.innerHTML = \'\';

      // Выбираем 3 случайные цитаты (или меньше, если их мало)
      const shuffledQuotes = [...quotes].sort(() => 0.5 - Math.random());
      const selectedQuotes = shuffledQuotes.slice(0, 3);

      // Добавляем цитаты в блок
      selectedQuotes.forEach(quote => {
        testimonialBlock.innerHTML += `<blockquote><p>${quote}</p></blockquote>`;
      });
    })
    .catch(error => {
      console.error(\'Ошибка загрузки цитат:\', error);
      // Фолбэк: можно добавить дефолтные цитаты или сообщение об ошибке
    });
});
</script>';

// Выводим модальное окно приглашения
echo '<!-- Модальное окно приглашения -->
<div id="inviteModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close-2" title="' . $texts['close'] . '">х</span>
        <h2>' . $texts['invite_title'] . $name2 . '</h2>
        <form id="inviteForm" method="post" action="/invite/">
            <!-- Скрытые поля модели -->
            <div class="form-group">
                <label for="invite_datetime">' . $texts['datetime_label'] . '</label>
                <div class="datetime-input-container">
                    <input type="datetime-local" id="invite_datetime" name="invite_datetime" required class="datetime-input">
                    <span class="calendar-icon">📅</span>
                </div>
            </div>

            <div class="form-group">
                <label for="duration">' . $texts['duration_label'] . '</label>
                <select id="duration" name="duration" required>
                    <option value="">' . $texts['duration_placeholder'] . '</option>
                    <option value="1">' . $texts['duration_options']['1'] . '</option>
                    <option value="2">' . $texts['duration_options']['2'] . '</option>
                    <option value="3">' . $texts['duration_options']['3'] . '</option>
                    <option value="4">' . $texts['duration_options']['4'] . '</option>
                    <option value="5">' . $texts['duration_options']['5'] . '</option>
                    <option value="6">' . $texts['duration_options']['6'] . '</option>
                    <option value="12">' . $texts['duration_options']['12'] . '</option>
                    <option value="24">' . $texts['duration_options']['24'] . '</option>
                </select>
                <div id="priceDisplay" class="price-display" style="display: none;">
                    <span class="price-amount"></span> ₽
                    <small class="price-note"></small>
                </div>
            </div>

            <div class="form-group">
                <label for="place_type">' . $texts['place_type_label'] . '</label>
                <select id="place_type" name="place_type" required>
                    <option value="">' . $texts['place_type_placeholder'] . '</option>
                    <option value="отель">' . $texts['place_type_options']['отель'] . '</option>
                    <option value="дом">' . $texts['place_type_options']['дом'] . '</option>
                    <option value="ресторан">' . $texts['place_type_options']['ресторан'] . '</option>
                    <option value="событие">' . $texts['place_type_options']['событие'] . '</option>
                    <option value="другое">' . $texts['place_type_options']['другое'] . '</option>
                </select>
            </div>

            <div class="form-group">
                <label for="address">' . $texts['address_label'] . '</label>
                <input type="text" id="address" name="address" placeholder="' . $texts['address_placeholder'] . '" required>
            </div>

            <div class="form-group">
                <label for="contact_method">' . $texts['contact_method_label'] . '</label>
                <select id="contact_method" name="contact_method" required>
                    <option value="">' . $texts['contact_method_placeholder'] . '</option>
                    <option value="telegram">' . $texts['contact_method_options']['telegram'] . '</option>
                    <option value="phone">' . $texts['contact_method_options']['phone'] . '</option>
                    <option value="email">' . $texts['contact_method_options']['email'] . '</option>
                </select>
            </div>

            <!-- Контактные поля (изначально скрыты) -->
            <div class="contact-fields-container">
                <!-- Telegram -->
                <div class="form-group contact-field" id="telegram_field" style="display: none;">
                    <div class="contact-row">
                        <div class="contact-column">
                            <label for="client_name">' . $texts['your_name_label'] . '</label>
                            <input type="text" id="client_name_telegram" name="client_name" placeholder="' . $texts['name_placeholder'] . '">
                        </div>
                        <div class="contact-column">
                            <label for="telegram">Telegram *</label>
                            <input type="text" id="telegram" name="telegram" placeholder="@username">
                        </div>
                    </div>
                </div>

                <!-- Phone -->
                <div class="form-group contact-field" id="phone_field" style="display: none;">
                    <div class="contact-row">
                        <div class="contact-column">
                            <label for="client_name">' . $texts['your_name_label'] . '</label>
                            <input type="text" id="client_name_phone" name="client_name" placeholder="' . $texts['name_placeholder'] . '">
                        </div>
                        <div class="contact-column">
                            <label for="phone">' . $texts['phone_label'] . '</label>
                            <input id="phone" type="tel" placeholder="' . $texts['phone_placeholder'] . '" size="30" name="phone" value="" class="last">
                            <input id="intlTelInputHidden" type="hidden" name="phone-full">
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="form-group contact-field" id="email_field" style="display: none;">
                    <div class="contact-row">
                        <div class="contact-column">
                            <label for="client_name">' . $texts['your_name_label'] . '</label>
                            <input type="text" id="client_name_email" name="client_name" placeholder="' . $texts['name_placeholder'] . '">
                        </div>
                        <div class="contact-column">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" placeholder="example@mail.com">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="invite_comments">' . $texts['comments_label'] . '</label>
                <textarea id="invite_comments" name="invite_comments" placeholder="' . $texts['comments_placeholder'] . '"></textarea>
            </div>

            <!-- Защита от ботов -->
            <input type="text" name="website" style="display:none;">

            <button type="submit" class="btn-submit">' . $texts['submit_button'] . '</button>
        </form>
    </div>
</div>';
?>