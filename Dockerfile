FROM php:8.1
RUN apt-get update -y
RUN apt-get install -y openssl
RUN apt-get install -y zip
RUN apt-get install -y unzip
RUN apt-get install -y git 
RUN apt-get install -y libpq-dev \
    && docker-php-ext-install pgsql pdo_pgsql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#RUN docker-php-ext-install mbstring
RUN pecl install mongodb \
    && docker-php-ext-enable mongodb
WORKDIR /app
COPY . /app
RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=8000
EXPOSE 80