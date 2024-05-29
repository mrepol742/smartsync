# smartsync

## Pre-requisites
- Install XAMPP/LAMPP
- Install Node.js v20.11+
- Install PHP v8.3+

## Getting started
- fork the repository https://github.com/mrepol742/smartsync
- clone the fork repository
  ```
  _> using https
  git clone https://github.com/<your-username>/smartsync

  _> using ssh
  git clone git@github.com:<your-username>/smartsync
  ```
- install dependecies
  ```
  composer install && npm install
  cd public && composer install && cd ..
  ```
- create .env
  ```
  cp .env.example .env
  ```
- generate app key
  ```
  php artisan key:generate
  ```
- database migration
  ```
  php artisan migrate
  php artisan db:seed
  ```

## Run
- start mysql server
  Open XAMPP/LAMPP & start mysql
  to view the phpmyadmin it required Apache to be enabled too
- start vite first
  ```
  npm run dev
  ```
- start laravel
  ```
  php artisan serve
  ```

## Squashing migration
```
  php artisan schema:dump --prune
```

## Refresh migration
```
  php artisan migrate:refresh
  php artisan db:seed
```