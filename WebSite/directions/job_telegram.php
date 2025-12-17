<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Начало сессии
session_start();

// Защита от ботов
if(!empty($_POST['website'])) die();

// Получаем данные из формы
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$comments = $_POST['comments'] ?? '';

// Валидация данных
if(empty($name) || $name == 'Ваше Имя') {
    echo '<div class="error_message">Пожалуйста, введите ваше имя.</div>';
    exit();
}

if(empty($email) || $email == 'E-mail') {
    echo '<div class="error_message">Пожалуйста, введите ваш E-Mail адрес.</div>';
    exit();
}

if(empty($phone)) {
    echo '<div class="error_message">Пожалуйста, введите номер вашего телефона.</div>';
    exit();
}

if(empty($comments) || $comments == 'Ваше резюме') {
    echo '<div class="error_message">Напишите коротко о себе.</div>';
    exit();
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<div class="error_message">Вы ввели неправильный адрес электронной почты.</div>';
    exit();
}

// Функция отправки в Telegram
function sendToTelegram($data) {
    // === НАСТРОЙКИ ===
    $bot_token = "1233445136:AAHQ0onuN3Pv_h2UBbufKVrJ3eH9L5Nsdoo"; // Замените на ваш токен
    $chat_id = "JoyProvider"; // Замените на ваш chat_id

    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';

    $message = "🎯 *НОВАЯ ЗАЯВКА НА КАСТИНГ*\n\n";
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

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    $result = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $http_code == 200;
}

// Отправляем в Telegram
if (sendToTelegram(['name' => $name, 'email' => $email, 'phone' => $phone, 'comments' => $comments])) {
    echo "<fieldset>";
    echo "<div id='success_page'>";
    echo "<h1>Спасибо, <strong>$name</strong>!</h1>";
    echo "<p>Ваша заявка получена! Мы свяжемся с вами в течение 24 часов.</p>";
    echo "<p>Если нужен срочный ответ, напишите нам в Telegram:</p>";
    echo "<p><a href='https://t.me/YourManager' style='color: #0088cc; text-decoration: none;' target='_blank'>📱 Написать в Telegram</a></p>";
    echo "</div>";
    echo "</fieldset>";
} else {
    echo '<div class="error_message">Не удалось отправить заявку. Пожалуйста, напишите нам напрямую в Telegram.</div>';
}
?>