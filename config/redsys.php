<?php

return [
    'environment' => env('REDSYS_ENVIRONMENT', 'test'), // 'live' o 'test'
    'merchant_code' => env('REDSYS_MERCHANT_CODE', '000000000'),
    'terminal' => env('REDSYS_TERMINAL', '100'),
    'currency' => env('REDSYS_CURRENCY', '978'),
    'secret_key' => env('REDSYS_SECRET_KEY', 'XXXXXXXXXXXXXXXXXXXXXX'),
    'url_ok' => env('REDSYS_URL_OK', 'your_url_ok'), // Ruta para redirección en caso de pago correcto
    'url_ko' => env('REDSYS_URL_KO', 'your_url_ko'), // Ruta para redirección en caso de pago incorrecto
];