<?php
// common.php - общие функции и переменные

function isAuthorized() {
    if (isset($_SERVER['REMOTE_USER']) || isset($_SERVER['PHP_AUTH_USER'])) {
        return true;
    }

    $authCheckUrl = '/vip-models/check_auth.txt';
    $url = 'http://' . $_SERVER['HTTP_HOST'] . $authCheckUrl;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 2);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return ($httpCode === 200 && trim($response) === '1');
}

function getLanguageInfo($currentUri) {
    $englishSections = ['/en/', '/elite-models/'];
    $isEnglish = false;
    foreach ($englishSections as $section) {
        if (strpos($currentUri, $section) === 0) {
            $isEnglish = true;
            break;
        }
    }
    
    return [
        'isEnglish' => $isEnglish,
        'mainBasePath' => $isEnglish ? 'en/' : '',
        'modelsBasePath' => $isEnglish ? 'elite-models/' : 'vip-models/'
    ];
}

function generateLanguageLink($currentUri, $isEnglish) {
    if ($isEnglish) {
        $link = str_replace('/elite-models/', '/vip-models/', $currentUri);
        $link = str_replace('/en/', '/', $link);
        $title = 'Switch to Russian';
    } else {
        if (strpos($currentUri, '/vip-models/') === 0) {
            $link = str_replace('/vip-models/', '/elite-models/', $currentUri);
        } else {
            $link = '/en' . $currentUri;
        }
        $title = 'Switch to English';
    }
    
    return ['link' => $link, 'title' => $title];
}

// Другие общие функции могут быть добавлены здесь
?>