
<?php

date_default_timezone_set('Europe/Moscow');

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

// ОТЛАДКА: логируем все POST данные
error_log("=== INVITE FORM DEBUG ===");
error_log("POST data received:");
foreach ($_POST as $key => $value) {
    error_log("  $key: " . (is_array($value) ? print_r($value, true) : $value));
}

// Функция проверки доступности URL (перемещена на верхний уровень)
function testUrlQuick($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 3); // Быстрая проверка - 3 секунды
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    // Считаем успешным если получили любой ответ от сервера
    return ($http_code > 0 && $http_code < 500);
}
    
// ПОДКЛЮЧАЕМ централизованный геолокатор
$ipGeolocationFile = $_SERVER['DOCUMENT_ROOT'] . '/geoip/ip_geolocation.php';
if (file_exists($ipGeolocationFile)) {
    require_once $ipGeolocationFile;
} else {
    error_log("ВНИМАНИЕ: Файл ip_geolocation.php не найден по пути: " . $ipGeolocationFile);
    
    class IPGeolocation {
        public static function getIPInfo($ip) {
            return [
                'ip' => $ip,
                'city' => 'не определен',
                'region' => 'не определен', 
                'country' => 'не определена',
                'country_name' => 'не определена',
                'loc' => '',
                'timezone' => '',
                'org' => ''
            ];
        }
    }
}

// Определяем категорию из URL
function getModelCategoryFromUrl($url) {
    if (strpos($url, '/attractive/') !== false) {
        return 'attractive';
    } elseif (strpos($url, '/favorites/') !== false) {
        // Проверяем переменную $vip из файла модели
        // Для этого нужно получить данные с сервера или добавить в POST
        // Временное решение - по умолчанию favorites
        return 'favorites';
    } elseif (strpos($url, '/new/') !== false) {
        return 'new';
    }
    return 'attractive';
}

// Защита от ботов
if(!empty($_POST['website'])) die();

// Упрощенная функция подключения к БД
function getDBConnection() {
    static $pdo = null;
    
    if ($pdo === null) {
        try {
            $pdo = new PDO(
                "mysql:host=sql305.infinityfree.com;dbname=if0_40406087_missbliss;charset=utf8",
                "if0_40406087",
                "Graniate795",
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_TIMEOUT => 5,
                    PDO::ATTR_PERSISTENT => false,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET time_zone = '+03:00'"
                ]
            );
            
            // Явно устанавливаем часовой пояс
            $pdo->exec("SET time_zone = '+03:00'");
            
            // Проверяем настройки
            $stmt = $pdo->query("
                SELECT 
                    @@global.time_zone as global_tz,
                    @@session.time_zone as session_tz,
                    NOW() as db_now,
                    UTC_TIMESTAMP() as db_utc,
                    UNIX_TIMESTAMP() as db_timestamp
            ");
            $tz_info = $stmt->fetch(PDO::FETCH_ASSOC);
            error_log("🕐 Настройки времени БД: " . json_encode($tz_info));
            
        } catch (PDOException $e) {
            error_log("Ошибка подключения к БД: " . $e->getMessage());
            return null;
        }
    }
    
    return $pdo;
}

define('SUCCESS_LOGS_DIR', __DIR__.'/logs/invite_success/');
define('FAILED_LOGS_DIR', __DIR__.'/logs/invite_failed/');

// Создаем директории если их нет
if (!is_dir(SUCCESS_LOGS_DIR)) mkdir(SUCCESS_LOGS_DIR, 0755, true);
if (!is_dir(FAILED_LOGS_DIR)) mkdir(FAILED_LOGS_DIR, 0755, true);

define('BLACKLIST_FILE', __DIR__.'/blacklist.json');
define('SPAM_PATTERNS_FILE', __DIR__.'/spam_patterns.txt');

// Функция для проверки черного списка
function isBlacklisted($email, $message) {
    // Проверка email в черном списке
    if (file_exists(BLACKLIST_FILE)) {
        $blacklistData = json_decode(file_get_contents(BLACKLIST_FILE), true);
        $blacklist = $blacklistData['emails'] ?? [];
        foreach ($blacklist as $blacklisted) {
            if (strpos($email, $blacklisted) !== false) {
                return true;
            }
        }
    }
    
    // Проверка сообщения по шаблонам спама
    if (file_exists(SPAM_PATTERNS_FILE)) {
        $patterns = file(SPAM_PATTERNS_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($patterns as $pattern) {
            if (preg_match("/$pattern/i", $message)) {
                return true;
            }
        }
    }
    
    return false;
}

// Email address verification, do not edit.
function isEmail($email) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}

function isPhone($phone) {
	$phone = preg_replace('/\s|\+|-|\(|\)/','', $phone);
	if(is_numeric($phone)) {
		if(strlen($phone) < 11) {
			return FALSE;
		} else {
			return $phone;
		}
	} else {
		return FALSE;
	}
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

// Получаем IP пользователя
$ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

// Получаем информацию о стране через централизованный класс
$ipInfo = IPGeolocation::getIPInfo($ip);
$city = $ipInfo['city'];
$region = $ipInfo['region']; 
$country = $ipInfo['country_name'];

$user_agent = $_SERVER["HTTP_USER_AGENT"] ?? 'unknown';

// Получаем данные из формы приглашения
$model_name = $_POST['model_name'] ?? '';
$model_url = $_POST['model_url'] ?? '';
$invite_datetime = $_POST['invite_datetime'] ?? '';
$duration = $_POST['duration'] ?? '';
$place_type = $_POST['place_type'] ?? '';
$address = $_POST['address'] ?? '';
$client_name = $_POST['client_name'] ?? '';
$contact_method = $_POST['contact_method'] ?? '';
$telegram = $_POST['telegram'] ?? '';
$phone = $_POST['phone'] ?? ''; // Это поле отправляется из формы
$invite_comments = $_POST['invite_comments'] ?? '';

// Получаем дополнительные данные для определения VIP статуса
$model_category = $_POST['model_category'] ?? '';
$is_vip = isset($_POST['is_vip']) && $_POST['is_vip'] === 'true';

// Определяем контакт в зависимости от выбранного метода
$contact = '';
if ($contact_method === 'telegram') {
    $contact = $telegram;
} elseif ($contact_method === 'phone') {
    // Проверяем оба варианта - из поля phone и из поля contact
    if (!empty($phone)) {
        $contact = $phone;
    } elseif (!empty($_POST['contact'])) {
        $contact = $_POST['contact'];
    }
} elseif ($contact_method === 'email') {
    $contact = $_POST['email'] ?? '';
}

// Дополнительная отладка
error_log("DEBUG: contact_method = $contact_method");
error_log("DEBUG: phone from POST = " . ($phone ?: 'empty'));
error_log("DEBUG: contact from POST = " . ($_POST['contact'] ?? 'empty'));
error_log("DEBUG: final contact = $contact");
error_log("DEBUG: model_category = $model_category");
error_log("DEBUG: is_vip = " . ($is_vip ? 'true' : 'false'));

// Основной массив данных для логирования
$logData = [
    'model_name' => $model_name,
    'model_url' => $model_url,
    'model_category' => $model_category,
    'is_vip' => $is_vip,
    'invite_date' => $invite_datetime,
    'duration' => $duration,
    'place_type' => $place_type,
    'address' => $address,
    'contact_method' => $contact_method,
    'client_name' => $client_name,
    'contact' => $contact,
    'invite_comments' => $invite_comments,
    'ip' => $ip,
    'user_agent' => $user_agent,
    'city' => $city,
    'region' => $region,
    'country' => $country,
];

// Функции логирования - обновленные для приглашений
function logSuccess($data) {
    $logEntry = [
        'date' => date('Y-m-d H:i:s'),
        'model_name' => $data['model_name'],
        'model_url' => $data['model_url'],
        'model_category' => $data['model_category'] ?? null,
        'is_vip' => $data['is_vip'] ?? false,
        'invite_date' => $data['invite_date'],
        'duration' => $data['duration'],
        'place_type' => $data['place_type'],
        'address' => $data['address'],
        'contact_method' => $data['contact_method'],
        'client_name' => $data['client_name'],
        'contact' => $data['contact'],
        'invite_comments' => $data['invite_comments'],
        'city' => $data['city'] ?? null,
        'region' => $data['region'] ?? null,
        'country' => $data['country'] ?? null,
        'ip' => $data['ip'],
        'user_agent' => $data['user_agent'] ?? null
    ];
    
    $filename = SUCCESS_LOGS_DIR . 'success_' . date('Y-m-d') . '.json';
    appendToJsonLog($filename, $logEntry);
}

function logFailed($data, $reason) {
    $logEntry = [
        'date' => date('Y-m-d H:i:s'),
        'model_name' => $data['model_name'] ?? null,
        'model_url' => $data['model_url'] ?? null,
        'model_category' => $data['model_category'] ?? null,
        'is_vip' => $data['is_vip'] ?? false,
        'invite_date' => $data['invite_date'] ?? null,
        'duration' => $data['duration'] ?? null,
        'place_type' => $data['place_type'] ?? null,
        'address' => $data['address'] ?? null,
        'contact_method' => $data['contact_method'] ?? null,
        'client_name' => $data['client_name'] ?? null,
        'contact' => $data['contact'] ?? null,
        'invite_comments' => $data['invite_comments'] ?? null,
        'city' => $data['city'] ?? null,
        'region' => $data['region'] ?? null,
        'country' => $data['country'] ?? null,
        'ip' => $data['ip'],
        'user_agent' => $data['user_agent'] ?? null,
        'reason' => $reason
    ];
    
    $filename = FAILED_LOGS_DIR . 'failed_' . date('Y-m-d') . '.json';
    appendToJsonLog($filename, $logEntry);
}

function appendToJsonLog($filename, $entry) {
    $logs = [];
    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        $logs = json_decode($content, true) ?: [];
    }
    
    $logs[] = $entry;
    file_put_contents($filename, json_encode($logs, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

// Валидация данных
if(empty($model_name)) {
    echo '<div class="error_message">Ошибка: не указана модель.</div>';
    exit();
}

if(empty($invite_datetime)) {
    echo '<div class="error_message">Укажите дату и время встречи.</div>';
    exit();
}

// Проверяем, что дата не в прошлом
$invite_timestamp = strtotime($invite_datetime);
if($invite_timestamp < time()) {
    echo '<div class="error_message">Дата встречи не может быть в прошлом.</div>';
    exit();
}

if(empty($duration)) {
    echo '<div class="error_message">Укажите продолжительность встречи.</div>';
    exit();
}

if(empty($place_type)) {
    echo '<div class="error_message">Укажите тип места.</div>';
    exit();
}

if(empty($address)) {
    echo '<div class="error_message">Укажите адрес.</div>';
    exit();
}

if(empty($contact_method)) {
    echo '<div class="error_message">Выберите способ связи.</div>';
    exit();
}

if(empty($contact)) {
    echo '<div class="error_message">Укажите ваш контакт.</div>';
    exit();
}

// Если выбран телефон, проверяем его
if($contact_method === 'phone' && !isPhone($phone)) {
    echo '<div class="error_message">Пожалуйста, введите корректный номер телефона.</div>';
    exit();
}

// Проверка на спам
if(isBlacklisted($contact, $invite_comments)) {
    echo '<div class="error_message">Ваш контакт или сообщение в черном списке.</div>';
    logFailed($logData, 'Контакт или сообщение в черном списке');
    exit();
}

// ФУНКЦИИ ДЛЯ РАБОТЫ С ЦЕНАМИ ПО НОВОЙ СИСТЕМЕ

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
function getPriceMultiplier($category, $is_vip = false) {
    // Для VIP моделей всегда множитель 2.0
    if ($is_vip || $category === 'vip') {
        return 2.0;
    }
    
    $multipliers = [
        'attractive' => 1.0,
        'new' => 1.0,
        'favorites' => 1.5,
    ];
    
    return $multipliers[$category] ?? 1.0;
}

// Функции округления для разных категорий
function roundPrice($price, $category, $is_vip = false) {
    if ($is_vip || $category === 'vip' || $category === 'favorites') {
        return round($price / 1000) * 1000; // Округляем до 1000 для VIP и favorites
    } else {
        return round($price / 10000) * 10000; // Округляем до 10000 для attractive и new
    }
}

// Функция для расчета цены на основе категории и продолжительности
function calculatePriceForDuration($duration, $category, $is_vip, $usdRate) {
    // Получаем базовые цены
    $basePrices = getBasePricesInUSD();
    
    // Получаем множитель для категории
    $multiplier = getPriceMultiplier($category, $is_vip);
    
    // Для 5+ часов используем цену за 6 часов как ориентир
    if ($duration === '5' && isset($basePrices['6'])) {
        $priceInUSD = $basePrices['6'] * $multiplier;
    } elseif (isset($basePrices[$duration])) {
        $priceInUSD = $basePrices[$duration] * $multiplier;
    } else {
        return null;
    }
    
    // Переводим в рубли и округляем
    $priceInRubles = $priceInUSD * $usdRate;
    return roundPrice($priceInRubles, $category, $is_vip);
}

// Определяем тексты примечаний к ценам
function getPriceNote($duration, $language = 'ru') {
    $notes = [
        'ru' => [
            '1' => 'Первое впечатление',
            '2' => 'Стандартное свидание',
            '3' => 'Немного больше времени',
            '4' => 'Свидание с ужином',
            '5' => 'Расчетная стоимость',
            '6' => 'Романтичное свидание',
            '12' => 'От заката до рассвета',
            '24' => 'Полные сутки'
        ],
        'en' => [
            '1' => 'First impression',
            '2' => 'Standard date',
            '3' => 'A little more time',
            '4' => 'Date with dinner',
            '5' => 'Estimated cost',
            '6' => 'Romantic date',
            '12' => 'From dusk till dawn',
            '24' => 'Full day'
        ]
    ];
    
    $lang = ($language === 'en') ? 'en' : 'ru';
    return $notes[$lang][$duration] ?? '';
}

// Определяем язык страницы из URL
function getPageLanguageFromUrl($url) {
    if (strpos($url, '/en/') !== false || strpos($url, '/elite-models/') !== false) {
        return 'en';
    }
    return 'ru';
}



function saveInviteToDB($data, $invite_datetime) {
    $pdo = getDBConnection();
    if (!$pdo) {
        error_log("❌ Не удалось подключиться к БД для сохранения приглашения");
        return false;
    }
    
    try {
        // Получаем цену на основе продолжительности
        $price = null;
        $price_note = '';
        
        // Подключаем файл с курсом валют
        $currency_file = $_SERVER['DOCUMENT_ROOT'] . '/includes/rates/currency_config.php';
        if (file_exists($currency_file)) {
            require_once $currency_file;
        } else {
            error_log("⚠️ Файл currency_config.php не найден, использую курс по умолчанию");
            $GLOBALS['currentUsdRate'] = 90;
        }
        
        // Определяем категорию модели
        $category = $data['model_category'] ?: getModelCategoryFromUrl($data['model_url']);
        $is_vip = $data['is_vip'] ?? false;
        
        // Определяем язык для примечания
        $language = getPageLanguageFromUrl($data['model_url']);
        
        // Получаем текущий курс
        $currentUsdRate = $GLOBALS['currentUsdRate'] ?? 90;
        
        // Рассчитываем цену
        $price = calculatePriceForDuration($data['duration'], $category, $is_vip, $currentUsdRate);
        
        // Получаем примечание на нужном языке
        $price_note = getPriceNote($data['duration'], $language);
        
        // Добавляем метку VIP если нужно
        if ($is_vip) {
            $price_note .= ' (VIP)';
        }
        
        // Исправление времени: вычитаем 3 часа для MySQL (разница между UTC и Moscow)
        $invite_timestamp = strtotime($invite_datetime);
        $invite_date_mysql = date('Y-m-d H:i:s', strtotime($invite_datetime));
        
        // Используем NOW() в SQL вместо передачи параметра
        $sql = "
        INSERT INTO `invite` 
        (model_name, model_url, model_category, invite_date, duration, price, price_note, place_type, address, 
         contact_method, client_name, contact, invite_comments, ip, city, region, country, created_at, status) 
        VALUES 
        (:model_name, :model_url, :model_category, :invite_date, :duration, :price, :price_note, :place_type, :address,
         :contact_method, :client_name, :contact, :invite_comments, :ip, :city, :region, :country, NOW(), 'new')
        ";
        
        error_log("📝 SQL запрос с NOW(): " . $sql);
        
        $stmt = $pdo->prepare($sql);
        
        $params = [
            ':model_name' => substr($data['model_name'], 0, 100),
            ':model_url' => substr($data['model_url'], 0, 255),
            ':model_category' => substr($category, 0, 50),
            ':invite_date' => $invite_date_mysql,
            ':duration' => (int)$data['duration'],
            ':price' => (int)$price,
            ':price_note' => substr($price_note, 0, 100),
            ':place_type' => substr($data['place_type'], 0, 50),
            ':address' => $data['address'],
            ':contact_method' => substr($data['contact_method'], 0, 20),
            ':client_name' => substr($data['client_name'], 0, 100),
            ':contact' => substr($data['contact'], 0, 100),
            ':invite_comments' => $data['invite_comments'] ?? '',
            ':ip' => substr($data['ip'], 0, 45),
            ':city' => $data['city'] ?? null,
            ':region' => $data['region'] ?? null,
            ':country' => $data['country'] ?? null
            // created_at не передаем - используется NOW()
        ];
        
        $result = $stmt->execute($params);
        
        if ($result) {
            $inviteId = $pdo->lastInsertId();
            error_log("✅ Приглашение сохранено в БД с ID: " . $inviteId);
            
            // Проверяем время
            $check = $pdo->query("SELECT created_at FROM `invite` WHERE id = " . $inviteId);
            $time = $check->fetchColumn();
            error_log("✅ Время created_at в БД: " . $time);
            
            return $inviteId;
        }
        
        return false;
        
    } catch (PDOException $e) {
        error_log("❌ Ошибка БД: " . $e->getMessage());
        return false;
    }
}

// Функция отправки в Telegram для приглашений
function sendInviteToTelegram($data, $inviteId) {
    $bot_token = "8299881849:AAER5_Lti47UAarGH91sqvlUhfZ0HySi2Jo";
    $chat_id = "-1003408811868";

    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

    // Форматируем дату (правильное время)
    $invite_date_formatted = date('d.m.Y H:i', strtotime($data['invite_date']));

    $message = "🎯 *НОВОЕ ПРИГЛАШЕНИЕ*\n\n";
    $message .= "🆔 *ID заявки:* `" . $inviteId . "`\n";
    $message .= "👤 *Модель:* " . $data['model_name'] . "\n";
    
    // Добавляем информацию о категории
    if (!empty($data['model_category'])) {
        $category_text = $data['model_category'] == 'attractive' ? 'Models' : 
                        ($data['model_category'] == 'favorites' ? 'Favorites' : 
                        ($data['model_category'] == 'vip' ? 'VIP' : 'Other'));
        $message .= "🏷 *Категория:* " . $category_text . "\n";
    }
    
    if ($data['is_vip'] ?? false) {
        $message .= "⭐ *VIP модель*\n";
    }
    
    $message .= "🔗 *Ссылка на модель:* " . $data['model_url'] . "\n";
    $message .= "📅 *Дата и время:* " . $invite_date_formatted . " \n";
    $message .= "⏱ *Продолжительность:* " . $data['duration'] . " ч.\n";
    
    // Рассчитываем и показываем цену
    $currency_file = $_SERVER['DOCUMENT_ROOT'] . '/includes/rates/currency_config.php';
    if (file_exists($currency_file)) {
        require_once $currency_file;
    }
    $category = $data['model_category'] ?? 'attractive';
    $is_vip = $data['is_vip'] ?? false;
    $currentUsdRate = $GLOBALS['currentUsdRate'] ?? 90;
    
    $price = calculatePriceForDuration($data['duration'], $category, $is_vip, $currentUsdRate);
    if ($price) {
        $message .= "💰 *Стоимость:* " . number_format($price, 0, '', ' ') . " ₽\n";
    }
    
    $message .= "🏠 *Тип места:* " . $data['place_type'] . "\n";
    $message .= "📍 *Адрес:* " . $data['address'] . "\n";
    $message .= "💬 *Способ связи:* " . $data['contact_method'] . "\n";
    $message .= "👤 *Имя клиента:* " . $data['client_name'] . "\n";
    $message .= "📞 *Контакт:* " . $data['contact'] . "\n";
    
    if(!empty($data['invite_comments'])) {
        $message .= "✍️ *Пожелания:* " . $data['invite_comments'] . "\n";
    }
    
    $message .= "\n";
    $message .= "🌐 *IP:* " . $ip . "\n";
    $message .= "🏙 *Город:* " . ($data['city'] ?? 'не определен') . "\n";
    $message .= "🌍 *Страна:* " . ($data['country'] ?? 'не определена') . "\n";
    $message .= "🕐 *Время отправки:* " . date('d.m.Y H:i:s') . " \n";
    $message .= "\n_Статус: 📝 Новая заявка_";

    $url = "https://api.telegram.org/bot{$bot_token}/sendMessage";
    
    // Создаем inline-клавиатуру с кнопками
    $keyboard = [
        'inline_keyboard' => [
            [
                ['text' => '✅ Взять в работу', 'callback_data' => 'process_' . $inviteId],
                ['text' => '❌ Отклонить', 'callback_data' => 'reject_' . $inviteId]
            ]
        ]
    ];

    $post_data = [
        'chat_id' => $chat_id,
        'text' => $message,
        'parse_mode' => 'Markdown',
        'reply_markup' => json_encode($keyboard),
        'disable_web_page_preview' => true
    ];

    error_log("📤 Отправляю в Telegram сообщение для заявки ID: " . $inviteId);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
    $result = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_error = curl_error($ch);
    curl_close($ch);

    error_log("📥 Ответ Telegram - HTTP: $http_code, Error: $curl_error");

    if ($http_code == 200) {
        $response = json_decode($result, true);
        return $response['ok'] ?? false;
    }
    
    return false;
}



// Основная логика отправки
try {
    // Сохраняем в БД
    $inviteId = saveInviteToDB($logData, $invite_datetime);
    
    if ($inviteId === false) {
        error_log("❌ Не удалось сохранить приглашение в БД");
        logFailed($logData, 'Ошибка сохранения в БД');
        echo '<div class="error_message">Ошибка сохранения заявки. Пожалуйста, напишите в Telegram: @TheMissBlissAgency</div>';
        exit();
    }
    
    // Добавляем ID в данные для логов
    $logData['invite_id'] = $inviteId;
    
    // Отправляем в Telegram (с ID заявки)
    $telegramSent = sendInviteToTelegram($logData, $inviteId);
    
    if ($telegramSent) {
        // Логируем успех
        logSuccess($logData);
        
        // Успешная отправка
        echo '<div id="success_page"></div>';
        echo '<script>';
        echo 'console.log("✅ Заявка создана! ID: ' . $inviteId . '");';
        echo 'console.log("📤 Telegram: ✅");';
        echo 'console.log("💾 База данных: ✅ (ID: ' . $inviteId . ')");';
        echo '</script>';
        
    } else {
        logFailed($logData, 'Ошибка отправки в Telegram');
        echo '<script>';
        echo 'console.error("❌ Ошибка отправки в Telegram");';
        echo '</script>';
        echo '<div class="error_message">Заявка сохранена (ID: ' . $inviteId . '), но не удалось отправить в Telegram. Пожалуйста, напишите в Telegram: @TheMissBlissAgency</div>';
    }
} catch (Exception $e) {
    logFailed($logData, 'Исключение: ' . $e->getMessage());
    echo '<script>';
    echo 'console.error("❌ Исключение при обработке: ' . addslashes($e->getMessage()) . '");';
    echo '</script>';
    echo '<div class="error_message">Произошла ошибка при обработке приглашения. Пожалуйста, попробуйте позже или напишите нам в Telegram.</div>';
    error_log("Invite form processing error: " . $e->getMessage());
}
?>
