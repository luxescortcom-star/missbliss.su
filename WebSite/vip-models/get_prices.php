<?php
require_once __DIR__.'/rates/currency_config.php';

function roundTo1000($number) {
    return round($number / 1000) * 1000;
}

function calculatePrices($usdRate) {
    $pricesInUSD = [
        '1' => 300,      // 1 час
        '2' => 500,      // 2 часа
        '3' => 700,      // 3 часа
        '4' => 800,      // 4 часа
        '5' => 900,      // 5+ часов (средняя цена)
        '6' => 1000,     // 6 часов
        '12' => 1500,    // 12 часов
        '24' => 2000,    // 24 часа
    ];

    $pricesInRUB = [];
    foreach ($pricesInUSD as $key => $price) {
        $pricesInRUB[$key] = roundTo1000($price * $usdRate);
    }

    return $pricesInRUB;
}

$currentUsdRate = $GLOBALS['currentUsdRate'] ?? 90;
$prices = calculatePrices($currentUsdRate);

header('Content-Type: application/json');
echo json_encode($prices);
?>