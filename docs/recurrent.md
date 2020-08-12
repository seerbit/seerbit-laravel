Recurring payments are scheduled payments to pay for products or services that require payments on a regular basis. For example, a cardholder paying an on-demand movie or music streaming provider's subcription fee either weekly, monthly or annually.

###Create
Create a subscription
>
```php
try{
$uuid = bin2hex(random_bytes(6));
$transaction_ref = strtoupper(trim($uuid));

$payload =  [
   "cardNumber" => "2223000000000007", 
   "expiryMonth" => "05", 
   "callbackUrl" => "https://callback.url.com", 
   "expiryYear" => "21", 
   "cvv" => "100", 
   "amount" => "20", 
   "currency" => "NGN", 
   "productDescription" => "Medium HM", 
   "productId" => "mhmo", 
   "country" => "NG", 
   "startDate" => "2019-01-11", 
   "cardName" => "Bola Olat", 
   "billingCycle" => "DAILY", 
   "email" => "customer@email.com", 
   "customerId" => "199721652416534", 
   "billingPeriod" => "4",
   "paymentReference" => $transaction_ref
];

SeerBit::Recurrent()->CreateSubscription($payload);

}catch (\Exception $e){

}

```
>


###Charge
Charge a subscription
>
```php
try{

$payload =  [
   "amount" => "20", 
   "currency" => "NGN", 
   "email" => "customer@email.com", 
   "paymentReference" => "REF_USED_TO_CREATE_A_SUBSCRIPTION", 
   "authorizationCode" => "54570064E849" 
]; 

SeerBit::Recurrent()->ChargeSubscription($payload);

}catch (\Exception $e){

}

```
>

###Get all Subscriptions list
>
```php
try{

SeerBit::Recurrent()->GetMerchantSubscription();

}catch (\Exception $e){

}

```
>

###Get Customer subscription
>
```php
try{

SeerBit::Recurrent()->GetCustomerSubscription($customerId);

}catch (\Exception $e){

}

```
>


###Update a subscription
>
```php
try{

$payload =  [
   "amount" => "20", 
   "currency" => "NGN", 
   "country" => "NG", 
   "status" => "INACTIVE", 
   "email" => "customer@email.com", 
   "billingId" => "199721652416534", 
   "mobileNumber" => "09339993322" 
];

SeerBit::Recurrent()->UpdateSubscription($payload);

}catch (\Exception $e){

}

```
>

###Validate subscription status
>
```php
try{
//billingId is gotten from a subscription
SeerBit::Recurrent()->ValidateStatus($billingId);

}catch (\Exception $e){

}

```
>