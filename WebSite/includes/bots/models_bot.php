<?php
// /includes/functions/model_notifications.php

class ModelNotifier {
    private $botToken = "8299881849:AAER5_Lti47UAarGH91sqvlUhfZ0HySi2Jo";
    private $modelsData = [];
    
    public function __construct() {
        $this->loadModelsData();
    }
    
    // Загрузка данных о моделях
    private function loadModelsData() {
        // Вариант 1: Из JSON файла
        $jsonFile = $_SERVER['DOCUMENT_ROOT'] . '/includes/config/models_contacts.json';
        if (file_exists($jsonFile)) {
            $this->modelsData = json_decode(file_get_contents($jsonFile), true);
            return;
        }
        
        // Вариант 2: Из базы данных
        $this->loadModelsFromDB();
    }
    
    private function loadModelsFromDB() {
        $pdo = getDBConnection();
        if (!$pdo) return;
        
        $stmt = $pdo->query("SELECT * FROM models WHERE is_active = 1");
        $this->modelsData = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Поиск модели по имени или URL
    public function findModel($modelName, $modelUrl = '') {
        // Поиск по имени
        foreach ($this->modelsData as $model) {
            if (strcasecmp(trim($model['name']), trim($modelName)) === 0) {
                return $model;
            }
        }
        
        // Если не нашли по имени, ищем по URL
        if ($modelUrl) {
            $modelKey = $this->extractModelKeyFromUrl($modelUrl);
            foreach ($this->modelsData as $model) {
                if (isset($model['model_url']) && strpos($model['model_url'], $modelKey) !== false) {
                    return $model;
                }
            }
        }
        
        return null;
    }
    
    private function extractModelKeyFromUrl($url) {
        $parts = explode('/', trim($url, '/'));
        return end($parts); // Последняя часть URL (имя модели в URL)
    }
    
    // Отправка уведомления модели
    public function sendNotificationToModel($modelData, $inviteData) {
        if (empty($modelData['telegram_chat_id'])) {
            error_log("У модели {$modelData['name']} не указан telegram_chat_id");
            return false;
        }
        
        $chatId = $modelData['telegram_chat_id'];
        $modelName = $modelData['name'];
        $clientName = $inviteData['client_name'] ?: 'клиент';
        
        // Форматируем дату и время
        $inviteDate = date('d.m.Y H:i', strtotime($inviteData['invite_date']));
        $duration = $inviteData['duration'];
        
        // Текст сообщения (можно настраивать)
        $message = $this->formatModelMessage($modelName, $inviteDate, $duration, $clientName);
        
        // Отправка в Telegram
        return $this->sendTelegramMessage($chatId, $message);
    }
    
    // Форматирование сообщения для модели
    private function formatModelMessage($modelName, $dateTime, $duration, $clientName) {
        $durationText = $this->getDurationText($duration);
        
        return "👋 *{$modelName}*, привет!\n\n" .
               "📅 *Новая встреча:*\n" .
               "• Дата/время: {$dateTime}\n" .
               "• Продолжительность: {$duration} ч. ({$durationText})\n" .
               "• Клиент: {$clientName}\n\n" .
               "Если ты свободна в это время — напиши, пожалуйста, менеджеру в ответ на это сообщение.\n\n" .
               "❤️ Спасибо!";
    }
    
    private function getDurationText($duration) {
        $texts = [
            '1' => 'Первое впечатление',
            '2' => 'Стандартное свидание',
            '3' => 'Немного больше времени',
            '4' => 'Свидание с ужином',
            '5' => 'Расчетная стоимость',
            '6' => 'Романтичное свидание',
            '12' => 'От заката до рассвета',
            '24' => 'Полные сутки'
        ];
        
        return $texts[$duration] ?? '';
    }
    
    private function sendTelegramMessage($chatId, $message) {
        $url = "https://api.telegram.org/bot{$this->botToken}/sendMessage";
        
        $postData = [
            'chat_id' => $chatId,
            'text' => $message,
            'parse_mode' => 'Markdown',
            'disable_web_page_preview' => true
        ];
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if ($httpCode == 200) {
            $response = json_decode($result, true);
            return $response['ok'] ?? false;
        }
        
        error_log("Ошибка отправки модели: HTTP {$httpCode}, ответ: {$result}");
        return false;
    }
}
?>