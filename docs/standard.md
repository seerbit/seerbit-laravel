This service provides access to making secure transactions by generating a checkout link. With the link, you can then decide to redirect automatically or allow your shoppers to click a button before redirecting.

Add the NameSpace: **SeerbitLaravel\Facades\Seerbit** to your Class or Controller or Route in case you want to use the Facade.


###Initialize transaction
>
```php
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
                "productId" => "64310880-2708933-427"
            ];

            $trans = seerbit()->Standard()->Initialize($payload);
            // or $trans = SeerBit::Standard()->Initialize($payload);
            response()->redirectTo(trans->data->payments->redirectLink);
          
        }catch (\Exception $e){
         
        }
    }
}
```
>


###Validate transaction

>
```php
namespace App\Http\Controllers;

use SeerbitLaravel\Facades\Seerbit;

class Standard
{

    public function Validate($trans_ref){
        try{
            $response = SeerBit::Standard()->ValidateStatus($trans_ref);
            
          
        }catch (\Exception $e){
         
        }
    }
}
```
>