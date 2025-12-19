FROM php:8.2-fpm-alpine

# 1. Устанавливаем Nginx и расширения PHP
RUN apk add --no-cache nginx \
    && docker-php-ext-install pdo pdo_mysql

# 2. Копируем ВАШ оригинальный nginx.conf (он правильный!)
COPY nginx/nginx.conf /etc/nginx/nginx.conf

# 3. Проверяем и исправляем порт если нужно
RUN sed -i 's/listen [0-9]*;/listen 10000;/g' /etc/nginx/nginx.conf 2>/dev/null || true

# 4. Копируем файлы сайта
COPY WebSite/ /var/www/html/

# 5. Настраиваем права (минимально)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# 6. Создаем php-fpm конфиг
RUN echo '[www]' > /usr/local/etc/php-fpm.d/zz-docker.conf \
    && echo 'listen = 127.0.0.1:9000' >> /usr/local/etc/php-fpm.d/zz-docker.conf \
    && echo 'user = www-data' >> /usr/local/etc/php-fpm.d/zz-docker.conf \
    && echo 'group = www-data' >> /usr/local/etc/php-fpm.d/zz-docker.conf \
    && echo 'pm = dynamic' >> /usr/local/etc/php-fpm.d/zz-docker.conf \
    && echo 'pm.max_children = 5' >> /usr/local/etc/php-fpm.d/zz-docker.conf

# 7. Включаем ошибки для отладки
RUN echo "display_errors = On" >> /usr/local/etc/php/conf.d/docker-php-display.ini \
    && echo "error_reporting = E_ALL" >> /usr/local/etc/php/conf.d/docker-php-errors.ini

EXPOSE 10000

# 8. Запускаем оба процесса в одном контейнере
CMD sh -c "php-fpm -D && nginx -g 'daemon off;'"
