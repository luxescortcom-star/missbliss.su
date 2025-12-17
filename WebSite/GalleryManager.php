<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class GalleryManager {
    private $db;
    private $cacheDir;
    
     const FILE_CACHE_LIFETIME = 7776000;
    const DB_CACHE_LIFETIME = 31536000;
    
    // Все возможные папки для сканирования
    const SUB_FOLDERS = [ 'b', 'b2', 'b3', 'f2', 'f3'];
    
    // Приоритетные расширения файлов
    const PRIORITY_EXTENSIONS = ['avif', 'jp2', 'jpg', 'jpeg', 'webp'];
    
    // Новые настройки FTP для доступа ко всем городам
    const FTP_SERVER = 'zzz180.beget.tech';
    const FTP_PORT = 21;
    const FTP_USER = 'zzz180_cities';
    const FTP_PASS = 'D%410BVFgSgB';
    const FTP_BASE_PATH = '/';
    
    public function __construct($dbConnection) {
        $this->db = $dbConnection;
        $this->cacheDir = $_SERVER['DOCUMENT_ROOT'] . '/cache/gallery_structure';
        
        if (!is_dir($this->cacheDir)) {
            mkdir($this->cacheDir, 0755, true);
        }
    }
	
	/**
 * Сканируем папку методом перебора расширений - улучшенная версия
 */
private function scanFolderByExtensions($ftpConn, $folderPath) {
    $foundFiles = [];
    $maxNumber = 0;
    $minNumber = PHP_INT_MAX;
    
    // Увеличиваем диапазон поиска и улучшаем логику пропусков
    for ($i = 1; $i <= 200; $i++) {
        $fileFound = false;
        
        foreach (self::PRIORITY_EXTENSIONS as $ext) {
            $filename = "$i.$ext";
            // Проверяем существование файла
            if (@ftp_size($ftpConn, $filename) != -1) {
                $foundFiles["$i"] = $ext;
                $fileFound = true;
                $maxNumber = max($maxNumber, $i);
                $minNumber = min($minNumber, $i);
                break; // Нашли файл с этим номером, переходим к следующему
            }
        }
        
        // Если файл с текущим номером не найден, проверяем пропуски более умно
        if (!$fileFound) {
            $consecutiveMisses = 0;
            $lookAheadLimit = 20; // Проверяем до 20 следующих номеров
            
            for ($j = $i + 1; $j <= $i + $lookAheadLimit; $j++) {
                $nextFileFound = false;
                foreach (self::PRIORITY_EXTENSIONS as $ext) {
                    $filename = "$j.$ext";
                    if (@ftp_size($ftpConn, $filename) != -1) {
                        $nextFileFound = true;
                        break;
                    }
                }
                
                if ($nextFileFound) {
                    break; // Нашли следующий файл, продолжаем сканирование
                } else {
                    $consecutiveMisses++;
                    if ($consecutiveMisses >= 10) { // Если 10 подряд не найдено, останавливаемся
                        break 2;
                    }
                }
            }
        }
    }
    
    // Если не нашли файлов, возвращаем пустой результат
    if (empty($foundFiles)) {
        return [
            'files' => [],
            'file_count' => 0,
            'min_number' => 0,
            'max_number' => 0
        ];
    }
    
    return [
        'files' => $foundFiles,
        'file_count' => count($foundFiles),
        'min_number' => $minNumber,
        'max_number' => $maxNumber
    ];
}

    /**
     * Получаем полную структуру модели
     */
    public function getModelStructure($city, $picsFolio, $name = null) {
        $cacheKey = $this->buildCacheKey($city, $picsFolio);
        
        // 1. Проверяем файловый кэш
        $fileCache = $this->getFileCache($cacheKey);
        if ($fileCache !== null) {
            echo "<!-- Используем файловый кэш для модели $city/$picsFolio -->\n";
            return $fileCache;
        }
        
        // 2. Проверяем кэш в базе данных
        $dbCache = $this->getDBCache($cacheKey);
        if ($dbCache !== null) {
            echo "<!-- Используем кэш из БД для модели $city/$picsFolio -->\n";
            $this->setFileCache($cacheKey, $dbCache);
            return $dbCache;
        }
        
        // 3. Если кэша нет - сканируем модель на FTP
        echo "<!-- Сканируем модель $city/$picsFolio на FTP -->\n";
        $structure = $this->scanModelByMask($city, $picsFolio, $name);
        
        // Добавляем информацию о городе и имени модели
        $structure['city'] = $city;
        $structure['model_name'] = $picsFolio;
        $structure['display_name'] = $name ?? $this->getModelNameFromPicsFolio($picsFolio);
        
        // Сохраняем в оба кэша
        $this->setDBCache($cacheKey, $structure);
        $this->setFileCache($cacheKey, $structure);
        
        return $structure;
    }
    
    private function scanModelByMask($city, $picsFolio, $name = null) {
        $modelStructure = [
            'root' => [],
            'folders' => [],
            'scan_time' => date('Y-m-d H:i:s'),
            'total_files' => 0,
            'debug_info' => []
        ];
        
        try {
            $ftpConn = ftp_connect(self::FTP_SERVER, self::FTP_PORT, 30);
            if (!$ftpConn) {
                throw new Exception("Не удалось подключиться к FTP-серверу: " . self::FTP_SERVER);
            }

            $loginResult = @ftp_login($ftpConn, self::FTP_USER, self::FTP_PASS);
            if (!$loginResult) {
                throw new Exception("Не удалось авторизоваться на FTP-сервере");
            }

            ftp_pasv($ftpConn, true);

            // Переходим в базовую директорию
            if (!@ftp_chdir($ftpConn, self::FTP_BASE_PATH)) {
                throw new Exception("Не удалось перейти в базовую директорию: " . self::FTP_BASE_PATH);
            }

            // Сохраняем текущую директорию
            $currentDir = ftp_pwd($ftpConn);
            $modelStructure['debug_info']['base_directory'] = $currentDir;
            
            // Пробуем найти первую доступную папку в пути city/picsFolio
            $scannedFolder = null;
            $scannedData = null;
            
            foreach (self::SUB_FOLDERS as $folder) {
                $folderPath = "$city/$picsFolio/$folder";
                $modelStructure['debug_info']["trying_$folder"] = $folderPath;
                
                if (@ftp_chdir($ftpConn, $folderPath)) {
                    $modelStructure['debug_info']["found_$folder"] = true;
                    $scannedFolder = $folder;
                    $scannedData = $this->scanFolderByExtensions($ftpConn, ".");
                    ftp_chdir($ftpConn, $currentDir); // Возвращаемся в базовую директорию
                    break;
                } else {
                    $modelStructure['debug_info']["found_$folder"] = false;
                }
                ftp_chdir($ftpConn, $currentDir); // Всегда возвращаемся в базовую директорию
            }
            
            if ($scannedFolder && $scannedData) {
                $modelStructure['debug_info']['scanned_folder'] = $scannedFolder;
                $modelStructure['debug_info']['scanned_data'] = $scannedData;
                
                // Определяем расширение из отсканированной папки
                $extension = $this->determineExtensionFromFiles($scannedData['files']);
                
                $modelStructure['debug_info']['detected_extension'] = $extension;
                $modelStructure['debug_info']['detected_file_count'] = $scannedData['file_count'];
                
                // Добавляем информацию о диапазоне номеров с проверкой на существование
                $modelStructure['debug_info']['file_numbers_range'] = [
                    'min' => $scannedData['min_number'] ?? 0,
                    'max' => $scannedData['max_number'] ?? 0
                ];
                
                // Строим структуру по маске
                $modelStructure = $this->buildStructureByMask(
                    $city,
                    $picsFolio, 
                    $extension, 
                    $scannedData['files'],
                    $scannedFolder, 
                    $modelStructure, 
                    $name
                );
                
                // Сохраняем реальные данные отсканированной папки с проверками
                $modelStructure['folders'][$scannedFolder] = [
                    'files' => $scannedData['files'],
                    'priority_extension' => $extension,
                    'file_count' => $scannedData['file_count'],
                    'min_number' => $scannedData['min_number'] ?? 0,
                    'max_number' => $scannedData['max_number'] ?? 0,
                    'folder_path' => "$city/$picsFolio/$scannedFolder",
                    'scanned' => true
                ];
                
            } else {
                throw new Exception("Не удалось найти ни одну папку для модели $city/$picsFolio");
            }

            ftp_close($ftpConn);
            
        } catch (Exception $e) {
            $errorMessage = "FTP Error for $city/$picsFolio: " . $e->getMessage();
            $modelStructure['debug_info']['error'] = $errorMessage;
            $this->logError($errorMessage);
            
            // В случае ошибки создаем минимальную структуру
            $modelStructure = $this->createFallbackStructure($city, $picsFolio, $name, $modelStructure);
        }
        
        // Подсчитываем общее количество файлов
        $modelStructure['total_files'] = count($modelStructure['root']['files'] ?? []);
        foreach ($modelStructure['folders'] as $folderData) {
            $modelStructure['total_files'] += count($folderData['files'] ?? []);
        }
        
        return $modelStructure;
    }

    /**
     * Строим полную структуру по маске на основе реальных номеров файлов
     */
    private function buildStructureByMask($city, $picsFolio, $extension, $scannedFiles, $scannedFolder, $modelStructure, $name = null) {
        // Для root-файлов используем $name (латинское имя), если передано, иначе используем имя из picsFolio
        $modelNameForFiles = $name ?? $this->getModelNameFromPicsFolio($picsFolio);
        
        // Стандартные 6 файлов для корневой папки - используем латинское имя
        $rootFiles = [
            "$modelNameForFiles@p1x" => $extension,
            "$modelNameForFiles@1x" => $extension,
            "$modelNameForFiles@p2x" => $extension,
            "$modelNameForFiles@2x" => $extension,
            "$modelNameForFiles@p3x" => $extension,
            "$modelNameForFiles@3x" => $extension
        ];
        
        // Используем реальные номера файлов из отсканированной папки
        $folderFiles = $scannedFiles;
        
        // Определяем min и max номера
        $fileNumbers = array_keys($folderFiles);
        $minNumber = !empty($fileNumbers) ? min($fileNumbers) : 1;
        $maxNumber = !empty($fileNumbers) ? max($fileNumbers) : 1;
        
        // Заполняем корневую папку
        $modelStructure['root'] = [
            'files' => $rootFiles,
            'priority_extension' => $extension,
            'file_count' => 6,
            'folder_path' => "$city/$picsFolio",
            'generated' => true
        ];
        
        // Заполняем все подпапки реальными номерами файлов
        foreach (self::SUB_FOLDERS as $folder) {
            if ($folder !== $scannedFolder) {
                $modelStructure['folders'][$folder] = [
                    'files' => $folderFiles,
                    'priority_extension' => $extension,
                    'file_count' => count($folderFiles),
                    'min_number' => $minNumber,
                    'max_number' => $maxNumber,
                    'folder_path' => "$city/$picsFolio/$folder",
                    'generated' => true
                ];
            }
        }
        
        return $modelStructure;
    }

/**
 * Создает резервную структуру в случае ошибки FTP
 */
private function createFallbackStructure($city, $picsFolio, $name, $modelStructure) {
    // Для root-файлов используем $name (латинское имя)
    $modelNameForFiles = $name ?? $this->getModelNameFromPicsFolio($picsFolio);
    $extension = 'jpg'; // расширение по умолчанию
    
    // Стандартные файлы для корневой папки
    $rootFiles = [
        "$modelNameForFiles@p1x" => $extension,
        "$modelNameForFiles@1x" => $extension,
        "$modelNameForFiles@p2x" => $extension,
        "$modelNameForFiles@2x" => $extension,
        "$modelNameForFiles@p3x" => $extension,
        "$modelNameForFiles@3x" => $extension
    ];
    
    // Вместо фиксированных 20 файлов, используем информацию из debug_info если есть
    $fileCount = 20; // значение по умолчанию
    
    // Пытаемся определить реальное количество файлов из debug_info
    if (isset($modelStructure['debug_info']['detected_file_count'])) {
        $fileCount = $modelStructure['debug_info']['detected_file_count'];
    } elseif (isset($modelStructure['debug_info']['file_numbers_range'])) {
        $range = $modelStructure['debug_info']['file_numbers_range'];
        $fileCount = $range['max'] - $range['min'] + 1;
    }
    
    // Ограничиваем разумными пределами
    $fileCount = max(1, min($fileCount, 50));
    
    $folderFiles = [];
    for ($i = 1; $i <= $fileCount; $i++) {
        $folderFiles["$i"] = $extension;
    }
    
    // Заполняем корневую папку
    $modelStructure['root'] = [
        'files' => $rootFiles,
        'priority_extension' => $extension,
        'file_count' => 6,
        'folder_path' => "$city/$picsFolio",
        'generated' => true
    ];
    
    // Заполняем все подпапки
    foreach (self::SUB_FOLDERS as $folder) {
        $modelStructure['folders'][$folder] = [
            'files' => $folderFiles,
            'priority_extension' => $extension,
            'file_count' => $fileCount,
            'min_number' => 1,
            'max_number' => $fileCount,
            'folder_path' => "$city/$picsFolio/$folder",
            'generated' => true
        ];
    }
    
    return $modelStructure;
}

/**
 * Получаем имя модели из picsFolio (можно доработать для работы с переменной $name)
 */
private function getModelNameFromPicsFolio($picsFolio) {
    // Здесь можно добавить логику преобразования
    // Например, для 'alina-busty' -> 'alina'
    // Пока используем базовое имя папки, но нужно будет доработать
    
    // Базовое преобразование: берем первую часть до дефиса
    $parts = explode('-', $picsFolio);
    return $parts[0];
}
    
    /**
     * Определяем расширение из массива файлов
     */
    private function determineExtensionFromFiles($files) {
        if (empty($files)) {
            return 'jpg'; // расширение по умолчанию
        }
        
        // Собираем все расширения
        $extensions = array_values($files);
        
        // Ищем приоритетное расширение
        foreach (self::PRIORITY_EXTENSIONS as $priorityExt) {
            if (in_array($priorityExt, $extensions)) {
                return $priorityExt;
            }
        }
        
        // Если приоритетных нет, возвращаем первое найденное
        return $extensions[0] ?? 'jpg';
    }
    
 /**
 * Построение ключа кэша с читаемыми именами
 */
private function buildCacheKey($city, $picsFolio) {
    // Создаем читаемое имя файла
    $readableName = $city . '_' . $picsFolio;
    // Заменяем недопустимые символы
    $safeName = preg_replace('/[^a-zA-Z0-9_-]/', '_', $readableName);
    // Ограничиваем длину
    $safeName = substr($safeName, 0, 100);
    
    return $safeName;
}
	
	/**
 * Получить список всех кэш-файлов с информацией
 */
public function getCacheFilesList() {
    $files = glob($this->cacheDir . '/*.json');
    $result = [];
    
    foreach ($files as $file) {
        $filename = basename($file, '.json');
        $data = file_get_contents($file);
        $cacheData = json_decode($data, true);
        
        $result[] = [
            'filename' => $filename,
            'file_size' => filesize($file),
            'modified' => date('Y-m-d H:i:s', filemtime($file)),
            'model_city' => $cacheData['city'] ?? 'unknown',
            'model_name' => $cacheData['model_name'] ?? 'unknown',
            'display_name' => $cacheData['display_name'] ?? 'unknown',
            'total_files' => $cacheData['total_files'] ?? 0,
            'scan_time' => $cacheData['scan_time'] ?? 'unknown'
        ];
    }
    
    return $result;
}
    
/**
 * Работа с файловым кэшем
 */
private function getFileCache($cacheKey) {
    $cacheFile = $this->cacheDir . '/' . $cacheKey . '.json';
    
    if (file_exists($cacheFile) && 
        (time() - filemtime($cacheFile)) < self::FILE_CACHE_LIFETIME) {
        $data = file_get_contents($cacheFile);
        return json_decode($data, true);
    }
    
    return null;
}

private function setFileCache($cacheKey, $data) {
    $cacheFile = $this->cacheDir . '/' . $cacheKey . '.json';
    file_put_contents($cacheFile, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
	
	

}
 
 
    /**
     * Работа с кэшем в базе данных
     */
    private function getDBCache($cacheKey) {
        $stmt = $this->db->prepare("
            SELECT file_data, updated_at 
            FROM gallery_cache 
            WHERE cache_key = ? AND updated_at > DATE_SUB(NOW(), INTERVAL 365 DAY)
        ");
        $stmt->execute([$cacheKey]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($result && !empty($result['file_data'])) {
            return json_decode($result['file_data'], true);
        }
        
        return null;
    }
    
    private function setDBCache($cacheKey, $data, $forceUpdate = false) {
        $jsonData = json_encode($data, JSON_UNESCAPED_UNICODE);
        
        if ($forceUpdate) {
            $stmt = $this->db->prepare("
                INSERT INTO gallery_cache (cache_key, file_data, created_at, updated_at) 
                VALUES (?, ?, NOW(), NOW())
                ON DUPLICATE KEY UPDATE file_data = ?, updated_at = NOW()
            ");
            $stmt->execute([$cacheKey, $jsonData, $jsonData]);
        } else {
            $stmt = $this->db->prepare("
                INSERT IGNORE INTO gallery_cache (cache_key, file_data, created_at, updated_at) 
                VALUES (?, ?, NOW(), NOW())
            ");
            $stmt->execute([$cacheKey, $jsonData]);
        }
    }
    
/**
 * Принудительное обновление структуры модели
 */
public function forceUpdateModel($city, $picsFolio, $name = null) {
    $cacheKey = $this->buildCacheKey($city, $picsFolio);
    
    // Сканируем модель с передачей имени
    $structure = $this->scanModelByMask($picsFolio, $name);
    $structure['city'] = $city;
    $structure['model_name'] = $picsFolio;
    $structure['display_name'] = $name ?? $this->getModelNameFromPicsFolio($picsFolio);
    
    // Обновляем оба кэша
    $this->setDBCache($cacheKey, $structure, true);
    $this->setFileCache($cacheKey, $structure);
    
    return $structure;
}
    
    /**
     * Очистка кэша
     */
    public function clearCache($city = null, $picsFolio = null) {
        if ($city && $picsFolio) {
            // Очистка конкретной модели
            $cacheKey = $this->buildCacheKey($city, $picsFolio);
            $cacheFile = $this->cacheDir . '/' . $cacheKey . '.json';
            if (file_exists($cacheFile)) {
                unlink($cacheFile);
            }
            
            $stmt = $this->db->prepare("DELETE FROM gallery_cache WHERE cache_key = ?");
            $stmt->execute([$cacheKey]);
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
    
    /**
     * Получить информацию о корневой папке модели
     */
    public function getRootData($city, $picsFolio) {
        $modelStructure = $this->getModelStructure($city, $picsFolio);
        return $modelStructure['root'] ?? null;
    }
    
    /**
     * Получить информацию о конкретной подпапке модели
     */
    public function getFolderData($city, $picsFolio, $folder) {
        $modelStructure = $this->getModelStructure($city, $picsFolio);
        return $modelStructure['folders'][$folder] ?? null;
    }
    

    /**
     * Тест FTP подключения и сканирования с поддержкой городов
     */
    public function testFTPConnection($city = null, $picsFolio = null) {
        try {
            $ftpConn = ftp_connect(self::FTP_SERVER, self::FTP_PORT, 10);
            if (!$ftpConn) {
                return "Ошибка: Не удалось подключиться к FTP-серверу";
            }

            $loginResult = @ftp_login($ftpConn, self::FTP_USER, self::FTP_PASS);
            if (!$loginResult) {
                ftp_close($ftpConn);
                return "Ошибка: Не удалось авторизоваться на FTP-сервере";
            }

            ftp_pasv($ftpConn, true);
            
            // Переходим в базовую директорию
            if (!@ftp_chdir($ftpConn, self::FTP_BASE_PATH)) {
                ftp_close($ftpConn);
                return "Ошибка: Не удалось перейти в базовую директорию: " . self::FTP_BASE_PATH;
            }
            
            $result = [
                'status' => 'success',
                'current_directory' => ftp_pwd($ftpConn),
                'base_path' => self::FTP_BASE_PATH
            ];
            
            // Если указаны город и модель, проверяем их
            if ($city && $picsFolio) {
                $result['model'] = "$city/$picsFolio";
                
                // Проверяем подпапки модели
                foreach (self::SUB_FOLDERS as $folder) {
                    $folderPath = "$city/$picsFolio/$folder";
                    if (@ftp_chdir($ftpConn, $folderPath)) {
                        $result['available_folders'][$folder] = true;
                        
                        // Сканируем файлы в папке
                        $files = $this->scanFolderByExtensions($ftpConn, ".");
                        $result['folder_files'][$folder] = $files;
                        
                        ftp_chdir($ftpConn, self::FTP_BASE_PATH); // Возвращаемся в базовую директорию
                    } else {
                        $result['available_folders'][$folder] = false;
                    }
                }
            }
            
            ftp_close($ftpConn);
            return $result;
            
        } catch (Exception $e) {
            return "Ошибка: " . $e->getMessage();
        }
    }

    private function logError($message) {
        error_log("GalleryManager Error: " . $message);
    }
	
}
?>