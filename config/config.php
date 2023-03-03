<?php

return [
    'public_key' => env('SEERBIT_PUBLIC_KEY'),
    'secret_key' => env('SEERBIT_SECRET_KEY'),
    'token' => env('SEERBIT_TOKEN'),
    'logger_path' => env('SEERBIT_LOGGER_PATH',public_path()),
    'logger' => env('SEERBIT_LOGGER'),
];
