FROM richarvey/nginx-php-fpm:3.1.6

# Copy your entire app
COPY . /var/www/html

# Fix permissions (important on Render)
RUN chown -R www-data:www-data /var/www/html

# Environment settings optimized for Render
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel production settings
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Start NGINX + PHP-FPM
CMD ["/start.sh"]