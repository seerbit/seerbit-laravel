This service provides access to making secure transactions through mobile mney channels.
It is an e-wallet payment method in Africa which allows you to accept payments from your customers with their mobile money wallets.

###Authorize
>
```php
try{
$uuid = bin2hex(random_bytes(6));
$transaction_ref = strtoupper(trim($uuid));

$payload = [
   "fullName" => "john doe", 
   "email" => "johndoe@gmail.com", 
   "mobileNumber" => "08022343345", 
   "currency" => "GHS", 
   "country" => "GH", 
   "network" => "MTN", 
   "amount" => "10.01", 
   "paymentType" => "MOMO",
   "paymentReference" => $transaction_ref 
]; 

$trans = SeerBit::Momo()->Authorize($payload);

}catch (\Exception $e){

}

```
>


###Networks
A list of available mobile money payment networks
>
```php
try{

$trans = SeerBit::Momo()->Networks();

}catch (\Exception $e){

}

```
>