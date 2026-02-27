FROM richarvey/nginx-php-fpm:3.1.6

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html

ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Wait for socket
RUN echo "Waiting for php-fpm to be ready..." && \
    while [ ! -S /var/run/php-fpm.sock ]; do sleep 1; done && \
    echo "php-fpm.sock ready!"

CMD ["/start.sh"]