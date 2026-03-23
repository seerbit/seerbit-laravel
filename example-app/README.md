# SeerBit Laravel 12 Example App

This directory contains a fresh Laravel 12 application wired to the local `seerbit/seerbit-laravel` package through a Composer path repository.

## Requirements

- PHP 8.2+
- Composer

## Setup

```bash
cd example-app
cp .env.example .env
composer install
php artisan key:generate
php artisan serve
```

Add your SeerBit credentials to `.env`:

```bash
SEERBIT_PUBLIC_KEY=
SEERBIT_SECRET_KEY=
SEERBIT_TOKEN=
```

## Demo Routes

- `/` shows the Laravel 12 SeerBit demo landing page
- `/checkout` initializes a sample SeerBit checkout request
- `/callback` is the sample callback endpoint used by the checkout payload

## Test

```bash
php artisan test
```
