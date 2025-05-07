```bash

laravel new scanner-api --api --git --phpunit --database=sqlite

cd scanner-api

php artisan install:api --passport
# uuids: yes

# npm install && npm run build
composer run dev

php artisan make:seeder ClientSeeder
php artisan db:seed --class=ClientSeeder

php artisan make:class Services/AuthService
php artisan make:controller Api/AuthController --test

# Update routes/api.php

```
