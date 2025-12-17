<?php

define('SUCCESS_LOGS_DIR', __DIR__.'/logs/success/');
define('FAILED_LOGS_DIR', __DIR__.'/logs/failed/');


// Создаем директории если их нет
if (!is_dir(SUCCESS_LOGS_DIR)) mkdir(SUCCESS_LOGS_DIR, 0755, true);
if (!is_dir(FAILED_LOGS_DIR)) mkdir(FAILED_LOGS_DIR, 0755, true);



if(!empty($_POST['website'])) die();

define('BLACKLIST_FILE', __DIR__.'/blacklist.json');
define('SPAM_PATTERNS_FILE', __DIR__.'/spam_patterns.txt');

// Функция для проверки черного списка
function isBlacklisted($email, $message) {
    // Проверка email в черном списке
    if (file_exists(BLACKLIST_FILE)) {
        $blacklist = file(BLACKLIST_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
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


function updateBlacklist($failedLogsDir) {
    $blacklist = [];
    $threshold = 3; // Количество попыток для попадания в черный список
    
    // Анализируем все файлы с неудачными попытками
    foreach (glob($failedLogsDir . 'failed_*.json') as $file) {
        $entries = json_decode(file_get_contents($file), true) ?: [];
        foreach ($entries as $entry) {
            $key = $entry['ip'] . '|' . ($entry['email'] ?? '');
            if (!isset($blacklist[$key])) {
                $blacklist[$key] = 0;
            }
            $blacklist[$key]++;
        }
    }
    
    // Формируем черный список
    $result = [];
    foreach ($blacklist as $key => $count) {
        if ($count >= $threshold) {
            list($ip, $email) = explode('|', $key);
            if ($email) $result['emails'][] = $email;
            if ($ip) $result['ips'][] = $ip;
        }
    }
    
    // Сохраняем черный список
    file_put_contents(__DIR__.'/blacklist.json', json_encode($result));
}



$token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if (!empty($token)) {
        if (hash_equals($_SESSION['token'], $token)) {
            /* The Following to get response back from Google recaptcah */
            $url = "https://www.google.com/recaptcha/api/siteverify";
			$secretKey = "6LfuQ2gUAAAAAC9Mr4FnnoG2cN4V2GDckkG7khbP";

            $remoteServer = filter_input(INPUT_SERVER, 'REMOTE_ADDR', FILTER_SANITIZE_URL);
            $response =  file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
            $recaptcha_data = json_decode($response);
            /* The actual check of the recaptcha */
            if (isset($recaptcha_data->success) && $recaptcha_data->success === TRUE) {
                $data['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $data['email'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                $data['phone'] = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
                $data['comments'] = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $send = new Email($data);
            } else {
                $success = "You're not a human!"; // Not of a production server:
            }
        } else {
            echo '<div class="error_message">Вы не человек</div>';
        }
    }


#if(!$_POST) exit;


// Email address verification, do not edit.
function isEmail($email) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}

function isPhone($phone)
{

	$phone = preg_replace('/\s|\+|-|\(|\)/','', $phone); // удалим пробелы, и прочие не нужные знаки

	if(is_numeric($phone))
	{
		if(strlen($phone) < 11) // если длина номера слишком короткая, вернем false
		{
			return FALSE;
		}
		else
		{
			return $phone;
		}
	}
	else
	{
		return FALSE;
	}
}



if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];


// Улучшенная проверка имени
function isValidName($name) {
    // Удаляем лишние пробелы
    $name = trim(preg_replace('/\s+/', ' ', $name));
    
    // Проверяем длину
    if (mb_strlen($name) < 2 || mb_strlen($name) > 30) {
        return false;
    }
    
    // Проверяем, что имя состоит из букв и допустимых символов
    if (!preg_match('/^[\p{L}\s\'\-]+$/u', $name)) {
        return false;
    }
    
    // Проверяем, что имя не содержит цифр
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
    
    // Дополнительная проверка через API (необязательно)
    // Это может замедлить обработку формы
  
    $response = @file_get_contents("https://api.mailgun.net/v4/address/validate?address=".urlencode($email));
    if ($response !== false) {
        $result = json_decode($response, true);
        return $result['is_valid'];
    }
   
    
    return true;
}

// Функция для получения информации о стране по IP

function getIpInfo($ip) {
    $cacheDir = __DIR__ . '/ip_cache';
    $cacheFile = $cacheDir . '/' . md5($ip) . '.json';
    $cacheTime = 30 * 24 * 3600; // 30 дней кэширования
    
    // Создаем директорию для кэша, если ее нет
    if (!is_dir($cacheDir)) {
        mkdir($cacheDir, 0755, true);
    }
    
    // Проверяем актуальный кэш
    if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheTime)) {
        $cachedData = file_get_contents($cacheFile);
        $result = json_decode($cachedData, true);
        
        // Проверяем, что данные в кэше валидны
        if (is_array($result) && isset($result['ip'])) {
            return $result;
        }
        // Если кэш битый - удаляем его
        unlink($cacheFile);
    }
    
    // Делаем новый запрос к API
    $token = '333184df601514';
    $url = "https://api.ipinfo.io/lite/{$ip}?token={$token}";
    
    $response = @file_get_contents($url);
    if ($response === false) {
        return null;
    }
    
    // Парсим ответ API
    $lines = explode("\n", trim($response));
    $result = [];
    
    foreach ($lines as $line) {
        $parts = explode(':', $line, 2);
        if (count($parts) === 2) {
            $key = trim($parts[0], " \t\n\r\0\x0B\"'");
            $value = trim($parts[1], " \t\n\r\0\x0B\"'");
            $result[$key] = $value;
        }
    }
    
    // Добавляем IP в результат для проверки
    $result['ip'] = $ip;
    
    // Сохраняем в кэш
    file_put_contents($cacheFile, json_encode($result, JSON_UNESCAPED_UNICODE));
    
    return $result;
}



// Получаем IP пользователя
$ip = $_SERVER['REMOTE_ADDR'];

// Получаем информацию о стране
$ipInfo = getIpInfo($ip);

// Форматируем данные страны
$country = isset($ipInfo['country']) ? trim($ipInfo['country'], ',') : 'не определена';
$country_code = isset($ipInfo['country_code']) ? trim($ipInfo['country_code'], ',') : '';

// Формируем строку с информацией о стране
$countryInfo = '';
if ($country !== 'не определена' && $country_code !== '') {
    $countryInfo = "Страна: " . rtrim($country, ',') . " (" . rtrim($country_code, ',') . ")\r\n";
}

// Формируем текст письма



$email = trim($_POST['email']);

// Получаем email из формы
$email = trim($_POST['email']);

// Проверка на пустое поле или значение по умолчанию
if($email == '' || $email == 'E-mail') {
    echo '<div class="error_message">Введите e-mail адрес.</div>';
    logFailed($logData, 'Не введен e-mail');
    exit();
}

// Проверка валидности формата email
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<div class="error_message">Вы ввели неверный e-mail адрес. Попробуйте ещё раз.</div>';
    logFailed($logData, 'Неверный формат e-mail');
    exit();
}

// Проверка существования домена (опционально)
if(!verifyEmail($email)) {
    echo '<div class="error_message">Вы ввели несуществующий e-mail адрес. Попробуйте ещё раз.</div>';
    logFailed($logData, 'Несуществующий e-mail');
    exit();
}


if(!isValidName($name)) {
    echo '<div class="error_message">Пожалуйста, введите корректное имя (только буквы, без цифр).</div>';
	logFailed($logData, 'Неверное имя');
    exit();
} else if($name == '' || $name == 'Ваше Имя') {
	echo '<div class="error_message">Впишите Ваше имя.</div>';
	logFailed($logData, 'Неверное имя');
	exit();
} else if(mb_strlen($name) > 30)  {
   echo '<div class="error_message">Пожалуйста, в поле Имя - пишите только имя, ваше сообшение пишите в поле ниже</div>';
	exit();
}   else if(trim($phone) == '') {
	echo '<div class="error_message">Введите номер вашего телефона.</div>';
	exit();
} else if(!isPhone($phone) == 'FALSE') {
	echo '<div class="error_message">Пожалуйста, введите корректный номер телефона</div>';
	logFailed($logData, 'не корректный номер телефона');
	exit();
 } else if(isBlacklisted($email, $comments)) {
    echo '<div class="error_message">Ваш адрес или сообщение в черном списке.<a href=#fee title="Правила обработки почты">Ограничения</a></div>';
	logFailed($logData, 'Email или сообщения в черном списке');
    exit();
} else if((trim($comments) == 'Сообщение')OR(trim($comments) == '')) {
	echo '<div class="error_message">Напишите ваше сообщение <a href=#mail title="Как быстро получить ответ?">Что написать?</a></div>';
	exit();
} else if(mb_strlen($comments) > 300) {
   echo '<div class="error_message">Пожалуйста, пишите кратко ваши пожелания.</div>';
	exit();

}else  if (isset($recaptcha_data->success) && $recaptcha_data->success === FALSE) {
echo '<div class="error_message">Вы не похожи на человека</div>';
	logFailed($logData, 'recapcha - не похож на человека');
	exit();

}  


 $user_agent = $_SERVER["HTTP_USER_AGENT"];

$logData = [
    'name' => $name,
	'comments' => $comments,
    'email' => $email,
    'phone' => $phone,
    'ip' => $ip,
    'user_agent' => $user_agent,
    'country' => $country,
    'country_code' => $country_code
];


function logSuccess($data) {
    $logEntry = [
        'date' => date('Y-m-d H:i:s'),
        'name' => $data['name'],
		'comments' => $data['comments'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'country' => $data['country'] ??  null,
        'country_code' => $data['country_code'] ?? null,
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
        'ip' => $data['ip'],
        'user_agent' => $data['user_agent'] ?? null,
        'reason' => $reason
    ];
    
    $filename = FAILED_LOGS_DIR . 'failed_' . date('Y-m-d') . '.json';
    appendToJsonLog($filename, $logEntry);
}

function appendToJsonLog($filename, $entry) {
    // Создаем новый файл или читаем существующий
    $logs = [];
    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        $logs = json_decode($content, true) ?: [];
    }
    
    // Добавляем новую запись
    $logs[] = $entry;
    
    // Сохраняем обратно
    file_put_contents($filename, json_encode($logs, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}






if(get_magic_quotes_gpc()) {
	$comments = stripslashes($comments);
}

// Добавьте эту информацию в письмо





// Configuration option.
// Enter the email address that you want to emails to be sent to.
// Example $address = "joe.doe@yourdomain.com";

//$address = "example@themeforest.net";
$address = "office@lux-escort.com";




$e_subject = "$name - $country";



$e_body = "$name, $country" . PHP_EOL . PHP_EOL;

$e_reply = "E-mail: $email\r\nТелефон: $phone\r\n$countryInfo"."IP: $ip\r\nUser Agent: $user_agent";
$e_content = "Сообщение:\r\n$comments" . PHP_EOL . PHP_EOL;


$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );


$headers = "From: $address" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" .  PHP_EOL;


if(mail($address, $e_subject, $msg, $headers)) {

	// Email has sent successfully, echo a success page.
   
	echo "<fieldset>";
	echo "<div id='success_page'>";
	echo "<h1>Спасибо, <strong>$name</strong></h1>";
	echo "<p>Ваше сообщение будет доставлено нам в течении одной минуты.<br>Мы постараемся вам ответить как можно быстрее.</p>";
	echo "</div>";
	echo "</fieldset>";
    logSuccess($logData);
} else {
    logFailed($logData);
	echo 'ERROR!';
	

}
?>
