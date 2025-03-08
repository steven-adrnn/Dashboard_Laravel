#!/bin/sh

# Jalankan migrasi dan bersihkan cache
php artisan migrate --force
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Jalankan Laravel pada port yang ditentukan Railway
php artisan serve --host=0.0.0.0 --port=$PORT
