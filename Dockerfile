FROM php:8.2-fpm-alpine

# Устанавливаем расширения PHP и зависимости
RUN apk add --no-cache \
    nginx \
    supervisor \
    curl \
    git \
    libzip-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        mysqli \
        gd \
        zip \
        bcmath \
    && mkdir -p /run/nginx \
    && mkdir -p /var/log/supervisor \
    && mkdir -p /var/www/html \
    && chown -R www-data:www-data /var/www/html

# Копируем конфигурации
COPY nginx/nginx.conf /etc/nginx/nginx.conf
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Копируем файлы сайта
COPY WebSite/ /var/www/html/

# Настраиваем права и создаем необходимые директории
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && find /var/www/html -type f -exec chmod 644 {} \; \
    && mkdir -p /var/www/html/cache \
    && chmod -R 777 /var/www/html/cache \
    && mkdir -p /var/www/html/logs \
    && chmod -R 777 /var/www/html/logs 2>/dev/null || true \
    && mkdir -p /var/www/html/uploads \
    && chmod -R 777 /var/www/html/uploads

# Создаем php-fpm пул с правильным пользователем
RUN echo '[www]' > /usr/local/etc/php-fpm.d/www.conf \
    && echo 'user = www-data' >> /usr/local/etc/php-fpm.d/www.conf \
    && echo 'group = www-data' >> /usr/local/etc/php-fpm.d/www.conf \
    && echo 'listen = 127.0.0.1:9000' >> /usr/local/etc/php-fpm.d/www.conf \
    && echo 'pm = dynamic' >> /usr/local/etc/php-fpm.d/www.conf \
    && echo 'pm.max_children = 5' >> /usr/local/etc/php-fpm.d/www.conf \
    && echo 'pm.start_servers = 2' >> /usr/local/etc/php-fpm.d/www.conf \
    && echo 'pm.min_spare_servers = 1' >> /usr/local/etc/php-fpm.d/www.conf \
    && echo 'pm.max_spare_servers = 3' >> /usr/local/etc/php-fpm.d/www.conf \
    && echo 'clear_env = no' >> /usr/local/etc/php-fpm.d/www.conf

# PHP настройки через php.ini
RUN echo "memory_limit = 256M" >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini \
    && echo "upload_max_filesize = 64M" >> /usr/local/etc/php/conf.d/docker-php-upload.ini \
    && echo "post_max_size = 64M" >> /usr/local/etc/php/conf.d/docker-php-upload.ini \
    && echo "max_execution_time = 300" >> /usr/local/etc/php/conf.d/docker-php-maxexectime.ini \
    && echo "display_errors = 0" >> /usr/local/etc/php/conf.d/docker-php-display.ini \
    && echo "error_reporting = 22527" >> /usr/local/etc/php/conf.d/docker-php-errors.ini

# Переменные окружения
ENV PHP_ERROR_REPORTING=22527
ENV display_errors=0
ENV PHP_MEMORY_LIMIT=256M
ENV PHP_UPLOAD_MAX_FILESIZE=64M
ENV PHP_POST_MAX_SIZE=64M
ENV TZ=Europe/Moscow

# Порт для Render
EXPOSE 10000

# Запускаем Supervisor
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
