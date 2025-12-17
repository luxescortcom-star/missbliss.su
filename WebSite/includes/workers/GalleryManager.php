<?php
class GalleryManager {
    private $db;
    private $cacheDir;
    
    // Время жизни кэшей
    const FILE_CACHE_LIFETIME = 604800; // 1 неделя
    const DB_CACHE_LIFETIME = 2592000; // 30 дней
    
    public function __construct($dbConnection) {
        $this->db = $dbConnection;
        $this->cacheDir = $_SERVER['DOCUMENT_ROOT'] . '/cache/gallery_structure';
        
        // Создаем папку для кэша, если нет
        if (!is_dir($this->cacheDir)) {
            mkdir($this->cacheDir, 0755, true);
        }
    }
    
    /**
     * Основной метод получения структуры галереи
     */
    public function getGalleryStructure($city, $picsFolio, $folder, $deviceType = 'desktop') {
        $cacheKey = $this->buildCacheKey($city, $picsFolio, $folder, $deviceType);
        
        // 1. Проверяем файловый кэш
        $fileCache = $this->getFileCache($cacheKey);
        if ($fileCache !== null) {
            echo "<!-- Используем файловый кэш -->\n";
            return $fileCache;
        }
        
        // 2. Проверяем кэш в базе данных
        $dbCache = $this->getDBCache($cacheKey);
        if ($dbCache !== null) {
            echo "<!-- Используем кэш из БД -->\n";
            // Обновляем файловый кэш для будущих запросов
            $this->setFileCache($cacheKey, $dbCache);
            return $dbCache;
        }
        
        // 3. Если кэша нет - сканируем FTP
        echo "<!-- Сканируем FTP -->\n";
        $structure = $this->scanFTP($picsFolio, $folder);
        
        // Сохраняем в оба кэша
        $this->setDBCache($cacheKey, $structure);
        $this->setFileCache($cacheKey, $structure);
        
        return $structure;
    }
    
    /**
     * Принудительное обновление структуры (для админки)
     */
    public function forceUpdate($city, $picsFolio, $folder, $deviceType = 'desktop') {
        $cacheKey = $this->buildCacheKey($city, $picsFolio, $folder, $deviceType);
        
        // Сканируем FTP
        $structure = $this->scanFTP($picsFolio, $folder);
        
        // Обновляем оба кэша
        $this->setDBCache($cacheKey, $structure, true);
        $this->setFileCache($cacheKey, $structure);
        
        return $structure;
    }
    
    /**
     * Построение ключа кэша
     */
    private function buildCacheKey($city, $picsFolio, $folder, $deviceType) {
        return md5("{$city}_{$picsFolio}_{$folder}_{$deviceType}");
    }
    
    /**
     * Работа с файловым кэшем
     */
    private function getFileCache($cacheKey) {
        $cacheFile = $this->cacheDir . '/' . $cacheKey . '.json';
        
        if (file_exists($cacheFile) && 
            (time() - filemtime($cacheFile)) < self::FILE_CACHE_LIFETIME) {
            return json_decode(file_get_contents($cacheFile), true);
        }
        
        return null;
    }
    
    private function setFileCache($cacheKey, $data) {
        $cacheFile = $this->cacheDir . '/' . $cacheKey . '.json';
        file_put_contents($cacheFile, json_encode($data, JSON_PRETTY_PRINT));
    }
    
    /**
     * Работа с кэшем в базе данных
     */
    private function getDBCache($cacheKey) {
        $stmt = $this->db->prepare("
            SELECT file_data, updated_at 
            FROM gallery_cache 
            WHERE cache_key = ? AND updated_at > DATE_SUB(NOW(), INTERVAL 30 DAY)
        ");
        $stmt->execute([$cacheKey]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($result && !empty($result['file_data'])) {
            return json_decode($result['file_data'], true);
        }
        
        return null;
    }
    
    private function setDBCache($cacheKey, $data, $forceUpdate = false) {
        $jsonData = json_encode($data);
        
        if ($forceUpdate) {
            // Обновляем существующую запись или создаем новую
            $stmt = $this->db->prepare("
                INSERT INTO gallery_cache (cache_key, file_data, created_at, updated_at) 
                VALUES (?, ?, NOW(), NOW())
                ON DUPLICATE KEY UPDATE file_data = ?, updated_at = NOW()
            ");
            $stmt->execute([$cacheKey, $jsonData, $jsonData]);
        } else {
            // Создаем только если не существует
            $stmt = $this->db->prepare("
                INSERT IGNORE INTO gallery_cache (cache_key, file_data, created_at, updated_at) 
                VALUES (?, ?, NOW(), NOW())
            ");
            $stmt->execute([$cacheKey, $jsonData]);
        }
    }
    
    /**
     * Сканирование FTP (адаптированная версия вашего кода)
     */
    private function scanFTP($picsFolio, $folder) {
        // Настройки FTP (ваши текущие)
        $ftpServer = 'zzz180.beget.tech';
        $ftpPort = 21;
        $ftpUser = 'zzz180_mb';
        $ftpPass = 'kBJ2UMjg!HLj';
        $ftpRemoteDir = "/$picsFolio/$folder";
        
        // Подключаемся к FTP
        $ftpConn = ftp_connect($ftpServer, $ftpPort);
        if (!$ftpConn) {
            throw new Exception("Не удалось подключиться к FTP-серверу");
        }
        
        if (!ftp_login($ftpConn, $ftpUser, $ftpPass)) {
            ftp_close($ftpConn);
            throw new Exception("Не удалось авторизоваться на FTP-сервере");
        }
        
        ftp_pasv($ftpConn, true);
        
        // Проверяем доступность папки
        if (!@ftp_chdir($ftpConn, $ftpRemoteDir)) {
            ftp_close($ftpConn);
            throw new Exception("Папка $ftpRemoteDir недоступна на FTP-сервере");
        }
        
        // Получаем список файлов
        $files = ftp_nlist($ftpConn, $ftpRemoteDir);
        ftp_close($ftpConn);
        
        if (empty($files)) {
            throw new Exception("В папке $ftpRemoteDir нет файлов");
        }
        
        // Фильтруем и обрабатываем файлы
        $allowedExtensions = ['avif', 'jp2', 'jpg', 'jpeg', 'webp'];
        $images = array_filter($files, function($file) use ($allowedExtensions) {
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            return in_array($ext, $allowedExtensions);
        });
        
        if (empty($images)) {
            throw new Exception("Нет изображений с допустимыми расширениями");
        }
        
        // Группируем по именам и определяем приоритетные расширения
        $priorityExtensions = ['avif', 'jp2', 'jpg', 'jpeg', 'webp'];
        $uniqueImages = [];
        
        foreach ($images as $image) {
            $imageName = pathinfo($image, PATHINFO_FILENAME);
            $imageExt = strtolower(pathinfo($image, PATHINFO_EXTENSION));
            
            if (!isset($uniqueImages[$imageName])) {
                $uniqueImages[$imageName] = $imageExt;
            } else {
                // Выбираем более приоритетное расширение
                $currentExt = $uniqueImages[$imageName];
                $currentPriority = array_search($currentExt, $priorityExtensions);
                $newPriority = array_search($imageExt, $priorityExtensions);
                
                if ($newPriority !== false && $newPriority < $currentPriority) {
                    $uniqueImages[$imageName] = $imageExt;
                }
            }
        }
        
        // Сортируем по имени
        ksort($uniqueImages);
        
        return [
            'files' => $uniqueImages,
            'priority_extension' => $this->determinePriorityExtension($uniqueImages, $priorityExtensions),
            'scan_time' => date('Y-m-d H:i:s'),
            'total_files' => count($uniqueImages)
        ];
    }
    
    /**
     * Определение приоритетного расширения для всего набора
     */
    private function determinePriorityExtension($files, $priorityExtensions) {
        foreach ($priorityExtensions as $ext) {
            if (in_array($ext, array_values($files))) {
                return $ext;
            }
        }
        
        // Если ни одно приоритетное не найдено, возвращаем первое доступное
        return count($files) > 0 ? reset($files) : 'jpg';
    }
    
    /**
     * Очистка кэша (для админки)
     */
    public function clearCache($city = null, $picsFolio = null, $folder = null) {
        // Очистка файлового кэша
        if ($city && $picsFolio && $folder) {
            // Очистка конкретной галереи
            $deviceTypes = ['desktop', 'mobile', 'tablet'];
            foreach ($deviceTypes as $deviceType) {
                $cacheKey = $this->buildCacheKey($city, $picsFolio, $folder, $deviceType);
                $cacheFile = $this->cacheDir . '/' . $cacheKey . '.json';
                if (file_exists($cacheFile)) {
                    unlink($cacheFile);
                }
                
                // Очистка из БД
                $stmt = $this->db->prepare("DELETE FROM gallery_cache WHERE cache_key = ?");
                $stmt->execute([$cacheKey]);
            }
        } else {
            // Полная очистка
            $files = glob($this->cacheDir . '/*.json');
            foreach ($files as $file) {
                unlink($file);
            }
            
            $stmt = $this->db->prepare("TRUNCATE TABLE gallery_cache");
            $stmt->execute();
        }
    }
}
?>