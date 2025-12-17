<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

// ОТЛАДКА: логируем все POST данные
error_log("=== INVITE FORM DEBUG ===");
error_log("POST data received:");
foreach ($_POST as $key => $value) {
    error_log("  $key: " . (is_array($value) ? print_r($value, true) : $value));
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

function getModelCategoryFromUrl($url) {
    if (strpos($url, '/attractive/') !== false) {
        return 'attractive';
    } elseif (strpos($url, '/favorites/') !== false) {
        return 'favorites';
    }
    return 'favorites';
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
                    PDO::ATTR_PERSISTENT => false
                ]
            );
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

// Получаем данные из формы
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$comments = $_POST['comments'] ?? '';

// Исправляем получение телефона - учитываем оба варианта названия поля
if (empty($phone) && isset($_POST['Номер телефона'])) {
    $phone = $_POST['Номер телефона'];
}

// Улучшенная проверка имени
function isValidName($name) {
    $name = trim(preg_replace('/\s+/', ' ', $name));
    
    if (mb_strlen($name) < 2 || mb_strlen($name) > 30) {
        return false;
    }
    
    if (!preg_match('/^[\p{L}\s\'\-]+$/u', $name)) {
        return false;
    }
    
    if (preg_match('/\d/', $name)) {
        return false;
    }
    
    return true;
}

// Функция для проверки существования email
function verifyEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    
    list($user, $domain) = explode('@', $email);
    
    // Проверка MX записей домена
    if (!checkdnsrr($domain, 'MX')) {
        return false;
    }
    
    return true;
}

// Получаем IP пользователя
$ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

// Получаем информацию о стране через централизованный класс
$ipInfo = IPGeolocation::getIPInfo($ip);
$city = $ipInfo['city'];
$region = $ipInfo['region']; 
$country = $ipInfo['country_name'];

$user_agent = $_SERVER["HTTP_USER_AGENT"] ?? 'unknown';

$logData = [
    'name' => $name,
    'comments' => $comments,
    'email' => $email,
    'phone' => $phone,
    'ip' => $ip,
    'user_agent' => $user_agent,
    'city' => $city,
    'region' => $region,
    'country' => $country,
];

// Функции логирования
function logSuccess($data) {
    $logEntry = [
        'date' => date('Y-m-d H:i:s'),
        'name' => $data['name'],
        'comments' => $data['comments'],
        'email' => $data['email'],
        'phone' => $data['phone'],
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
        'name' => $data['name'] ?? null,
        'comments' => $data['comments'] ?? null,
        'email' => $data['email'] ?? null,
        'phone' => $data['phone'] ?? null,
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

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

// Получаем данные из формы приглашения
$name = $_POST['name'] ?? '';
$model_name = $_POST['model_name'] ?? '';
$model_url = $_POST['model_url'] ?? '';
$invite_datetime = $_POST['invite_datetime'] ?? '';
$duration = $_POST['duration'] ?? '';
$place_type = $_POST['place_type'] ?? '';
$address = $_POST['address'] ?? '';
$contact_method = $_POST['contact_method'] ?? '';
$telegram = $_POST['telegram'] ?? '';
$phone = $_POST['phone'] ?? '';
$invite_comments = $_POST['invite_comments'] ?? '';

// Переименовываем для удобства использования в коде
$invite_date = $invite_datetime;

// Определяем контакт в зависимости от выбранного метода
$contact = '';
if ($contact_method === 'telegram') {
    $contact = $telegram;
} elseif ($contact_method === 'phone') {
    $contact = $phone;
}

$logData = [
    'model_name' => $model_name,
    'model_url' => $model_url,
    'invite_date' => $invite_date,
    'duration' => $duration,
    'place_type' => $place_type,
    'address' => $address,
    'contact_method' => $contact_method,
    'contact' => $contact,
    'invite_comments' => $invite_comments,
    'ip' => $ip,
    'user_agent' => $user_agent,
    'city' => $city,
    'region' => $region,
    'country' => $country,
];

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

// ВЫНОСИМ ФУНКЦИИ ДЛЯ РАБОТЫ С ЦЕНАМИ В ГЛОБАЛЬНУЮ ОБЛАСТЬ ВИДИМОСТИ

function getPricesInUSD($category) {
    if ($category === 'attractive') {
        return [
            '1' => 200, '2' => 300, '3' => 400, '4' => 500,
            '5' => 600, '6' => 700, '12' => 1000, '24' => 1500
        ];
    } else { // favorites - VIP модели
        return [
            '1' => 300, '2' => 500, '3' => 700, '4' => 800,
            '5' => 900, '6' => 1000, '12' => 1500, '24' => 2000
        ];
    }
}

function roundPrice($price, $category) {
    if ($category === 'attractive') {
        return round($price / 500) * 500; // Округляем до 500
    } else {
        return round($price / 1000) * 1000; // Округляем до 1000 для VIP
    }
}

// Функция для расчета цены на основе категории и продолжительности
function calculatePriceForDuration($duration, $category, $usdRate) {
    $pricesInUSD = getPricesInUSD($category);
    
    if (isset($pricesInUSD[$duration])) {
        return roundPrice($pricesInUSD[$duration] * $usdRate, $category);
    }
    
    // Для 5+ часов используем цену за 6 часов как ориентир
    if ($duration === '5' && isset($pricesInUSD['6'])) {
        return roundPrice($pricesInUSD['6'] * $usdRate, $category);
    }
    
    return null;
}

function saveInviteToDB($data) {
    $pdo = getDBConnection();
    if (!$pdo) {
        error_log("Не удалось подключиться к БД для сохранения приглашения");
        return false;
    }
    
    try {
        // Получаем цену на основе продолжительности
        $price = null;
        $price_note = '';
        
        // Подключаем файл с ценами
        require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/rates/currency_config.php';
        
        // Получаем категорию из URL модели
        $category = getModelCategoryFromUrl($data['model_url']);
        $currentUsdRate = $GLOBALS['currentUsdRate'] ?? 90;
        $price = calculatePriceForDuration($data['duration'], $category, $currentUsdRate);
        
        // Определяем примечание к цене
        $notes = [
            '1' => 'Первое впечатление',
            '2' => 'Стандартное свидание', 
            '3' => 'Немного больше времени',
            '4' => 'Свидание с ужином',
            '5' => 'Расчетная стоимость',
            '6' => 'Романтичное свидание',
            '12' => 'От заката до рассвета',
            '24' => 'Полные сутки'
        ];
        $price_note = $notes[$data['duration']] ?? '';
        
        $sql = "
        INSERT INTO `invite` 
        (model_name, model_url, invite_date, duration, price, price_note, place_type, address, 
         contact_method, contact, invite_comments, ip, user_agent, city, region, country) 
        VALUES 
        (:model_name, :model_url, :invite_date, :duration, :price, :price_note, :place_type, :address,
         :contact_method, :contact, :invite_comments, :ip, :user_agent, :city, :region, :country)
        ";
        
        $stmt = $pdo->prepare($sql);
        
        $result = $stmt->execute([
            ':model_name' => $data['model_name'],
            ':model_url' => $data['model_url'],
            ':invite_date' => date('Y-m-d H:i:s', strtotime($data['invite_date'])),
            ':duration' => $data['duration'],
            ':price' => $price,
            ':price_note' => $price_note,
            ':place_type' => $data['place_type'],
            ':address' => $data['address'],
            ':contact_method' => $data['contact_method'],
            ':contact' => $data['contact'],
            ':invite_comments' => $data['invite_comments'],
            ':ip' => $data['ip'],
            ':user_agent' => $data['user_agent'],
            ':city' => $data['city'],
            ':region' => $data['region'],
            ':country' => $data['country']
        ]);
        
        if ($result) {
            $inviteId = $pdo->lastInsertId();
            error_log("Приглашение сохранено в БД с ID: " . $inviteId . ", цена: " . $price);
            return true;
        } else {
            error_log("Ошибка при сохранении приглашения в БД");
            return false;
        }
        
    } catch (PDOException $e) {
        error_log("Ошибка БД при сохранении приглашения: " . $e->getMessage());
        return false;
    }
}

// Функция отправки в Telegram для приглашений
function sendInviteToTelegram($data) {
    $bot_token = "1233445136:AAHQ0onuN3Pv_h2UBbufKVrJ3eH9L5Nsdoo";
    $chat_id = "-1003250816386";

    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';

    // Форматируем дату
    $invite_date_formatted = date('d.m.Y H:i', strtotime($data['invite_date']));

    $message = "🎯 *НОВОЕ ПРИГЛАШЕНИЕ*\n\n";
    $message .= "👤 *Модель:* " . $data['model_name'] . "\n";
    $message .= "🔗 *Ссылка на модель:* " . $data['model_url'] . "\n";
    $message .= "📅 *Дата и время:* " . $invite_date_formatted . "\n";
    $message .= "⏱ *Продолжительность:* " . $data['duration'] . " ч.\n";
    
    if (!empty($data['price'])) {
        $message .= "💰 *Стоимость:* " . number_format($data['price'], 0, '', ' ') . " ₽\n";
    }
    
    $message .= "🏠 *Тип места:* " . $data['place_type'] . "\n";
    $message .= "📍 *Адрес:* " . $data['address'] . "\n";
    $message .= "💬 *Способ связи:* " . $data['contact_method'] . "\n";
    $message .= "📞 *Контакт:* " . $data['contact'] . "\n";
    
    if(!empty($data['invite_comments'])) {
        $message .= "✍️ *Пожелания:* " . $data['invite_comments'] . "\n";
    }
    
    $message .= "\n";
    $message .= "🌐 *IP:* " . $ip . "\n";
    $message .= "🏙 *Город:* " . $data['city'] . "\n";
    $message .= "🌍 *Страна:* " . $data['country'] . "\n";
    $message .= "🖥 *User Agent:* " . substr($user_agent, 0, 100) . "...";

    $url = "https://api.telegram.org/bot{$bot_token}/sendMessage";
    $post_data = [
        'chat_id' => $chat_id,
        'text' => $message,
        'parse_mode' => 'Markdown'
    ];

    error_log("Attempting to send invite to chat_id: {$chat_id}");

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

    error_log("Telegram response for invite - HTTP: $http_code, Error: $curl_error, Result: $result");

    if ($http_code == 200) {
        $response = json_decode($result, true);
        return $response['ok'] ?? false;
    }
    
    return false;
}

// Основная логика отправки
try {
    // Сохраняем в БД
    $dbSaved = saveInviteToDB($logData);
    
    if (!$dbSaved) {
        error_log("Не удалось сохранить приглашение в БД, но продолжаем отправку в Telegram");
    }
    
    // Отправляем в Telegram
    $telegramSent = sendInviteToTelegram($logData);
    
    if ($telegramSent) {
        // Логируем успех
        logSuccess($logData);
        
        // Успешная отправка - простой маркер для JavaScript
        echo '<div id="success_page"></div>';
        
    } else {
        logFailed($logData, 'Ошибка отправки в Telegram');
        echo '<div class="error_message">Не удалось отправить приглашение. Пожалуйста, напишите в Telegram: @TheMissBlissAgency</div>';
    }
} catch (Exception $e) {
    logFailed($logData, 'Исключение: ' . $e->getMessage());
    echo '<div class="error_message">Произошла ошибка при обработке приглашения. Пожалуйста, попробуйте позже или напишите нам в Telegram.</div>';
    error_log("Invite form processing error: " . $e->getMessage());
}

?>