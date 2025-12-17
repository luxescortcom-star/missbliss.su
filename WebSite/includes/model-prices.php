
<?php
// Подключаем файл с курсом валют
require_once __DIR__.'/rates/currency_config.php';

// Определяем язык и категорию из URL
function getLanguageAndCategory() {
    global $vip; // Добавляем доступ к глобальной переменной $vip
    
    $url = $_SERVER['REQUEST_URI'] ?? '';
    
    // Определяем язык по папке в URL
    $language = 'ru'; // по умолчанию русский
    if (strpos($url, '/elite-models/') !== false) {
        $language = 'en';
    }
    
    // Определяем категорию
    $category = 'attractive'; // по умолчанию
    
    // Проверяем переменную $vip из файла модели
    $isVip = false;
    if (isset($vip) && $vip === 'true') {
        $isVip = true;
    }
    
    if (strpos($url, '/attractive/') !== false) {
        $category = 'attractive';
    } elseif (strpos($url, '/favorites/') !== false) {
        if ($isVip) {
            $category = 'vip';
        } else {
            $category = 'favorites';
        }
    } elseif (strpos($url, '/new/') !== false) {
        $category = 'new';
    }
    
    return [
        'language' => $language,
        'category' => $category
    ];
}

$data = getLanguageAndCategory();
$language = $data['language'];
$category = $data['category'];

// Добавляем отладочную информацию
error_log("Model category determined: " . $category . ", VIP: " . (isset($vip) ? $vip : 'not set'));

// Функции округления для разных категорий
function roundPrice($number, $category) {
    switch ($category) {
        case 'attractive':
        case 'new':
            return round($number / 10000) * 10000;
        case 'favorites':
        case 'vip':
        default:
            return round($number / 1000) * 1000;
    }
}

// Базовые цены в долларах (только для attractive)
function getBasePricesInUSD() {
    return [
        '1' => 250,      // 1 час - Первое впечатление
        '2' => 350,      // 2 часа - Свидание
        '3' => 450,      // 3 часа - Немного больше времени
        '4' => 550,      // 4 часа - Свидание с ужином
        '5' => 550,      // 5+ часов (средняя цена)
        '6' => 800,      // 6 часов - Романтичное свидание
        '12' => 1000,    // 12 часов - От заката до рассвета
        '24' => 1500,    // 24 часа - В омут с головой
        'extra_night' => 1000,   // каждая следующая ночь
        'long_term' => 700       // При закате от 5 дней
    ];
}

// Множители для разных категорий
function getPriceMultiplier($category) {
    $multipliers = [
        'attractive' => 1.0,
        'new' => 1.0,
        'favorites' => 1.5,
        'vip' => 2.0
    ];
    
    return $multipliers[$category] ?? 1.0;
}

// Заголовки категорий на разных языках
function getCategoryTitle($category, $language) {
    $titles = [
        'ru' => [
            'favorites' => 'Фаворитки',
            'attractive' => 'Модели',
            'new' => 'Новые модели',
            'vip' => 'VIP Модели'
        ],
        'en' => [
            'favorites' => 'Favorites',
            'attractive' => 'Models',
            'new' => 'New Models',
            'vip' => 'VIP Models'
        ]
    ];
    
    return $titles[$language][$category] ?? $titles[$language]['attractive'] ?? 'Models';
}

// Тексты на разных языках
function getTexts($language) {
    $texts = [
        'ru' => [
            'date_2h' => 'Свидание 2 ч.',
            'first_impression' => 'Первое впечатление 60 мин.',
            'romantic_date' => 'Романтичное свидание (6ч.)',
            'detailed_prices' => 'Подробные цены',
            'model' => 'Модель',
            'more_time' => 'Немного больше времени (3ч.)',
            'date_with_dinner' => 'Свидание с ужином (4ч.)',
            'sunset_to_sunrise' => 'От заката до рассвета (12ч.)',
            'headlong' => 'В омут с головой (24 часа)',
            'extra_night' => 'каждая следующая ночь *',
            'long_term' => 'При заказе от 5 дней',
            'per_day' => 'в сутки',
            'back' => 'Назад',
            'vip_badge' => 'VIP'
        ],
        'en' => [
            'date_2h' => 'Date 2 hours',
            'first_impression' => 'First impression 60 min.',
            'romantic_date' => 'Romantic date (6h)',
            'detailed_prices' => 'Detailed prices',
            'model' => 'Model',
            'more_time' => 'A little more time (3h)',
            'date_with_dinner' => 'Date with dinner (4h)',
            'sunset_to_sunrise' => 'From dusk till dawn (12h)',
            'headlong' => 'Headlong (24 hours)',
            'extra_night' => 'each extra night *',
            'long_term' => 'For orders from 5 days',
            'per_day' => 'per day',
            'back' => 'Back',
            'vip_badge' => 'VIP'
        ]
    ];
    
    return $texts[$language];
}

// Функция для получения текущего курса и пересчета цен
function calculatePrices($usdRate, $category) {
    $basePrices = getBasePricesInUSD();
    $multiplier = getPriceMultiplier($category);
    
    // Пересчитываем цены в рубли с учетом множителя и округлением
    $pricesInRUB = [];
    foreach ($basePrices as $key => $price) {
        // Применяем множитель категории
        $priceWithMultiplier = $price * $multiplier;
        
        // Переводим в рубли
        $priceInRubles = $priceWithMultiplier * $usdRate;
        
        // Округляем по правилам категории
        $pricesInRUB[$key] = roundPrice($priceInRubles, $category);
    }

    return $pricesInRUB;
}

// Получаем текущий курс из подключенного файла
$currentUsdRate = $GLOBALS['currentUsdRate'] ?? 90;

// Получаем актуальные цены для категории
$prices = calculatePrices($currentUsdRate, $category);
$category_title = getCategoryTitle($category, $language);
$texts = getTexts($language);

// Определяем путь назад в зависимости от языка и категории
$back_path = '/';
if ($language === 'en') {
    if ($category === 'vip' || $category === 'favorites') {
        $back_path = '/elite-models/';
    } elseif ($category === 'attractive') {
        $back_path = '/elite-models/attractive/';
    } elseif ($category === 'new') {
        $back_path = '/elite-models/new/';
    }
} else {
    if ($category === 'vip' || $category === 'favorites') {
        $back_path = '/vip-models/';
    } elseif ($category === 'attractive') {
        $back_path = '/attractive/';
    } elseif ($category === 'new') {
        $back_path = '/new/';
    }
}

// Выводим JavaScript с ценами ДО основного HTML
echo '<script>';
echo 'const PRICES = ' . json_encode($prices) . ';';
echo 'const MODEL_CATEGORY = "' . $category . '";'; // Добавляем категорию
echo 'const MODEL_IS_VIP = ' . ($category === 'vip' ? 'true' : 'false') . ';'; // Добавляем VIP статус
echo 'console.log("Language: ' . $language . ', Category: ' . $category . '", PRICES);';
echo '</script>';

// Продолжаем вывод обычного HTML
echo '<div class=table-title>
</div>
<div class="fee">';

// Добавляем VIP бейдж если это VIP модель
if ($category === 'vip') {
    echo '<span class="vip-badge" style="background: gold; color: black; padding: 2px 8px; border-radius: 3px; font-weight: bold; margin-right: 10px;">' . $texts['vip_badge'] . '</span>';
}

echo '<h3><a href="' . $back_path . '"> ' . $category_title . '</a></h3>
<h4><span> '.$prices['2'].'</span> ₽ '.$texts['date_2h'].'</h4>
</div>
<ul>
<li><b> '.$prices['1'].'</b> ₽ '.$texts['first_impression'].'
<li><b> '.$prices['6'].'</b> ₽ '.$texts['romantic_date'].'
<li><br><!--noindex--><a href="#fee" title="'.$texts['detailed_prices'].'" rel="nofollow" class="btn fee"><i class="fas fa-ruble-sign"></i> '.$texts['detailed_prices'].' </a><!--/noindex-->
</ul>
   <!--noindex--><a href="#x" class="overlay" rel="nofollow" id="fee"></a><!--/noindex-->
   <div class="popup">
   <div class="pricing-table-second clearfix">';
   
// Добавляем VIP бейдж в попап если это VIP модель
if ($category === 'vip') {
    echo '<span class="vip-badge" style="background: gold; color: black; padding: 2px 8px; border-radius: 3px; font-weight: bold; margin-right: 10px;">' . $texts['vip_badge'] . '</span>';
}

echo '<h2>'. ($name1 ?? $texts['model']) . '</h2>
<div class="fee">
<h3><span> '.$prices['2'].'</span>₽ '.$texts['date_2h'].'</h3>
</div>
<ul class="more">
<li><span> '.$prices['1'].' ₽ </span><b>'.$texts['first_impression'].'</b>
<li><span> '.$prices['3'].' ₽ </span><b>'.$texts['more_time'].'</b>
<li><span> '.$prices['4'].' ₽ </span><b>'.$texts['date_with_dinner'].'</b>
<li><span> '.$prices['6'].' ₽ </span><b>'.$texts['romantic_date'].'</b>
<li><span> '.$prices['12'].' ₽ </span><b>'.$texts['sunset_to_sunrise'].'</b>
<li><span> '.$prices['24'].' ₽ </span><b>'.$texts['headlong'].'</b>
<li><span> '.$prices['extra_night'].' ₽ </span><b>'.$texts['extra_night'].'</b>
<li><p>* '.$texts['long_term'].' - <b> '.$prices['long_term'].' ₽</b> '.$texts['per_day'].'<br></p>
</ul><br>';
?>
