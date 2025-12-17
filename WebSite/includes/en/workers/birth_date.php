<?php
function calculateAge($birthdate) {
    // Преобразуем дату рождения в объект DateTime
    $birthdate = new DateTime($birthdate);
    
    // Получаем текущую дату
    $today = new DateTime();
    
    // Вычисляем разницу между датами
    $age = $today->diff($birthdate);
    
    // Возвращаем количество лет
    return $age->y;
}

function getZodiacSign($birthdate) {
    // Преобразуем дату рождения в объект DateTime
    $birthdate = new DateTime($birthdate);
    
    // Извлекаем месяц и день
    $month = $birthdate->format('m');
    $day = $birthdate->format('d');

    // Определяем знак зодиака
    if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
        return '&#9800; Aries'; // ♈ Овен
    } elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
        return '&#9801; Taurus'; // ♉ Телец
    } elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
        return '&#9802; Gemini'; // ♊ Близнецы
    } elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
        return '&#9803; Сrayfish'; // ♋ Рак
    } elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
        return '&#9804; Lion'; // ♌ Лев
    } elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
        return '&#9805; Virgo'; // ♍ Дева
    } elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
        return '&#9806; Libra'; // ♎ Весы
    } elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
        return '&#9807; Scorpio'; // ♏ Скорпион
    } elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
        return '&#9808; Archer'; // ♐ Стрелец
    } elseif (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
        return '&#9809; Capricorn'; // ♑ Козерог
    } elseif (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
        return '&#9810; Aquarius'; // ♒ Водолей
    } else {
        return '&#9811; Fishes'; // ♓ Рыбы
    }
}

function getAgeWithDeclension($birthdate) {
    // Вычисляем возраст
    $age = calculateAge($birthdate);
    
    // Определяем правильное склонение слова "год"
    $lastDigit = $age % 10; // Последняя цифра возраста
    $lastTwoDigits = $age % 100; // Последние две цифры возраста

    if ($lastTwoDigits >= 11 && $lastTwoDigits <= 14) {
        $declension = 'y.o.';
    } else {
        switch ($lastDigit) {
            case 1:
                $declension = 'y.o.';
                break;
            case 2:
            case 3:
            case 4:
                $declension = 'y.o.';
                break;
            default:
                $declension = 'y.o.';
        }
    }

    // Получаем знак зодиака
    $zodiacSign = getZodiacSign($birthdate);

    // Возвращаем массив с возрастом и знаком зодиака
    return [
        'age' => "$age $declension",
        'zodiac' => $zodiacSign,
    ];
}
$ageData = getAgeWithDeclension($birthdate);
?>