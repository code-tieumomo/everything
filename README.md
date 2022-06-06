# Get started

## Prerequisites
- Laravel 6 or higher.
- PHP 8.0 or higher.
- MYSQL 8 or higher.
- NodeJS and NPM.

## Deploy
```bash
# Install needle packages
composer install

# Create .env and config databases
cp .env.example .env

# Generate app key
php artisan key:generate

# Install needle packages
npm install

# Mix
npm run dev

# Deploy
php artisan migrate
```
