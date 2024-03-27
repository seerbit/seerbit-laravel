

<div align="center" >
 <img width="200"  valign="top" src="https://assets.seerbitapi.com/images/seerbit_logo_type.png">
</div>


<h1 align="center">
  <img width="60" valign="bottom" src="https://laravel.com/img/logomark.min.svg">
</h1>


# SeerBit's API SDK for Laravel 

SeerBit PHP SDK for easy integration with SeerBit's API.

## Requirements
This package can be used with Laravel 5.8 or higher
PHP 8.0 or higher

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

Open your .env file and add your public key, secret key and token:

```php
SEERBIT_PUBLIC_KEY=xxxxxxxxxxxxx
SEERBIT_SECRET_KEY=xxxxxxxxxxxxx
SEERBIT_TOKEN=xxxxxxxxxxxxx
```

*If you are using a cloud hosting service such as lambda, etc, you may need to add the above details to your environment variables section.*

```
ENSURE YOU DO NOT PUBLISH YOUR ENV FILE TO YOUR GIT REPOSITORY
```
 
## Usage

### Standard checkout
``` php
namespace App\Http\Controllers;

use SeerbitLaravel\Facades\Seerbit;

class Standard
{
        public function Checkout(){
            try{
            $uuid = bin2hex(random_bytes(6));
            $transaction_ref = strtoupper(trim($uuid));
            
            $payload = [
                "amount" => "1000",
                "callbackUrl" => "http:yourwebsite.com",
                "country" => "NG",
                "currency" => "NGN",
                "email" => "customer@email.com",
                "paymentReference" => $transaction_ref,
                "productDescription" => "product_description",
                "productId" => "64310880-2708933-427",
                "tokenize" => true //optional
            ];

            
            // Initialize the payment with the Facade
            // Or with Facade
            $trans = SeerBit::Standard()->Initialize($payload);

            // You can get your redirect link for customer payment from $tran
            $redirectLink = $trans['data']['payments']['redirectLink'];

            //  Redirect to this link in order to complete the transaction
            if (!empty($redirectLink)) {
                return redirect($redirectLink)->with("status", $trans['data']['message']);
            } else {
                //  Something went wrong while initiating the transaction
                return redirect()->back()->with('error', $trans['data']['message']);
            }
        
        }catch (\Exception $e){
        //    Handle exception handling
        }
}
```

Full documentation can be found [**here**](https://seerbit.github.io/seerbit-laravel) 

<br>

## Configure Logger ##
````php
//Set Logger path in environment config file
SEERBIT_LOGGER_PATH = ""
````
<br>

## API Documentation ##
* https://doc.seerbit.com/

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing
We strongly encourage you to join us in contributing to this repository so everyone can benefit from:
* New features and functionality
* Resolved bug fixes and issues
* Any general improvements

### Security

If you discover any security related issues, please email developers@seerbit.com instead of using the issue tracker.

## Credits

- [Victor Osas Ighalo](https://github.com/victorighalo)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

