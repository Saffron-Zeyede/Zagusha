#!/usr/bin/env bash

set -e

echo "Running composer install..."
composer install --no-dev --optimize-autoloader

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force --no-interaction

echo "Deployment finished."