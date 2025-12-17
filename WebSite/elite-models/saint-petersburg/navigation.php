<?php
function generateNavigation($currentFile) {
    try {
        // Убираем слэш в конце, если он есть
        $currentFile = rtrim($currentFile, '/');

        // Папки для сканирования
        $folders = ['favorites', 'attractive'];
        $files = [];

        foreach ($folders as $folder) {
            $dir = __DIR__ . DIRECTORY_SEPARATOR . $folder;
            
            // Проверка существования папки
            if (!is_dir($dir)) {
                error_log("Папка $dir не существует");
                continue;
            }

            // Получаем список файлов
            $folderFiles = scandir($dir);
            if ($folderFiles === false) {
                error_log("Ошибка чтения папки $dir");
                continue;
            }

            // Фильтруем HTML-файлы
            foreach ($folderFiles as $file) {
                if ($file === '.' || $file === '..') continue;
                
                $ext = pathinfo($file, PATHINFO_EXTENSION);
                if (strtolower($ext) === 'php' && $filename !== 'index') { // Ищем .php файлы
                    $files[] = $folder . '/' . pathinfo($file, PATHINFO_FILENAME);
                }
            }
        }

        // Проверка найденных файлов
        if (empty($files)) {
            return '<p>Нет доступных страниц</p>';
        }

        // Сортировка файлов
        sort($files);

        // Поиск текущего индекса
        $currentIndex = array_search($currentFile, $files);
        if ($currentIndex === false) {
            return '<p>Ошибка: Текущая страница '.$currentFile.' не найдена в списке.</p>';
        }
		
		

        // Расчет индексов
        $total = count($files);
        $prevIndex = ($currentIndex - 1 + $total) % $total;
        $nextIndex = ($currentIndex + 1) % $total;

         // Функция для преобразования URL в читаемое имя
        function formatTitle($url) {
            // Извлекаем имя файла (последнюю часть URL)
            $name = basename($url);

            // Заменяем подчёркивания на пробелы
            $name = str_replace('_', ' ', $name);

            // Преобразуем первую букву в верхний регистр
            $name = ucwords($name);
			
			

            return $name;
			
        }
		

		


        // Генерация ссылок
        return sprintf(
            '<p><a href="../../%s/" class="scr" title="%s"><i class="scr"></i></a></p>
			<p><a href="../../" title="St. Petersburg Escorts"><i class="scli"></i></a>
             <p><a href="../../%s/" class="scl" title="%s"><i class="scl"></i></a></p>',
            $files[$prevIndex],
            formatTitle($files[$prevIndex]), // Title для "Назад"
            $files[$nextIndex],
            formatTitle($files[$nextIndex])  // Title для "Вперёд"
        );

    } catch (Exception $e) {
        error_log('Ошибка в generateNavigation: ' . $e->getMessage());
        return '<p>Ошибка навигации</p>';
    }
}
?>