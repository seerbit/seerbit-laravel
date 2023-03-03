<?php

namespace App\Http\Controllers;

use SeerbitLaravel\Facades\Seerbit;

class seerBitController extends Controller
{
    public function Checkout()
    {
        try {

            $uuid = bin2hex(random_bytes(6));
            $transaction_ref = strtoupper(trim($uuid));

            $payload = [
                "amount" => "1000",
                "callbackUrl" => "",
                "country" => "NG",
                "currency" => "NGN",
                "email" => "customer@email.com",
                "paymentReference" => $transaction_ref,
                "productDescription" => "product_description",
                "productId" => "64310880-2708933-427"
            ];

//            $trans = seerbit()->Standard()->Initialize($payload);
            //Or with Facade
            $trans = SeerBit::Standard()->Initialize($payload);
            dd($trans);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

}
