This service provides access to making secure transactions by collecting the shoppers card details and process payment using pre-authentication approach and immediate charge.


###Authorize One Time
Authorize and Tokenize a transaction before capturing.
The card will be tokenized automatically after a successful transaction.

>
```php
try{
$uuid = bin2hex(random_bytes(6));
$transaction_ref = strtoupper(trim($uuid));

$payload = [
"currency" => "KES", 
"country" => "KE", 
"cardNumber" => "5123450000000008", 
"expiryMonth" => "06", 
"expiryYear" => "21", 
"amount" => "100.00", 
"cvv" => "100", 
"email" => "anonshopper@gmail.com", 
"fullName" => "Anonymous Shopper",
"paymentReference" => $transaction_ref
];

$trans = SeerBit::Card()->AuthorizeOnetime($payload);

}catch (\Exception $e){

}

```
>

###Authorize With Token
Authorize a transaction with a customer token before capturing

>
```php
try{
$uuid = bin2hex(random_bytes(6));
$transaction_ref = strtoupper(trim($uuid));

$payload = [
"currency" => "KES", 
"country" => "KE", 
"cardToken" => "tk_1d67fb8a-ee8f-4fad-80e7-c30d2d", 
"amount" => "100.00", 
"email" => "anonshopper@gmail.com", 
"fullName" => "Anonymous Shopper",
"paymentReference" => $transaction_ref 
];

$trans = SeerBit::Card()->AuthorizeWithToken($payload);

}catch (\Exception $e){

}

```
>

###Captutue
Capture an authorized transaction

>
```php
try{

$payload = [
"currency" => "KES", 
"country" => "KE",
"amount" => "100.00",
"paymentReference" => "captured_transaction_reference" 
];

$trans = SeerBit::Card()->Capture($payload);

}catch (\Exception $e){

}

```
>

###Cancel
Cancel an authorized transaction

>
```php
try{

$payload = [
"currency" => "KES", 
"country" => "KE",
"amount" => "100.00",
"paymentReference" => "captured_transaction_reference" 
];

$trans = SeerBit::Card()->Cancel($payload);

}catch (\Exception $e){

}

```
>


###Refund
Refund an authorized transaction

>
```php
try{

$payload = [
"currency" => "KES", 
"country" => "KE",
"amount" => "100.00",
"paymentReference" => "captured_transaction_reference" 
];

$trans = SeerBit::Card()->Refund($payload);

}catch (\Exception $e){

}

```
>

###Tokenize
Tokenize customer's card

>
```php
try{

$uuid = bin2hex(random_bytes(6));
$transaction_ref = strtoupper(trim($uuid));

$payload = [
   "fullName" => "Victor Ighalo", 
   "currency" => "KES", 
   "country" => "KE", 
   "cardNumber" => "5123450000000008", 
   "expiryMonth" => "06", 
   "expiryYear" => "21",
   "paymentReference" => $transaction_ref  
]; 

$trans = SeerBit::Card()->Tokenize($payload);

}catch (\Exception $e){

}

```
>


###Non 3DS Direct Debit plus tokenization
Debit a customer's card without 3DS authentication process. 
The card will be tokenized automatically after a successful transaction.

>
```php
try{
    
$uuid = bin2hex(random_bytes(6));
$transaction_ref = strtoupper(trim($uuid));

$payload = [
   "fullName" => "Victor Ighalo", 
   "currency" => "KES", 
   "country" => "KE", 
   "cardNumber" => "5123450000000008", 
   "expiryMonth" => "06", 
   "expiryYear" => "21",
   "paymentReference" => $transaction_ref  
]; 

$trans = SeerBit::Card()->Non3DSOneTime($payload);

}catch (\Exception $e){

}

```
>

###Non 3DS Direct Debit with token
Debit a customer's card without 3DS authentication process.

>
```php
try{
    
$uuid = bin2hex(random_bytes(6));
$transaction_ref = strtoupper(trim($uuid));

$payload = [
   "amount" => "1000.00", 
   "fullName" => "john doe", 
   "currency" => "NGN", 
   "country" => "NG", 
   "email" => "johndoe@gmail.com", 
   "cardToken" => "tk_e4cae021-e2ce-4b59-9b1e-3f859cefd" 
];  

$trans = SeerBit::Card()->Non3DSWithToken($payload);

}catch (\Exception $e){

}

```
>