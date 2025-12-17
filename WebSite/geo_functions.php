<?php
if (!class_exists('GeoLocator')) {

// Подключаем централизованный геолокатор
require_once __DIR__ . '/geoip/ip_geolocation.php';

class GeoLocator {
    private static $testMode = false;
    private static $forcedCity = null;

    public static function getJobText() {
        $city = self::getUserCity();
        
        if (!$city) {
            return "Работа для девушек";
        }

        // Специальные города
        $specialCities = [
            'москва' => "Москве",
            'moscow' => "Москве",
            'санкт-петербург' => "Санкт-Петербурге",
            'petersburg' => "Санкт-Петербурге",
            'spb' => "Санкт-Петербурге",
            'spe' => "Санкт-Петербурге",
			'krasnodar' => "Краснодаре",
            'ekaterinburg' => "Екатеринбурге",
            'rostov-on-don' => "Ростове",
			'kazan' => "Казани",
            'samara' => "Самаре",
            'sochi' => "Сочи",
			'novosibirsk' => "Новосибирске",
            'krasnoyarsk' => "Красноярске",
            'omsk' => "Омске",
			'voronezh' => "Воронеже",
            'perm' => "Перми",
            'volgograd' => "Волгограде",
        ];

        $normalizedCity = self::normalizeCityName($city);
        foreach ($specialCities as $pattern => $text) {
            if (strpos($normalizedCity, $pattern) !== false) {
                return "Работа для девушек в " . $text;
            }
        }

        // Остальные города
        return "Работа для девушек в " . self::inflectCityName($city);
    }

    /**
     * Определение города пользователя
     */
    private static function getUserCity() {
        if (self::$forcedCity !== null) {
            return self::$forcedCity;
        }

        $ip = self::$testMode ? '192.168.1.226' : $_SERVER['REMOTE_ADDR'];
        
        // Используем централизованный класс
        $ipInfo = IPGeolocation::getIPInfo($ip);
        
        return $ipInfo['city'] ?? null;
    }


    /**
     * Установка тестового города
     */
    public static function setTestCity($city) {
        self::$forcedCity = $city;
    }

    /**
     * Нормализация названия города
     */
    private static function normalizeCityName($city) {
        $city = preg_replace('/^(st\.?|saint)\s*/i', '', $city);
        return mb_strtolower(trim($city));
    }

    /**
     * Склонение названия города
     */
    private static function inflectCityName($city) {
        $city = trim($city);
        $lower = mb_strtolower($city);
        
        // Русские названия
        if (preg_match('/[а-яё]/iu', $city)) {
            if (mb_substr($lower, -3) === 'град') {
                return mb_substr($city, 0, -3) . 'граде';
            }
            if (mb_substr($lower, -2) === 'ск') {
                return mb_substr($city, 0, -2) . 'ске';
            }
            return $city . 'е';
        }
        
        return $city;
    }
}

} // Конец проверки class_exists
?>