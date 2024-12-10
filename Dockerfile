FROM php:8.2-fpm

# Cài đặt các extension PHP cần thiết cho Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip

# Cài đặt Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy mã nguồn vào container
COPY . /var/www/html

# Set các quyền cho thư mục
RUN chown -R www-data:www-data /var/www/html

# Cài đặt các phụ thuộc của Composer
WORKDIR /var/www/html
RUN composer install --no-dev --optimize-autoloader --verbose

# Chạy Nginx
CMD ["supervisord"]
