FROM alpine:3.16
WORKDIR /app
RUN apk add --no-cache composer php8-apache2 php8-dom php8-fileinfo php8-opcache php8-pdo php8-pecl-mongodb
ADD composer.json .
RUN composer update --no-autoloader --no-cache --no-scripts
ADD default.conf /etc/apache2/conf.d/
ADD . .
RUN composer dump
CMD httpd -D FOREGROUND
