<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// use Illuminate\Support\Facades\Route;

// Route::get('/health', function () {
//     return response()->json([
//         'status' => 'ok',
//         'time' => now()->toDateTimeString()
//     ]);
// });
