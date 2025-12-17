<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Начало сессии
session_start();

// Защита от ботов
if(!empty($_POST['website'])) die();

define('SUCCESS_LOGS_DIR', __DIR__.'/logs/casting_success/');
define('FAILED_LOGS_DIR', __DIR__.'/logs/casting_failed/');

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

// Функция для получения информации о стране по IP
function getIpInfo($ip) {
    // Для бесплатного хостинга упрощаем - возвращаем базовую информацию
    $cacheDir = __DIR__ . '/ip_cache';
    $cacheFile = $cacheDir . '/' . md5($ip) . '.json';
    $cacheTime = 30 * 24 * 3600;
    
    if (!is_dir($cacheDir)) {
        mkdir($cacheDir, 0755, true);
    }
    
    if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheTime)) {
        $cachedData = json_decode(file_get_contents($cacheFile), true);
        if ($cachedData) {
            return $cachedData;
        }
    }
    
    // Упрощенная версия для бесплатного хостинга
    $data = [
        'ip' => $ip,
        'city' => 'не определен',
        'region' => 'не определен', 
        'country_name' => 'не определена',
        'currency' => '',
        'currency_name' => ''
    ];
    
    file_put_contents($cacheFile, json_encode($data, JSON_UNESCAPED_UNICODE));
    return $data;
}

// Получаем IP пользователя
$ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

// Получаем информацию о стране
$ipInfo = getIpInfo($ip);
$city = $ipInfo['city'] ?? 'не определен';
$region = $ipInfo['region'] ?? 'не определен';
$country = $ipInfo['country_name'] ?? 'не определена';

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

// ВАЖНО: Убираем проверку reCAPTCHA для бесплатного хостинга
// На InfinityFree могут быть проблемы с внешними запросами

// Проверка имени
if(!isValidName($name)) {
    echo '<div class="error_message">Inserisci un nome valido (solo lettere, niente numeri).</div>';
    logFailed($logData, 'Неверное имя');
    exit();
} 

// Проверка email
if(empty($email) || $email == 'E-mail') {
    echo '<div class="error_message">Inserisci il tuo indirizzo email.</div>';
    logFailed($logData, 'Не введен e-mail');
    exit();
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<div class="error_message">Hai inserito un indirizzo email errato. Riprova.</div>';
    logFailed($logData, 'Неверный формат e-mail');
    exit();
}

if(!verifyEmail($email)) {
    echo '<div class="error_message">Hai inserito un indirizzo email non valido. Riprova.</div>';
    logFailed($logData, 'Несуществующий e-mail');
    exit();
}

if($name == '' || $name == 'Il tuo nome') {
    echo '<div class="error_message">Inserisci il tuo nome.</div>';
    logFailed($logData, 'Пустое поле имени');
    exit();
}

if(trim($phone) == '') {
    echo '<div class="error_message">Inserisci il tuo numero di telefono.</div>';
    logFailed($logData, 'не вписан номер телефона');
    exit();
}

if(!isPhone($phone)) {
    echo '<div class="error_message">Inserisci un numero di telefono valido.</div>';
    logFailed($logData, 'не корректный номер телефона');
    exit();
}

if(isBlacklisted($email, $comments)) {
    echo '<div class="error_message">Il tuo indirizzo o messaggio è nella lista nera.</div>';
    logFailed($logData, 'Email или сообщения в черном списке');
    exit();
}

if((trim($comments) == 'Il tuo breve CV') || (trim($comments) == '')) {
    echo '<div class="error_message">Per favore, inviaci un breve CV. <a href=#mail title="Cosa scrivere di te?">Cosa scrivere di te??</a></div>';
    exit();
}

if(mb_strlen($comments) > 300) {
   echo '<div class="error_message">Per favore scrivi un po\' più corto. - <a href=#mail title="Required resume">Curriculum vitae richiesto?</a></div>';
    exit();
}

if(get_magic_quotes_gpc()) {
    $comments = stripslashes($comments);
}

// Функция отправки в Telegram (исправленная версия)
function sendToTelegram($data) {
    $bot_token = "1233445136:AAHQ0onuN3Pv_h2UBbufKVrJ3eH9L5Nsdoo";
    $chat_id = "-5061095611"; // ID вашей группы MissBlissChat

    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';

    $message = "🎯 *NEW CASTING APPLICATION*\n\n";
    $message .= "👤 *Имя:* " . $data['name'] . "\n";
    $message .= "📧 *Email:* " . $data['email'] . "\n";
    $message .= "📞 *Телефон:* " . $data['phone'] . "\n";
    $message .= "💬 *Сообщение:*\n" . $data['comments'] . "\n\n";
    $message .= "🌐 *IP:* " . $ip . "\n";
    $message .= "🖥 *User Agent:* " . substr($user_agent, 0, 100) . "...";

    $url = "https://api.telegram.org/bot{$bot_token}/sendMessage";
    $post_data = [
        'chat_id' => $chat_id,
        'text' => $message,
        'parse_mode' => 'Markdown'
    ];

    error_log("Attempting to send to chat_id: {$chat_id}");

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

    error_log("Telegram response - HTTP: $http_code, Error: $curl_error, Result: $result");

    if ($http_code == 200) {
        $response = json_decode($result, true);
        return $response['ok'] ?? false;
    }
    
    return false;
}

// Основная логика отправки
try {
    // Отправляем в Telegram
    if (sendToTelegram(['name' => $name, 'email' => $email, 'phone' => $phone, 'comments' => $comments])) {
        // Логируем успех
        logSuccess($logData);
        
        echo "<fieldset>";
        echo "<div id='success_page'>";
        echo "<h1>Grazie, <strong>$name</strong>!</h1>";
        echo "<p>La tua richiesta è stata ricevuta! Ti contatteremo entro 2 ore.</p>";
        echo "<p>Se hai bisogno di una risposta urgente, contattaci su Telegram:</p>";
        echo "<p><a href='https://t.me/TheMissBlissAgency' style='color: #0088cc; text-decoration: none;' target='_blank'>📱 Scrivi a Telegram</a></p>";
        echo "</div>";
        echo "</fieldset>";
    } else {
        logFailed($logData, 'Error sending to Telegram');
        echo '<div class="error_message">Impossibile inviare la candidatura. Contattaci su Telegram: @TheMissBlissAgency</div>';
    }
} catch (Exception $e) {
    logFailed($logData, 'Исключение: ' . $e->getMessage());
    echo '<div class="error_message">Si è verificato un errore durante l\'elaborazione della tua richiesta. Riprova più tardi o contattaci su Telegram.</div>';
    error_log("Form processing error: " . $e->getMessage());
}

?>