<?php

use App\Http\Controllers\SeerBitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('seerbit-demo');
})->name('seerbit.demo.home');

Route::get('/checkout', [SeerBitController::class, 'checkout'])->name('seerbit.demo.checkout');

Route::get('/callback', function () {
    return response()->json([
        'message' => 'SeerBit callback endpoint reached.',
    ]);
})->name('seerbit.demo.callback');
