The Card Tokenize and Charge API allows you to charge a tokenized payment.

Add the NameSpace: **SeerbitLaravel\Facades\Seerbit** to your Class or Controller or Route in case you want to use the Facade.

### Create Token

##### Tokenize a card


```php
try{
$uuid = bin2hex(random_bytes(6));
$transaction_ref = strtoupper(trim($uuid));

$payload =  [
   "amount": "100.00",        
   "fullName": "Anonymous Shopper",
   "mobileNumber": "03447522256",
   "currency": "NGN",
   "country": "NG",
   "email": "anonshopper@gmail.com",
   "paymentType": "CARD",
   "cardNumber": "6280511000000095",
   "expiryMonth": "12",
   "expiryYear": "26",
   "cvv": "123",
   "pin": "1234",
   "tokenize": true,
   "paymentReference" => $transaction_ref
];

$tokenization_result = SeerBit::Tokenization()->CreateToken($payload);

}catch (\Exception $e){
echo $e->getMessage();
}

```

### Get Token

##### Get details of tokenized card


```php
try{

//transaction reference used when creating a token
SeerBit::Tokenization()->GetToken($transaction_reference);

}catch (\Exception $e){
echo $e->getMessage();
}

```

### Charge a Token

##### Charge a card with its association token


```php
try{
$uuid = bin2hex(random_bytes(6));
$transaction_ref = strtoupper(trim($uuid));

//authorizationCode is a property in the response payload of GetToken
$payload =  [
 "paymentReference" => $transaction_ref, 
 "authorizationCode" => "authorizationCode", 
 "amount" => "100.00"
];

$tokenization_result = SeerBit::Tokenization()->ChargeToken($payload);

}catch (\Exception $e){
echo $e->getMessage();
}

```

### Charge a Token Bulk

##### Charge tokens in a batch



```php
try{
$uuid = bin2hex(random_bytes(6));
$transaction_ref = strtoupper(trim($uuid));

//authorizationCode is a property in the response payload of GetToken
//$transaction_ref should be unique for each record
 $payload = [
  (object)[
   'authorizationCode' => $authorizationCode,
   'paymentReference' => $transaction_ref,
   'amount' => '100.00',
   'publicKey' => 'MERCHANT_PUBLIC_KEY'
   ]
 ];

$tokenization_result = SeerBit::Tokenization()->ChargeTokenBulk($payload);

}catch (\Exception $e){
echo $e->getMessage();
}

```
