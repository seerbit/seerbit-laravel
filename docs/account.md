This service provides access to making secure transactions by collecting the shoppers bank account details and process the payment.

###Authorize
>
```php
try{
$uuid = bin2hex(random_bytes(6));
$transaction_ref = strtoupper(trim($uuid));

$payload = [
   "amount" => "1000.00", 
   "accountName" => "Customer Bank Account Name", 
   "accountNumber" => "1234567890", 
   "bankCode" => "033", 
   "currency" => "NGN", 
   "country" => "NG", 
   "email" => "customer@email.com" ,
   "paymentReference" => $transaction_ref
]; 

$trans = SeerBit::Account()->Authorize($payload);

}catch (\Exception $e){

}

```
>

###Banks List
>
```php
try{
$trans = SeerBit::Resources()->Banks();
}catch (\Exception $e){
}

```
>