FROM php

RUN apt-get update -y && apt-get install -y libmcrypt-dev && apt-get install -y libpq-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo pdo_pgsql

WORKDIR /app
COPY . /app

EXPOSE 8000
CMD composer install && php artisan serve --host 0.0.0.0 --port 8000