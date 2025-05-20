#!/bin/sh

# Jalankan migrasi & bersihkan cache
php artisan migrate --force
php artisan optimize
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
php artisan storage:link

# Jalankan seeder hanya jika environment bukan production
if [ "$APP_ENV" != "production" ]; then
  php artisan db:seed --force
fi

# Jalankan Laravel dengan PORT dari Railway
echo "Starting Laravel on port $PORT..."
php artisan serve --host=0.0.0.0 --port=$PORT
