FROM webdevops/php-nginx:8.1

# Cài đặt Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy mã nguồn vào container
COPY . /var/www/html

# Cài đặt các phụ thuộc của Composer
RUN cd /var/www/html && composer install --no-dev --optimize-autoloader

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

# Chạy supervisord để khởi động PHP-FPM và Nginx
CMD ["supervisord"]
