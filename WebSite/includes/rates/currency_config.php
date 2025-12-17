<?php
// /includes/rates/currency_config.php

// Настройки кэширования
$cacheFile = __DIR__.'/usd_rate_cache.json';
$cacheTime = 86400; // 24 часа в секундах

// Настройки допустимого диапазона курса
$minAllowedRate = 85; // Минимально допустимый курс
$maxAllowedRate = 200; // Максимально допустимый курс
$defaultRate = 90;    // Курс по умолчанию

// Функция для получения курса USD с кэшированием
function getUsdRateWithCache($cacheFile, $cacheTime) {
    // Проверяем актуальность кэша
    if (file_exists($cacheFile) && 
        (time() - filemtime($cacheFile) < $cacheTime)) {
        $cacheData = json_decode(file_get_contents($cacheFile), true);
        if (isset($cacheData['rate']) && isset($cacheData['date'])) {
            return $cacheData;
        }
    }
    
    // Получаем свежий курс от ЦБ РФ
    $url = 'https://www.cbr.ru/scripts/XML_daily.asp';
    
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT => 10
    ]);
    
    $content = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);
    
    if ($error) {
        error_log("Ошибка получения курса USD: " . $error);
        return false;
    }
    
    $xml = simplexml_load_string($content);
    if (!$xml) {
        error_log("Ошибка разбора XML от ЦБ РФ");
        return false;
    }
    
    $usdRate = null;
    foreach ($xml->Valute as $item) {
        if ((string)$item['ID'] === 'R01235') { // Доллар США
            $usdRate = (float)str_replace(',', '.', (string)$item->Value);
            break;
        }
    }
    
    if ($usdRate) {
        $cacheData = [
            'rate' => $usdRate,
            'date' => date('Y-m-d H:i:s'),
            'source' => 'ЦБ РФ'
        ];
        file_put_contents($cacheFile, json_encode($cacheData));
        return $cacheData;
    }
    
    return false;
}

// Основная логика
try {
    // Получаем курс (из кэша или API)
    $rateData = getUsdRateWithCache($cacheFile, $cacheTime);
    
    // Определяем текущий курс с учетом диапазона
    $currentRate = $defaultRate;
    if (isset($rateData['rate'])) {
        $fetchedRate = $rateData['rate'];
        if ($fetchedRate >= $minAllowedRate && $fetchedRate <= $maxAllowedRate) {
            $currentRate = $fetchedRate;
        }
    }
    
    $GLOBALS['currentUsdRate'] = $currentRate;
    
    // Функция для ручного обновления курса
    function updateUsdRate($newRate) {
        $cacheFile = __DIR__.'/usd_rate_cache.json';
        $cacheData = [
            'rate' => $newRate,
            'date' => date('Y-m-d H:i:s'),
            'source' => 'manual'
        ];
        file_put_contents($cacheFile, json_encode($cacheData));
        $GLOBALS['currentUsdRate'] = $newRate;
    }
    
    // Логирование для отладки (можно убрать в продакшене)
    if (isset($_GET['debug_currency'])) {
        header('Content-Type: application/json');
        echo json_encode([
            'current_rate' => $GLOBALS['currentUsdRate'],
            'last_update' => $rateData['date'] ?? 'never',
            'source' => $rateData['source'] ?? 'default',
            'cache_file' => $cacheFile,
            'rate_range' => [
                'min_allowed' => $minAllowedRate,
                'max_allowed' => $maxAllowedRate,
                'default' => $defaultRate
            ],
            'fetched_rate' => $rateData['rate'] ?? 'none'
        ], JSON_PRETTY_PRINT);
        exit;
    }
    
} catch (Exception $e) {
    error_log("Currency config error: " . $e->getMessage());
    $GLOBALS['currentUsdRate'] = $defaultRate;
}
?>