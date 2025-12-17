<?php
// geo_api.php
require_once $_SERVER['DOCUMENT_ROOT'] . '/geoip/ip_geolocation.php';

header('Content-Type: application/json');
header('Cache-Control: max-age=3600');
header('Access-Control-Allow-Origin: *');

// Получаем реальный IP клиента
function getRealClientIP() {
    $ip = '';
    
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        // Может быть несколько IP через запятую
        $ipList = explode(',', $ip);
        $ip = trim($ipList[0]);
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED'];
    } elseif (!empty($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_FORWARDED_FOR'];
    } elseif (!empty($_SERVER['HTTP_FORWARDED'])) {
        $ip = $_SERVER['HTTP_FORWARDED'];
    } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    
    // Очищаем IP от лишних символов
    $ip = filter_var($ip, FILTER_VALIDATE_IP) ? $ip : 'unknown';
    
    return $ip;
}

// Используем переданный IP или определяем клиентский
$ip = $_GET['ip'] ?? getRealClientIP();

// Логируем все данные для отладки
$debugInfo = [
    'timestamp' => date('Y-m-d H:i:s'),
    'client_ip' => $ip,
    'remote_addr' => $_SERVER['REMOTE_ADDR'] ?? 'not_set',
    'http_forwarded' => $_SERVER['HTTP_X_FORWARDED_FOR'] ?? 'not_set',
    'get_params' => $_GET,
    'server_name' => $_SERVER['SERVER_NAME'] ?? 'not_set',
    'request_uri' => $_SERVER['REQUEST_URI'] ?? 'not_set',
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'not_set'
];

// Логируем в файл для отладки
$logMessage = "GEO_API_DEBUG: " . json_encode($debugInfo, JSON_UNESCAPED_UNICODE);
error_log($logMessage);

// Также создаем отдельный лог-файл
file_put_contents('/tmp/geo_api_debug.log', $logMessage . PHP_EOL, FILE_APPEND);

try {
    if (isset($_GET['country_code_only'])) {
        error_log("GEO_API: Getting country code for IP: $ip");
        
        // Получаем код страны
        $countryCode = IPGeolocation::getCountryCode($ip);
        error_log("GEO_API: Raw country code: " . $countryCode);
        
        // Проверяем валидность
        $countryCode = (is_string($countryCode) && strlen($countryCode) === 2) ? $countryCode : '';
        
        $response = [
            'success' => true,
            'country_code' => $countryCode,
            'ip' => $ip,
            'debug' => $debugInfo,
            'raw_code' => $countryCode // Добавляем сырой код для отладки
        ];
        
        error_log("GEO_API: Response: " . json_encode($response));
        
        echo json_encode($response, JSON_UNESCAPED_UNICODE);
    } else {
        error_log("GEO_API: Getting full info for IP: $ip");
        $data = IPGeolocation::getIPInfo($ip);
        $response = array_merge(['success' => true], $data, ['debug' => $debugInfo]);
        echo json_encode($response, JSON_UNESCAPED_UNICODE);
    }
} catch (Exception $e) {
    error_log("GEO_API ERROR: " . $e->getMessage() . " | IP: $ip");
    
    $response = [
        'success' => false,
        'error' => $e->getMessage(),
        'country_code' => '',
        'ip' => $ip,
        'debug' => $debugInfo
    ];
	
	// Добавляем отладочную информацию в ответ
if (isset($_GET['country_code_only'])) {
    $debugResponse = [
        'success' => true,
        'country_code' => $countryCode,
        'country' => $data['country'] ?? '', // Добавляем исходное поле country
        'ip' => $ip,
        'debug_info' => [
            'api_used' => 'ipinfo.io',
            'cache_used' => file_exists($cacheFile) ? 'yes' : 'no',
            'response_fields' => array_keys($data)
        ]
    ];
    
    error_log("GEO_API Response: " . json_encode($debugResponse));
    echo json_encode($debugResponse, JSON_UNESCAPED_UNICODE);
}
    
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
}
?>