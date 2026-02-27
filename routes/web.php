<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'message' => 'Welcome to the Laravel API',
        'version' => '1.0.0',
        'endpoints' => [
            'health' => '/health',
        ],
    ]);
});

Route::get('/health', function () {
    return response()->json(['status' => 'healthy']);
});
