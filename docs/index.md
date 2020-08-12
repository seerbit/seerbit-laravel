#Introduction

# This SDK enables direct and structured interction with SeerBit API

Once installed you can easily configure the SDK by providing your credentials in your environment file configuration.

For full documentation of SeerBit visit [mkdocs.org](https://www.docs.seerbit.com).


## Requirements
This package can be used with Laravel 5.8 or higher
PHP 7.1 or higher

## Installation

The preferred method is via [composer](https://getcomposer.org). Follow the composer
[installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have
composer installed.

Once composer is installed, execute the following command in your project root to install this library:

```bash
composer require seerbit/seerbit-laravel
```

The service provider will automatically register itself.

You can publish the config file with:
```bash
 php artisan vendor:publish --provider="SeerbitLaravel\SeerbitServiceProvider" --tag="config"
```
This is the contents of the config file that will be published to your app's directory path `config/seerbit.php`:
```php
return [
    'environment' => env('SEERBIT_ENVIRONMENT', \Seerbit\Environment::LIVE),
    'public_key' => env('SEERBIT_PUBLIC_KEY'),
    'secret_key' => env('SEERBIT_SECRET_KEY'),
    'token' => env('SEERBIT_TOKEN'),
];

```

####
You can find both public and secret keys from your merchant dashboard. 

The token can be generated following the guides [here](https://doc.seerbit.com/getstarted/authentication)

Replace them by changes the key values in your **.env** file.

`SEERBIT_ENVIRONMENT="public_key"`

###
Clear your config cache and restart the server after installation to ensure your config will be loaded. If you’ve been caching configurations locally, clear your config cache with either of these commands:

```bash
php artisan optimize:clear
# or
php artisan config:clear
```

###Usage
Import the namespace: 
use SeerbitLaravel\Facades\Seerbit;
