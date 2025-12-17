// Функция для определения языка страницы
function getPageLanguage() {
    // Проверяем URL на наличие английских папок
    const currentUrl = window.location.href;
    
    // Проверяем пути в URL
    if (currentUrl.includes('/en/') || currentUrl.includes('/elite-models/')) {
        return 'en';
    }
    
    // Дополнительные проверки
    const path = window.location.pathname;
    
    // Если путь начинается с /en/ или содержит elite-models
    if (path.startsWith('/en/') || path.includes('/elite-models/')) {
        return 'en';
    }
    
    // Проверяем языковой атрибут HTML
    const htmlLang = document.documentElement.lang;
    if (htmlLang && htmlLang.startsWith('en')) {
        return 'en';
    }
    
    // Проверяем мета-тег content-language
    const metaLang = document.querySelector('meta[http-equiv="content-language"]');
    if (metaLang && metaLang.getAttribute('content') && metaLang.getAttribute('content').startsWith('en')) {
        return 'en';
    }
    
    // Проверяем класс body или других элементов
    if (document.body.classList.contains('en') || document.querySelector('[lang="en"]')) {
        return 'en';
    }
    
    // По умолчанию русский
    return 'ru';
}

// Функция для получения цены из data-атрибута или глобальной переменной
function getPrices() {
    // Сначала пробуем взять из глобальной переменной PRICES (если она объявлена)
    if (typeof PRICES !== 'undefined' && PRICES !== null) {
        console.log('Got prices from global PRICES variable:', PRICES);
        return PRICES;
    }
    
    // Если нет глобальной переменной, пробуем получить из data-атрибута
    const pricesElement = document.getElementById('pricesData');
    if (pricesElement) {
        const pricesJson = pricesElement.getAttribute('data-prices');
        try {
            return JSON.parse(pricesJson);
        } catch (e) {
            console.error('Error parsing prices:', e);
        }
    }
    
    // Если ничего не найдено
    console.warn('Prices not found in global PRICES variable or data-prices attribute');
    return {};
}
// Функция для получения VIP статуса модели
function getModelVipStatus() {
    // Способ 1: Используем глобальные переменные из model-prices.php
    if (typeof MODEL_IS_VIP !== 'undefined') {
        console.log('Got VIP status from MODEL_IS_VIP:', MODEL_IS_VIP);
        return MODEL_IS_VIP === true;
    }
    
    // Способ 2: Используем категорию из глобальной переменной
    if (typeof MODEL_CATEGORY !== 'undefined') {
        const isVip = MODEL_CATEGORY === 'vip';
        console.log('Got VIP status from MODEL_CATEGORY:', isVip);
        return isVip;
    }
    
    // Способ 3: Проверяем старый элемент vipData (обратная совместимость)
    const vipData = document.getElementById('vipData');
    if (vipData) {
        const isVip = vipData.getAttribute('data-is-vip') === 'true';
        console.log('Got VIP status from vipData:', isVip);
        return isVip;
    }
    
    console.log('VIP status not found, defaulting to false');
    return false;
}

// Функция для получения категории модели
function getModelCategory() {
    // Способ 1: Используем глобальную переменную из model-prices.php
    if (typeof MODEL_CATEGORY !== 'undefined') {
        console.log('Got category from MODEL_CATEGORY:', MODEL_CATEGORY);
        return MODEL_CATEGORY;
    }
    
    // Способ 2: Определяем по URL (запасной вариант)
    const modelUrl = getCurrentPageUrl();
    let category = 'attractive';
    
    if (modelUrl.includes('/attractive/')) {
        category = 'attractive';
    } else if (modelUrl.includes('/favorites/')) {
        // Для favorites проверяем VIP статус
        const isVip = getModelVipStatus();
        category = isVip ? 'vip' : 'favorites';
    } else if (modelUrl.includes('/new/')) {
        category = 'new';
    }
    
    console.log('Determined category from URL:', category);
    return category;
}

// Функция для получения имени модели из data-атрибута
function getModelName() {
    const modelElement = document.getElementById('modelNameData');
    if (modelElement) {
        const modelName = modelElement.getAttribute('data-model-name');
        return modelName || 'Модель';
    }

    // Пробуем получить из заголовка страницы как запасной вариант
    const title = document.title;
    if (title) {
        return title.split('|')[0].trim();
    }

    return 'Модель';
}

// Функция для скрытия блока с ценой
function hidePriceDisplay() {
    const priceDisplay = document.getElementById('priceDisplay');
    if (priceDisplay) {
        priceDisplay.style.display = 'none';
    }
}

// Функция для отображения цены
function showPrice(duration, price) {
    const priceDisplay = document.getElementById('priceDisplay');
    if (!priceDisplay) return;

    const priceAmount = priceDisplay.querySelector('.price-amount');
    const priceNote = priceDisplay.querySelector('.price-note');

    if (priceAmount) {
        priceAmount.textContent = price.toLocaleString('ru-RU');
    }

    // Определяем язык страницы
    const pageLanguage = getPageLanguage();
    
    // Добавляем примечание в зависимости от продолжительности и языка
    const notes = {
        'ru': {
            '1': 'Первое впечатление',
            '2': 'Стандартное свидание',
            '3': 'Немного больше времени',
            '4': 'Свидание с ужином',
            '5': 'Расчетная стоимость (уточняйте)',
            '6': 'Романтичное свидание',
            '12': 'От заката до рассвета',
            '24': 'Полные сутки'
        },
        'en': {
            '1': 'First impression',
            '2': 'Standard date',
            '3': 'A little more time',
            '4': 'Dinner date',
            '5': 'Estimated cost (please confirm)',
            '6': 'Romantic date',
            '12': 'From dusk till dawn',
            '24': 'Full day'
        }
    };

    if (priceNote) {
        // Получаем примечание для текущего языка или пустую строку
        const languageNotes = notes[pageLanguage] || notes['ru'];
        priceNote.textContent = languageNotes[duration] || '';
        
        // Добавляем data-атрибут для отладки
        priceNote.setAttribute('data-language', pageLanguage);
        priceNote.setAttribute('data-duration', duration);
    }

    priceDisplay.style.display = 'block';
    
    // Логируем для отладки
    console.log('Price display:', {
        language: pageLanguage,
        duration: duration,
        note: priceNote ? priceNote.textContent : 'no note',
        url: window.location.href
    });
}
// Функция для получения текущего URL страницы
function getCurrentPageUrl() {
    return window.location.href;
}

// Функции валидации
function isValidName(name) {
    const nameRegex = /^[a-zA-Zа-яА-ЯёЁ\s\-']{2,50}$/;
    return nameRegex.test(name.trim());
}

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email.trim());
}

function isValidTelegram(telegram) {
    const telegramRegex = /^@[a-zA-Z0-9_]{5,32}$/;
    return telegramRegex.test(telegram.trim());
}

// Функция показа ошибки
function showError(input, message) {
    const formGroup = input.closest('.contact-column') || input.closest('.form-group');
    if (!formGroup) return;

    let errorElement = formGroup.querySelector('.error-message');

    if (!errorElement) {
        errorElement = document.createElement('div');
        errorElement.className = 'error-message';
        formGroup.appendChild(errorElement);
    }

    errorElement.textContent = message;
    errorElement.style.display = 'block';
    input.classList.add('input-error');
    input.classList.remove('validation-success');
}

// Функция скрытия ошибки
function hideError(input) {
    const formGroup = input.closest('.contact-column') || input.closest('.form-group');
    if (!formGroup) return;

    const errorElement = formGroup.querySelector('.error-message');

    if (errorElement) {
        errorElement.style.display = 'none';
    }

    input.classList.remove('input-error');
    input.classList.add('validation-success');
}

// Валидация в реальном времени
function setupRealTimeValidation() {
    // Валидация имен для каждого способа связи
    const nameFields = ['client_name_telegram', 'client_name_phone', 'client_name_email'];
    nameFields.forEach(fieldId => {
        const field = document.getElementById(fieldId);
        if (field) {
            field.addEventListener('blur', function() {
                if (this.value.trim() && !isValidName(this.value)) {
                    showError(this, 'Имя должно содержать только буквы и быть от 2 до 50 символов');
                } else if (this.value.trim()) {
                    hideError(this);
                }
            });
        }
    });

    // Валидация Telegram
    const telegramInput = document.getElementById('telegram');
    if (telegramInput) {
        telegramInput.addEventListener('blur', function() {
            if (this.value.trim() && !isValidTelegram(this.value)) {
                showError(this, 'Telegram должен начинаться с @ и содержать 5-32 символа (буквы, цифры, подчеркивания)');
            } else if (this.value.trim()) {
                hideError(this);
            }
        });
    }

    // Валидация email
    const emailInput = document.getElementById('email');
    if (emailInput) {
        emailInput.addEventListener('blur', function() {
            if (this.value.trim() && !isValidEmail(this.value)) {
                showError(this, 'Введите корректный email адрес');
            } else if (this.value.trim()) {
                hideError(this);
            }
        });
    }
}

// Функция для получения кода страны с максимальным логированием
async function getCountryCode() {
    console.log('=== getCountryCode START ===');

    try {
        // Проверяем localStorage для кэширования в браузере
        const cachedCode = localStorage.getItem('userCountryCode');
        const cacheTime = localStorage.getItem('countryCodeCacheTime');

        console.log('Cached code:', cachedCode);
        console.log('Cache time:', cacheTime);
        console.log('Current time:', Date.now());

        // Используем кэш, если он есть и не старше 1 дня
        if (cachedCode && cacheTime && (Date.now() - cacheTime < 24 * 3600 * 1000)) {
            console.log('Using cached country code:', cachedCode);
            console.log('=== getCountryCode END (from cache) ===');
            return cachedCode.toLowerCase();
        }

        // Запрашиваем у сервера
        console.log('Fetching from API...');
        const apiUrl = '/geoip/geo_api.php?country_code_only=1';
        console.log('API URL:', apiUrl);

        const response = await fetch(apiUrl);
        console.log('Response status:', response.status);
        console.log('Response status text:', response.statusText);

        if (!response.ok) {
            console.error('API response not OK:', response.status);
            throw new Error(`API responded with status: ${response.status}`);
        }

        const data = await response.json();
        console.log('API response data (FULL):', data);

        // Пробуем получить код страны разными способами
        let countryCode = '';

        // Способ 1: из поля country_code (если API возвращает его)
        if (data.country_code && data.country_code.length === 2) {
            countryCode = data.country_code.toLowerCase();
            console.log('Got country code from data.country_code:', countryCode);
        }
        // Способ 2: из поля country (основной способ)
        else if (data.country && data.country.length === 2) {
            countryCode = data.country.toLowerCase();
            console.log('Got country code from data.country:', countryCode);
        }
        // Способ 3: из поля data.country (если вложенная структура)
        else if (data.data && data.data.country && data.data.country.length === 2) {
            countryCode = data.data.country.toLowerCase();
            console.log('Got country code from data.data.country:', countryCode);
        }
        // Способ 4: значение по умолчанию
        else {
            console.warn('Could not find country code in response, defaulting to RU');
            console.warn('Available fields in data:', Object.keys(data));
            if (data.data) {
                console.warn('Available fields in data.data:', Object.keys(data.data));
            }
            countryCode = 'ru';
        }

        console.log('Final country code after extraction:', countryCode);

        // Проверяем, поддерживается ли код страны intlTelInput
        const supportedCountries = ['ru', 'us', 'gb', 'de', 'fr', 'ua', 'by', 'kz', 'au', 'ca', 'jp', 'cn', 'in', 'br', 'mx', 'lv', 'ee', 'lt', 'pl', 'cz', 'sk', 'hu', 'ro', 'bg', 'gr', 'tr', 'it', 'es', 'pt', 'nl', 'be', 'ch', 'at', 'se', 'no', 'fi', 'dk'];

        if (!supportedCountries.includes(countryCode)) {
            console.log('Country code not supported by intlTelInput, defaulting to RU');
            countryCode = 'ru';
        }

        console.log('Validated country code:', countryCode);

        // Сохраняем в кэш
        localStorage.setItem('userCountryCode', countryCode);
        localStorage.setItem('countryCodeCacheTime', Date.now());

        console.log('Saved to cache');
        console.log('=== getCountryCode END ===');

        return countryCode;

    } catch (error) {
        console.error('Ошибка получения кода страны:', error);
        console.log('=== getCountryCode END (with error) ===');
        return 'ru'; // Значение по умолчанию
    }
}

// Инициализация intlTelInput через jQuery
async function initPhoneInput() {
    const phoneField = $('#phone');
    if (!phoneField.length) {
        console.log('Phone field not found');
        return;
    }

    try {
        const userCountryCode = await getCountryCode();
        console.log('Initializing phone input with country code:', userCountryCode);

        // Уничтожаем предыдущую инициализацию если есть
        if (phoneField.intlTelInput && typeof phoneField.intlTelInput === 'function') {
            phoneField.intlTelInput('destroy');
            console.log('Destroyed previous phone input instance');
        }

        // Проверяем, что плагин intlTelInput загружен
        if (!$.fn.intlTelInput) {
            console.error('intlTelInput plugin not loaded');
            // Попробуем загрузить динамически
            await loadIntlTelInput();
        }

        // Ждем немного, чтобы убедиться, что поле готово
        await new Promise(resolve => setTimeout(resolve, 100));

        // Очищаем поле перед инициализацией
        phoneField.val('');

        // Инициализируем плагин с дополнительными опциями
        phoneField.intlTelInput({
            defaultCountry: userCountryCode,
            initialCountry: userCountryCode,
            utilsScript: "/forbidden/build/js/utils.js",
            separateDialCode: true,
            nationalMode: false, // Важно: показывать код страны
            autoPlaceholder: "aggressive",
            formatOnDisplay: true,
            preferredCountries: ['ru', 'us', 'gb', 'de', 'fr', 'lv', 'lt', 'ee'],
            onlyCountries: [], // Разрешаем все страны
            // Убедимся, что данные для страны загружены
            geoIpLookup: function(callback) {
                // Используем наш getCountryCode
                getCountryCode().then(callback).catch(() => callback(userCountryCode));
            }
        });

        // Принудительно устанавливаем страну
        setTimeout(() => {
            phoneField.intlTelInput('setCountry', userCountryCode);
            console.log('Forced setCountry to:', userCountryCode);

            // Проверяем, что код страны отображается
            const selectedCountryData = phoneField.intlTelInput('getSelectedCountryData');
            console.log('Selected country data:', selectedCountryData);

            // Добавляем событие для отладки
            phoneField.on('countrychange', function() {
                console.log('Country changed to:', phoneField.intlTelInput('getSelectedCountryData'));
            });
        }, 200);

        // Проверяем успешность инициализации через 500мс
        setTimeout(() => {
            const countryData = phoneField.intlTelInput('getSelectedCountryData');
            if (countryData && countryData.iso2) {
                console.log('Phone input initialized successfully with country:', countryData.iso2);
                console.log('Country data:', countryData);

                // Проверяем, что код страны отображается в поле
                const dialCode = countryData.dialCode;
                console.log('Dial code:', dialCode);

                // Если код страны не отображается, принудительно обновим поле
                if (!phoneField.val().includes('+' + dialCode)) {
                    console.log('Dial code not visible, updating...');
                    phoneField.intlTelInput('setNumber', '+' + dialCode);
                }
            } else {
                console.error('Phone input initialization failed');
                // Пробуем с кодом по умолчанию с другими настройками
                phoneField.intlTelInput({
                    defaultCountry: 'ru',
                    utilsScript: "/forbidden/build/js/utils.js",
                    separateDialCode: true,
                    nationalMode: false,
                    autoPlaceholder: "aggressive"
                });
            }
        }, 500);

    } catch (error) {
        console.error('Error initializing phone input:', error);
        // Инициализируем с кодом по умолчанию
        phoneField.intlTelInput({
            defaultCountry: 'ru',
            utilsScript: "/forbidden/build/js/utils.js",
            separateDialCode: true,
            nationalMode: false
        });
    }
}

// Функция для динамической загрузки intlTelInput если не загружен
function loadIntlTelInput() {
    return new Promise((resolve, reject) => {
        if ($.fn.intlTelInput) {
            resolve();
            return;
        }

        console.log('Loading intlTelInput dynamically...');
        const script = document.createElement('script');
        script.src = '/forbidden/build/css/intlTelInput.min.js'; // Укажите правильный путь
        script.onload = resolve;
        script.onerror = reject;
        document.head.appendChild(script);
    });
}

// Настройка валидации телефона через jQuery
function setupPhoneValidation() {
    const phoneField = $('#phone');
    if (!phoneField.length) return;

    const phoneContainer = phoneField.closest('.contact-column');
    if (phoneContainer.length) {
        // Удаляем старые сообщения если есть
        phoneContainer.find('.error-msg-phone, .valid-msg-phone').remove();

        // Создаем сообщение об ошибке
        const errorMsg = $('<div>', {
            'class': 'error-msg-phone error-message hide',
            'id': 'error-msg-phone',
            'text': 'Неверный номер телефона'
        });

        // Создаем сообщение об успешной валидации
        const validMsg = $('<div>', {
            'class': 'valid-msg-phone validation-success-msg hide',
            'id': 'valid-msg-phone',
            'text': '✓ Корректный номер'
        });

        phoneContainer.append(errorMsg, validMsg);
    }

    // Валидация при потере фокуса
    phoneField.on('blur', function() {
        validatePhoneField($(this));
    });

    // Сброс валидации при вводе
    phoneField.on('input', function() {
        resetPhoneValidation($(this));
    });

    // Также валидируем при изменении страны
    phoneField.on('countrychange', function() {
        resetPhoneValidation($(this));
    });
}

// Функция валидации телефонного поля через jQuery
function validatePhoneField(phoneField) {
    const errorMsg = $('#error-msg-phone');
    const validMsg = $('#valid-msg-phone');

    if (!phoneField.val().trim()) {
        resetPhoneValidation(phoneField);
        return false;
    }

    if (phoneField.intlTelInput("isValidNumber")) {
        // Валидный номер
        phoneField.removeClass('input-error').addClass('validation-success');
        errorMsg.addClass('hide');
        validMsg.removeClass('hide');
        return true;
    } else {
        // Невалидный номер
        phoneField.addClass('input-error').removeClass('validation-success');
        errorMsg.removeClass('hide');
        validMsg.addClass('hide');
        return false;
    }
}

// Функция сброса валидации телефона через jQuery
function resetPhoneValidation(phoneField) {
    const errorMsg = $('#error-msg-phone');
    const validMsg = $('#valid-msg-phone');

    phoneField.removeClass('input-error validation-success');
    errorMsg.addClass('hide');
    validMsg.addClass('hide');
}

// Получаем отформатированный номер телефона через jQuery
function getPhoneNumber() {
    const phoneField = $('#phone');
    if (phoneField.length && phoneField.intlTelInput("isValidNumber")) {
        return phoneField.intlTelInput("getNumber");
    }
    return null;
}


// Функция открытия модального окна с анимацией
function openInviteModal() {
    const modelName = getModelName();
    const modelUrl = getCurrentPageUrl();

    console.log('Opening modal for:', modelName, modelUrl);

    const modal = document.getElementById('inviteModal');
    if (!modal) {
        console.error('Modal element not found');
        return;
    }

    // Устанавливаем начальное состояние для анимации
    modal.style.display = 'flex';
    modal.style.opacity = '0';
    
    const modalContent = modal.querySelector('.modal-content');
    if (modalContent) {
        // Для десктопов: начинаем сверху страницы
        if (window.innerWidth >= 768) {
            modalContent.style.opacity = '0';
            modalContent.style.transform = 'translate(-50%, -100vh)'; // Начинаем за пределами экрана сверху
            modalContent.style.top = '0%';
        } else {
            // Для мобильных: обычная анимация
            modalContent.style.opacity = '0';
            modalContent.style.transform = 'translateY(-20px) scale(0.95)';
        }
    }

    // Запускаем анимацию появления
    setTimeout(() => {
        modal.style.transition = 'opacity 0.3s ease-out';
        modal.style.opacity = '1';
        
        if (modalContent) {
            // Для десктопов: двигаемся из верха в центр
            if (window.innerWidth >= 768) {
                modalContent.style.transition = 'opacity 1.2s ease-out, transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
                modalContent.style.opacity = '1';
                modalContent.style.transform = 'translate(-50%, -50%)';
                modalContent.style.top = '50%';
            } else {
                // Для мобильных: обычная анимация
                modalContent.style.transition = 'opacity 0.4s ease-out 0.1s, transform 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.1) 0.1s';
                modalContent.style.opacity = '1';
                modalContent.style.transform = 'translateY(0) scale(1)';
            }
        }
    }, 10);

    // Очистка формы
    const form = document.getElementById('inviteForm');
    if (form) {
        form.reset();
    }
    hidePriceDisplay();

    // Скрываем предыдущие сообщения
    const existingResult = document.querySelector('.result-message');
    if (existingResult) {
        existingResult.remove();
    }

    // Установка даты и времени
    const now = new Date();
    const minDateTime = new Date(now.getTime() + 60 * 60 * 1000); // +1 час
    const defaultDateTime = new Date(now.getTime() + 2 * 60 * 60 * 1000); // +2 часа

    function formatForDateTimeLocal(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        const hours = String(date.getHours()).padStart(2, '0');
        const minutes = String(date.getMinutes()).padStart(2, '0');
        return `${year}-${month}-${day}T${hours}:${minutes}`;
    }

    const datetimeField = document.getElementById('invite_datetime');
    if (datetimeField) {
        datetimeField.min = formatForDateTimeLocal(minDateTime);
        datetimeField.value = formatForDateTimeLocal(defaultDateTime);
    }

    // Сбрасываем телефонный ввод и переинициализируем
    setTimeout(() => {
        const phoneField = $('#phone');
        if (phoneField.length && phoneField.intlTelInput) {
            // Сначала сбросим
            phoneField.intlTelInput('destroy');

            // Затем переинициализируем с текущим кодом страны
            initPhoneInput().then(() => {
                console.log('Phone input reinitialized in modal');

                // Проверяем отображение кода страны
                setTimeout(() => {
                    const countryData = phoneField.intlTelInput('getSelectedCountryData');
                    console.log('Modal phone input country data:', countryData);

                    // Если код страны не отображается, принудительно покажем его
                    if (countryData && countryData.dialCode && !phoneField.val().includes('+' + countryData.dialCode)) {
                        console.log('Setting dial code in modal:', '+' + countryData.dialCode);
                        phoneField.intlTelInput('setNumber', '+' + countryData.dialCode);
                    }
                }, 300);
            });
        }
    }, 100);

    // Блокируем прокрутку
    document.body.style.overflow = 'hidden';

    // На мобильных устройствах добавляем класс для улучшенного отображения
    if (window.innerWidth <= 767) {
        modal.classList.add('mobile-view');
    }
}

// Функция для форматирования даты в читаемый вид (опционально)
function formatDateTimeForDisplay(datetimeString) {
    if (!datetimeString) return '';

    const date = new Date(datetimeString);
    const options = {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    };

    return date.toLocaleString('ru-RU', options);
}


// Функция закрытия модального окна с анимацией
function closeInviteModal() {
    const modal = document.getElementById('inviteModal');
    if (!modal) return;

    const modalContent = modal.querySelector('.modal-content');
    
    // Запускаем анимацию закрытия
    modal.style.transition = 'opacity 0.25s ease-out';
    modal.style.opacity = '0';
    
    if (modalContent) {
        // Для десктопов: двигаемся вверх за пределы экрана
        if (window.innerWidth >= 768) {
            modalContent.style.transition = 'opacity 0.25s ease-out, transform 0.5s cubic-bezier(0.6, -0.28, 0.735, 0.045)';
            modalContent.style.opacity = '0';
            modalContent.style.transform = 'translate(-50%, -100vh)'; // Уезжаем наверх
        } else {
            // Для мобильных: обычная анимация
            modalContent.style.transition = 'opacity 0.2s ease-out, transform 0.3s cubic-bezier(0.6, -0.28, 0.735, 0.045)';
            modalContent.style.opacity = '0';
            modalContent.style.transform = 'translateY(15px) scale(0.97)';
        }
    }

    // После завершения анимации скрываем модальное окно
    setTimeout(() => {
        modal.style.display = 'none';
        modal.style.transition = '';
        modal.style.opacity = '';
        
        if (modalContent) {
            modalContent.style.transition = '';
            modalContent.style.opacity = '';
            modalContent.style.transform = '';
            modalContent.style.top = '';
        }

        // Очищаем сообщения при закрытии
        const existingResult = document.querySelector('.result-message');
        if (existingResult) {
            existingResult.remove();
        }

        // Разблокируем прокрутку body
        document.body.style.overflow = '';
        
        // Убираем класс мобильного вида
        modal.classList.remove('mobile-view');
    }, 500); // Увеличиваем время для десктопной анимации
}

// Функция для показа временного уведомления
function showTempNotification(message, isSuccess = true) {
    const notification = $('<div>');
    notification.css({
        position: 'fixed',
        top: '20px',
        right: '20px',
        padding: '15px 20px',
        borderRadius: '5px',
        color: 'white',
        fontWeight: 'bold',
        zIndex: '10000',
        opacity: '0',
        transition: 'opacity 0.3s, transform 0.3s',
        backgroundColor: isSuccess ? '#28a745' : '#dc3545',
        transform: 'translateY(-20px) scale(0.95)',
        boxShadow: '0 10px 25px rgba(0,0,0,0.2)'
    });

    notification.text(message);
    $('body').append(notification);

    // Показываем с анимацией
    setTimeout(() => {
        notification.css({
            'opacity': '1',
            'transform': 'translateY(0) scale(1)'
        });
    }, 100);

    // Скрываем через 3 секунды
    setTimeout(() => {
        notification.css({
            'opacity': '0',
            'transform': 'translateY(-20px) scale(0.95)'
        });
        setTimeout(() => {
            notification.remove();
        }, 300);
    }, 3000);
}

// Проверка загрузки зависимостей
function checkDependencies() {
    console.log('Checking dependencies...');
    console.log('jQuery loaded:', typeof $ !== 'undefined', 'version:', $?.fn?.jquery);
    console.log('intlTelInput loaded:', typeof $.fn.intlTelInput !== 'undefined');
    return typeof $ !== 'undefined' && typeof $.fn.intlTelInput !== 'undefined';
}

// Инициализация при загрузке страницы
$(document).ready(function() {
    console.log('DOM ready, initializing form...');

    // Проверяем зависимости
    if (!checkDependencies()) {
        console.error('Required dependencies not loaded');
        return;
    }

    // Инициализация валидации
    setupRealTimeValidation();
    setupPhoneValidation();

    // Инициализация телефонного ввода с задержкой для гарантии загрузки
    setTimeout(() => {
        initPhoneInput();
    }, 300);

    // Обработчик для выбора продолжительности
    const durationSelect = document.getElementById('duration');
    if (durationSelect) {
        durationSelect.addEventListener('change', function() {
            const duration = this.value;
            const prices = getPrices(); // Получаем цены при каждом изменении

            console.log('Selected duration:', duration, 'Available prices:', prices);

            if (duration && prices[duration]) {
                showPrice(duration, prices[duration]);
            } else if (duration === '5' && prices['6']) {
                // Для 5+ часов показываем цену за 6 часов как ориентир
                showPrice('5', prices['6']);
            } else {
                hidePriceDisplay();
            }
        });

        // Обновляем цену при загрузке, если уже выбрано значение
        if (durationSelect.value) {
            durationSelect.dispatchEvent(new Event('change'));
        }
    }

    // Обработчик клика на крестик
    $('.close-2').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        closeInviteModal();
    });

    // Закрытие при клике вне окна
    $('#inviteModal').on('click', function(event) {
        if (event.target === this) {
            closeInviteModal();
        }
    });

    // Закрытие по ESC
    $(document).on('keydown', function(event) {
        if (event.key === 'Escape') {
            const modal = document.getElementById('inviteModal');
            if (modal && modal.style.display === 'flex') {
                closeInviteModal();
            }
        }
    });

    // Обработчик способа связи
    const contactMethodSelect = document.getElementById('contact_method');
    if (contactMethodSelect) {
        contactMethodSelect.addEventListener('change', function() {
            const method = this.value;

            console.log('Contact method changed to:', method);

            // Скрываем все контактные поля
            document.querySelectorAll('.contact-field').forEach(field => {
                field.style.display = 'none';
            });

            // Сбрасываем обязательность всех полей и включаем их
            const allContactInputs = document.querySelectorAll('.contact-field input, .contact-field textarea');
            allContactInputs.forEach(input => {
                input.required = false;
                input.disabled = false; // Включаем все поля, но не required
            });

            // Активируем нужные поля
            if (method === 'telegram') {
                const field = document.getElementById('telegram_field');
                if (field) {
                    field.style.display = 'block';

                    const nameInput = document.getElementById('client_name_telegram');
                    const telegramInput = document.getElementById('telegram');

                    if (nameInput) {
                        nameInput.required = true;
                        nameInput.disabled = false;
                    } else {
                        console.error('client_name_telegram input not found');
                    }

                    if (telegramInput) {
                        telegramInput.required = true;
                        telegramInput.disabled = false;
                    } else {
                        console.error('telegram input not found');
                    }
                } else {
                    console.error('telegram_field not found');
                }
            } else if (method === 'phone') {
                const field = document.getElementById('phone_field');
                if (field) {
                    field.style.display = 'block';

                    const nameInput = document.getElementById('client_name_phone');
                    const phoneInput = document.getElementById('phone');

                    if (nameInput) {
                        nameInput.required = true;
                        nameInput.disabled = false;
                    } else {
                        console.error('client_name_phone input not found');
                    }

                    if (phoneInput) {
                        phoneInput.required = true;
                        phoneInput.disabled = false;
                    } else {
                        console.error('phone input not found');
                    }
                } else {
                    console.error('phone_field not found');
                }
            } else if (method === 'email') {
                const field = document.getElementById('email_field');
                if (field) {
                    field.style.display = 'block';

                    const nameInput = document.getElementById('client_name_email');
                    const emailInput = document.getElementById('email');

                    if (nameInput) {
                        nameInput.required = true;
                        nameInput.disabled = false;
                    } else {
                        console.error('client_name_email input not found');
                    }

                    if (emailInput) {
                        emailInput.required = true;
                        emailInput.disabled = false;
                    } else {
                        console.error('email input not found');
                    }
                } else {
                    console.error('email_field not found');
                }
            }

            // Вызываем изменение для телефона, чтобы обновить валидацию
            if (method === 'phone') {
                setTimeout(() => {
                    const phoneInput = document.getElementById('phone');
                    if (phoneInput) {
                        // Переинициализируем телефонный ввод
                        $('#phone').intlTelInput('destroy');
                        initPhoneInput();
                    }
                }, 100);
            }
        });

        // Вызываем изменение сразу при загрузке, если есть значение по умолчанию
        setTimeout(() => {
            if (contactMethodSelect.value) {
                contactMethodSelect.dispatchEvent(new Event('change'));
            }
        }, 500);
    }

    // Обработчик отправки формы
    const inviteForm = document.getElementById('inviteForm');
    if (inviteForm) {
        inviteForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const modelName = getModelName();
            const modelUrl = getCurrentPageUrl();
			const modelCategory = getModelCategory();
			const isVip = getModelVipStatus();
		console.log('Final values - category:', modelCategory, 'isVip:', isVip);
				

            console.log('=== FORM SUBMIT ===');
            console.log('Model name:', modelName);
            console.log('Model URL:', modelUrl);

            // Проверяем обязательные поля
            const datetimeField = document.getElementById('invite_datetime');
            const durationField = document.getElementById('duration');

            if (!datetimeField || !datetimeField.value) {
                showTempNotification('Выберите дату и время встречи', false);
                datetimeField?.focus();
                return;
            }

            if (!durationField || !durationField.value) {
                showTempNotification('Выберите продолжительность встречи', false);
                durationField?.focus();
                return;
            }

            // Получаем выбранный способ связи
            const contactMethod = document.getElementById('contact_method').value;

            // Валидация выбора способа связи
            if (!contactMethod) {
                showTempNotification('Выберите способ связи', false);
                document.getElementById('contact_method').focus();
                return;
            }

            // Получаем данные в зависимости от выбранного метода
            let clientName = '';
            let contactValue = '';

            if (contactMethod === 'telegram') {
                clientName = document.getElementById('client_name_telegram').value.trim();
                contactValue = document.getElementById('telegram').value.trim();

                // Валидация имени
                if (!clientName) {
                    showTempNotification('Введите ваше имя', false);
                    document.getElementById('client_name_telegram').focus();
                    return;
                }
                if (!isValidName(clientName)) {
                    showTempNotification('Имя должно содержать только буквы (2-50 символов)', false);
                    document.getElementById('client_name_telegram').focus();
                    return;
                }

                // Валидация Telegram
                if (!contactValue) {
                    showTempNotification('Введите ваш Telegram', false);
                    document.getElementById('telegram').focus();
                    return;
                }
                if (!isValidTelegram(contactValue)) {
                    showTempNotification('Telegram должен начинаться с @ (5-32 символа)', false);
                    document.getElementById('telegram').focus();
                    return;
                }

            } else if (contactMethod === 'phone') {
                clientName = document.getElementById('client_name_phone').value.trim();
                const phoneInput = $('#phone');

                // Валидация имени
                if (!clientName) {
                    showTempNotification('Введите ваше имя', false);
                    document.getElementById('client_name_phone').focus();
                    return;
                }
                if (!isValidName(clientName)) {
                    showTempNotification('Имя должно содержать только буквы (2-50 символов)', false);
                    document.getElementById('client_name_phone').focus();
                    return;
                }

                // Валидация телефона с использованием нашей функции
                if (!phoneInput.val().trim()) {
                    showTempNotification('Введите ваш телефон', false);
                    phoneInput.focus();
                    return;
                }

                // Используем нашу функцию валидации
                if (!validatePhoneField(phoneInput)) {
                    showTempNotification('Введите корректный номер телефона', false);
                    phoneInput.focus();
                    return;
                }

                contactValue = getPhoneNumber();

            } else if (contactMethod === 'email') {
                clientName = document.getElementById('client_name_email').value.trim();
                contactValue = document.getElementById('email').value.trim();

                // Валидация имени
                if (!clientName) {
                    showTempNotification('Введите ваше имя', false);
                    document.getElementById('client_name_email').focus();
                    return;
                }
                if (!isValidName(clientName)) {
                    showTempNotification('Имя должно содержать только буквы (2-50 символов)', false);
                    document.getElementById('client_name_email').focus();
                    return;
                }

                // Валидация email
                if (!contactValue) {
                    showTempNotification('Введите ваш email', false);
                    document.getElementById('email').focus();
                    return;
                }
                if (!isValidEmail(contactValue)) {
                    showTempNotification('Введите корректный email адрес', false);
                    document.getElementById('email').focus();
                    return;
                }
            }

            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            submitButton.textContent = 'Отправка...';
            submitButton.disabled = true;

            // Добавляем анимацию загрузки к кнопке
            submitButton.classList.add('loading');

            console.log('contact_method:', contactMethod);
            console.log('phone value:', contactValue);
            console.log('Sending to server: modelCategory =', modelCategory, 'isVip =', isVip);
				
            // Собираем данные формы
            const formData = new FormData();
            formData.append('client_name', clientName);
            formData.append('model_name', getModelName());
            formData.append('model_url', getCurrentPageUrl());
            formData.append('invite_datetime', document.getElementById('invite_datetime').value);
            formData.append('duration', document.getElementById('duration').value);
            formData.append('place_type', document.getElementById('place_type').value);
            formData.append('address', document.getElementById('address').value);
            formData.append('contact_method', contactMethod);
		    formData.append('model_category', modelCategory);
			formData.append('is_vip', isVip ? 'true' : 'false');

            // Для телефона отправляем как phone
            if (contactMethod === 'phone') {
                formData.append('phone', contactValue);
                formData.append('contact', contactValue); // Дублируем в contact
            } else if (contactMethod === 'telegram') {
                formData.append('telegram', contactValue);
                formData.append('contact', contactValue); // Дублируем в contact
            } else if (contactMethod === 'email') {
                formData.append('email', contactValue);
                formData.append('contact', contactValue); // Дублируем в contact
            }

            formData.append('invite_comments', document.getElementById('invite_comments').value);
            formData.append('website', ''); // Защита от ботов

            // Отладка
            console.log('FormData content:');
            for (let [key, value] of formData.entries()) {
                console.log(key + ': ' + value);
            }

            fetch('/invite_test/', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                console.log('Server response:', data);

                // Создаем контейнер для результата
                const resultContainer = document.createElement('div');
                resultContainer.className = 'result-message';
                resultContainer.style.opacity = '0';
                resultContainer.style.transform = 'translateY(10px)';

                if (data.includes('success_page')) {
                    resultContainer.innerHTML = `
                        <div class="success-message">
                            <h3>✅ Приглашение отправлено!</h3>
                            <p>Мы свяжемся с вами в ближайшее время для подтверждения деталей.</p>
                        </div>
                    `;

                    // Показываем временное уведомление
                    showTempNotification('Приглашение успешно отправлено!', true);

                    // Анимированное появление сообщения
                    setTimeout(() => {
                        resultContainer.style.transition = 'opacity 0.5s ease-out, transform 0.5s ease-out';
                        resultContainer.style.opacity = '1';
                        resultContainer.style.transform = 'translateY(0)';
                    }, 10);

                    // Очищаем форму и закрываем через 3 секунды
                    setTimeout(() => {
                        closeInviteModal();
                    }, 3000);

                } else if (data.includes('error_message')) {
                    const errorMatch = data.match(/<div class="error_message">([^<]*)<\/div>/);
                    const errorText = errorMatch ? errorMatch[1] : 'Произошла ошибка при отправке';

                    resultContainer.innerHTML = `
                        <div class="error-message">
                            <h3>❌ Ошибка отправки</h3>
                            <p>${errorText}</p>
                            <p>Пожалуйста, напишите нам в Telegram: <a href="https://t.me/TheMissBlissAgency" target="_blank">@TheMissBlissAgency</a></p>
                        </div>
                    `;

                    // Анимированное появление сообщения
                    setTimeout(() => {
                        resultContainer.style.transition = 'opacity 0.5s ease-out, transform 0.5s ease-out';
                        resultContainer.style.opacity = '1';
                        resultContainer.style.transform = 'translateY(0)';
                    }, 10);

                    showTempNotification('Ошибка при отправке', false);
                } else {
                    resultContainer.innerHTML = `
                        <div class="error-message">
                            <h3>❌ Произошла ошибка</h3>
                            <p>Пожалуйста, попробуйте еще раз или напишите нам в Telegram.</p>
                        </div>
                    `;
                    
                    // Анимированное появление сообщения
                    setTimeout(() => {
                        resultContainer.style.transition = 'opacity 0.5s ease-out, transform 0.5s ease-out';
                        resultContainer.style.opacity = '1';
                        resultContainer.style.transform = 'translateY(0)';
                    }, 10);
                    
                    showTempNotification('Неизвестная ошибка', false);
                }

                // Удаляем предыдущие сообщения
                const existingResult = document.querySelector('.result-message');
                if (existingResult) {
                    existingResult.remove();
                }

                // Вставляем сообщение перед формой
                const form = document.getElementById('inviteForm');
                form.parentNode.insertBefore(resultContainer, form);

                // Прокручиваем к сообщению
                resultContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });

            })
            .catch(error => {
                console.error('Error:', error);

                const resultContainer = document.createElement('div');
                resultContainer.className = 'result-message';
                resultContainer.style.opacity = '0';
                resultContainer.style.transform = 'translateY(10px)';
                
                resultContainer.innerHTML = `
                    <div class="error-message">
                        <h3>❌ Ошибка сети</h3>
                        <p>Проверьте подключение к интернету и попробуйте еще раз.</p>
                    </div>
                `;

                const form = document.getElementById('inviteForm');
                form.parentNode.insertBefore(resultContainer, form);

                // Анимированное появление сообщения
                setTimeout(() => {
                    resultContainer.style.transition = 'opacity 0.5s ease-out, transform 0.5s ease-out';
                    resultContainer.style.opacity = '1';
                    resultContainer.style.transform = 'translateY(0)';
                }, 10);

                showTempNotification('Ошибка сети', false);
            })
            .finally(() => {
                submitButton.textContent = originalText;
                submitButton.disabled = false;
                submitButton.classList.remove('loading');
            });
        });
    }

    console.log('Form initialization complete');
});
