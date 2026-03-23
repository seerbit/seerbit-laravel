<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use SeerbitLaravel\Facades\Seerbit;

class SeerBitController extends Controller
{
    public function checkout(): JsonResponse
    {
        $missingConfig = collect([
            'SEERBIT_PUBLIC_KEY' => config('seerbit.public_key'),
            'SEERBIT_SECRET_KEY' => config('seerbit.secret_key'),
            'SEERBIT_TOKEN' => config('seerbit.token'),
        ])->filter(fn ($value) => blank($value))->keys()->values();

        if ($missingConfig->isNotEmpty()) {
            return response()->json([
                'message' => 'Set your SeerBit credentials in example-app/.env before running the checkout demo.',
                'missing' => $missingConfig,
            ], 422);
        }

        try {
            $uuid = bin2hex(random_bytes(6));
            $transactionRef = strtoupper(trim($uuid));

            $payload = [
                'amount' => '1000',
                'callbackUrl' => route('seerbit.demo.callback'),
                'country' => 'NG',
                'currency' => 'NGN',
                'email' => 'customer@email.com',
                'fullName' => 'John Doe',
                'paymentReference' => $transactionRef,
                'productDescription' => 'Laravel 12 demo payment',
                'productId' => '64310880-2708933-427',
                'tokenize' => true,
            ];

            return response()->json([
                'message' => 'Checkout initialized.',
                'payload' => $payload,
                'response' => Seerbit::Standard()->Initialize($payload),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'SeerBit checkout failed.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
