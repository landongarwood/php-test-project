# Book Management App

## Setup dev environment

```
composer install
cp .env.example .env
php artisan key:generate
```

## Set mysql database credentials in .env file.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

## Run database migration and seeder
```
php artisan db:migrate
php artisan db:seed
```

## Run local development server
```
php artisan serve
```

You can use example user which is created
```
Email: admin@admin.com
Password: password
```
