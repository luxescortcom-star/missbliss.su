<?php
function generateMenu($currentPage, $en_title, $isEnglish = false) {
    $menuItems = [
        'index' => [
            'title' => $isEnglish ? 'Agency' : 'Агентство',
            'description' => $isEnglish ? 'Escort Agency MissBliss Moscow' : 'Эскорт Агентство МиссБлисс Москва',
        ],
        'about' => [
            'title' => $isEnglish ? 'Services' : 'Услуги',
            'description' => $isEnglish ? 'Learn more about our services' : 'Подробнее о наших услугах',
            'submenu' => [
                'rates' => [
                    'title' => $isEnglish ? 'Rates' : 'Цены',
                    'description' => $isEnglish ? 'Cost of escort services' : 'Стоимость эскорт услуг',
                ],
            ],
        ],
        'all_vip_escorts' => [
            'title' => $isEnglish ? 'All Models' : 'Все Модели',
            'description' => $isEnglish ? 'Escort models in Moscow' : 'Эскорт модели Москва',
            'submenu' => [
                'moscow' => [
                    'title' => $isEnglish ? 'Moscow' : 'Москва',
                    'description' => $isEnglish ? 'Elite escorts in Moscow' : 'Элитные эскортницы Москва',
                ],
                'saint-petersburg' => [
                    'title' => $isEnglish ? 'St. Petersburg' : 'Санкт-Петербург',
                    'description' => $isEnglish ? 'Escort models in St Petersburg' : 'Эскорт модели Санкт-Петербург',
                ],
                'ekaterinburg' => [
                    'title' => $isEnglish ? 'Ekaterburg' : 'Екатеринбург',
                    'description' => $isEnglish ? 'Escort models in Ekaterburg' : 'Эскорт модели Екатеринбург',
                ],
                'krasnodar' => [
                    'title' => $isEnglish ? 'Krasnodar' : 'Краснодар',
                    'description' => $isEnglish ? 'Escort models in Krasnodar' : 'Эскорт модели Краснодар',
                ],
				   'rostov-on-don' => [
                    'title' => $isEnglish ? 'Rostov-on-Don' : 'Ростов-на-Дону',
                    'description' => $isEnglish ? 'Escort models in Rostov-on-Don' : 'Эскорт модели Ростове-на-Дону',
                ],
            ],
        ],
        'casting' => [
            'title' => $isEnglish ? 'Casting' : 'Кастинг',
            'description' => $isEnglish ? 'Jobs for beautiful girls, models, and actresses' : 'Работа для красивых девушек, моделей и актрис',
        ],
        'contact' => [
            'title' => $isEnglish ? 'Contact' : 'Контакт',
            'description' => $isEnglish ? 'Contact us' : 'Свяжитесь с нами',
        ],
    ];

function isAuthorized() {
    // Сначала проверяем стандартные переменные Apache
    if (isset($_SERVER['REMOTE_USER']) || isset($_SERVER['PHP_AUTH_USER'])) {
        return true;
    }

    // Если не сработало, делаем HTTP-запрос к защищенной странице
    $authCheckUrl = '/vip-models/check_auth.txt'; // Простой текстовый файл с содержимым "1"
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

$isAuthorized = isAuthorized();

    // 2. Определяем базовые пути
    $mainBasePath = $isEnglish ? 'en/' : '';
    $modelsBasePath = $isEnglish ? 'elite-models/' : 'vip-models/';

    // 3. Для страниц all_vip_escorts используем разные базовые пути в зависимости от авторизации
    $all_vip_escortsBasePath = $isAuthorized ? $modelsBasePath : $mainBasePath;



    // 2. Нормализация URL
	$normalizedPath = $currentPage;
    if (strpos($normalizedPath, $modelsBasePath) === 0) {
        $normalizedPath = substr($normalizedPath, strlen($modelsBasePath));
    } elseif (strpos($normalizedPath, $mainBasePath) === 0) {
        $normalizedPath = substr($normalizedPath, strlen($mainBasePath));
    }
    $normalizedPath = rtrim($normalizedPath, '/');

    // 3. Определение родительского раздела
    $parentPage = $normalizedPath;
    if (strpos($normalizedPath, '/') !== false) {
        $parts = explode('/', $normalizedPath);
        $parentPage = $parts[0];
    }

    // 4. Логика для подменю all_vip_escorts
    $all_vip_escortsSubpages = ['moscow', 'saint-petersburg', 'ekaterinburg', 'krasnodar', 'rostov-on-don'];
    if (in_array($parentPage, $all_vip_escortsSubpages)) {
        $selectedSubItem = $menuItems['all_vip_escorts']['submenu'][$parentPage];

        $newSubmenu = [
            'all_vip_escorts' => [
                'title' => $isEnglish ? 'All Models' : 'Все Модели',
                'description' => $isEnglish ? 'Escort models in Moscow' : 'Эскорт модели Москва',
            ]
        ];

        foreach ($all_vip_escortsSubpages as $subpage) {
            if ($subpage !== $parentPage) {
                $newSubmenu[$subpage] = $menuItems['all_vip_escorts']['submenu'][$subpage];
            }
        }

        $menuItems['all_vip_escorts']['title'] = $selectedSubItem['title'];
        $menuItems['all_vip_escorts']['description'] = $selectedSubItem['description'];
        $menuItems['all_vip_escorts']['submenu'] = $newSubmenu;
    }

     // 4. Генерация HTML меню с исправленными путями
    $menuHtml = '<ul id="navigation">';
    foreach ($menuItems as $page => $item) {
        // Определение базового пути
       $basePath = in_array($page, array_merge(['all_vip_escorts'], $all_vip_escortsSubpages))
            ? $modelsBasePath
            : $mainBasePath;

        // Формирование URL
        $href = '/' . $basePath . ($page === 'index' ? '' : $page . '/');

        if ($page === 'all_vip_escorts' && in_array($parentPage, $all_vip_escortsSubpages)) {
            $href = '/' . $modelsBasePath . $parentPage . '/';
        }

        // Проверка активности
        $isActive = ($normalizedPath === $page)
            || (strpos($normalizedPath, $page . '/') === 0)
            || ($parentPage === $page);

			        // Особое условие для главной страницы
        if ($page === 'index') {
            $isActive = ($currentPage === 'index')
                || ($currentPage === '' && !$isEnglish)
                || ($currentPage === 'en/' && $isEnglish);
        }

        if (in_array($parentPage, $all_vip_escortsSubpages) && $page === 'all_vip_escorts') {
            $isActive = true;
        }

        if (isset($item['submenu'])) {
            $menuHtml .= '<li' . ($isActive ? ' class="current"' : '') . '>';
            $menuHtml .= '<a href="' . $href . '" title="' . $item['description'] . '">' . $item['title'] . '</a>';
            $menuHtml .= '<ul class="submenu">';

            foreach ($item['submenu'] as $subPage => $subItem) {
                // Для подпунктов all_vip_escorts всегда используем modelsBasePath
                $subBasePath = in_array($subPage, $all_vip_escortsSubpages)
                    ? $modelsBasePath
                    : $mainBasePath;
				 $subBasePath = in_array($page, array_merge(['all_vip_escorts'], $all_vip_escortsSubpages))
            ? $modelsBasePath
            : $mainBasePath;
                $basePath = in_array($page, array_merge(['all_vip_escorts'], $all_vip_escortsSubpages)) ? $modelsBasePath : $mainBasePath;
                $subHref = '/' . $subBasePath . $subPage . '/';
                $subIsActive = ($normalizedPath === $subPage) || ($parentPage === $subPage);
                $menuHtml .= '<li' . ($subIsActive ? ' class="current"' : '') . '>';
                $menuHtml .= '<a href="' . $subHref . '" title="' . $subItem['description'] . '">' . $subItem['title'] . '</a>';
                $menuHtml .= '</li>';
            }

            $menuHtml .= '</ul></li>';
        } else {
            $menuHtml .= '<li' . ($isActive ? ' class="current"' : '') . '>';
            $menuHtml .= '<a href="' . $href . '" title="' . $item['description'] . '">' . $item['title'] . '</a>';
            $menuHtml .= '</li>';
        }
    }
// 5. Исправленная кнопка переключения языка
$currentUri = $_SERVER['REQUEST_URI'];
if ($isEnglish) {
    $en_link = str_replace('/elite-models/', '/vip-models/', $currentUri);
    $en_link = str_replace('/en/', '/', $en_link);
} else {
    // Для русского языка
    if (strpos($currentUri, '/vip-models/') === 0) {
        // Если это каталог xxx - заменяем на vvp
        $en_link = str_replace('/vip-models/', '/elite-models/', $currentUri);
    } else {
        // Для обычных русских страниц добавляем /en/ префикс
        if ($currentUri === '/' || $currentUri === '/index.php') {
            $en_link = '/en/';
        } else {
            $en_link = '/en' . $currentUri;
        }
    }
}
$languageTitle = $isEnglish ? 'Переключить на Русский' : 'Switch to English';
$flagIcon = $isEnglish ? '<i id="flag_ru"></i>' : '<i id="flag_en"></i>';
$menuHtml .= '<li class="flag"><a href="' . $en_link . '" title="' . $languageTitle . '">' . $flagIcon . ($isEnglish ? 'Русский' : 'English') . '</a></li>';
$menuHtml .= '</ul>';

return $menuHtml;
}

// Определяем текущую страницу
$currentUri = ltrim($_SERVER['REQUEST_URI'], '/');
// Массив английских разделов
$englishSections = ['/en/', '/elite-models/'];

// Определяем язык
$isEnglish = false;
foreach ($englishSections as $section) {
    if (strpos($_SERVER['REQUEST_URI'], $section) === 0) {
        $isEnglish = true;
        break;
    }
}

// Выводим меню
echo generateMenu($currentUri, 'Switch to English', $isEnglish);


?>