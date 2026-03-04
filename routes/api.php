<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'api' => 'tfg-api',
        'version' => 'v1',
        'status' => 'ok'
    ]);
});