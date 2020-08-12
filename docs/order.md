Order objects are created to handle purchases of previously defined products. You can create and pay for bulk orders.

###Create
Create an order
>
```php
try{
$uuid = bin2hex(random_bytes(6));
$transaction_ref = strtoupper(trim($uuid));

$payload = [
   "email" => "customer@email.com", 
   "fullName" => "John Doe", 
   "orderType" => "BULK_BULK", 
   "callbackUrl" => "https://yourdomain.com", 
   "country" => "NG", 
   "currency" => "NGN", 
   "amount" => "1400", 
   "paymentReference" => $transaction_ref
   "orders" => [
         [
            "orderId" => "22S789420214623", 
            "currency" => "NGN", 
            "amount" => "500.00", 
            "productId" => "fruits", 
            "productDescription" => "mango" 
         ], 
         [
               "orderId" => "1a3sa82748272556947", 
               "currency" => "NGN", 
               "amount" => "900.00", 
               "productId" => "fruits", 
               "productDescription" => "orange" 
            ] 
      ] 
]; 

$trans = SeerBit::Order()->Create($payload);

}catch (\Exception $e){

}

```
>

