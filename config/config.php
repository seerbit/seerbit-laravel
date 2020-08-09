<?php

return [
    'environment' => env('SEERBIT_ENVIRONMENT', \Seerbit\Environment::LIVE),
    'public_key' => env('SEERBIT_PUBLIC_KEY'),
    'secret_key' => env('SEERBIT_SECRET_KEY'),
    'token' => env('SEERBIT_TOKEN'),
    'logger_path' => env('SEERBIT_LOGGER_PATH',dirname(__FILE__)),
    'logger' => env('SEERBIT_LOGGER'),
];
