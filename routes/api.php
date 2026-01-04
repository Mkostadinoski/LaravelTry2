<?php

use Illuminate\Support\Facades\Route;

Route::get('/recipes', [App\Http\Controllers\RecipeController::class, 'index']);
Route::post('/recipes', [App\Http\Controllers\RecipeController::class, 'store']);
Route::get('/recipes/{recipe}', [App\Http\Controllers\RecipeController::class, 'show']);
Route::put('/recipes/{recipe}', [App\Http\Controllers\RecipeController::class, 'update']);
Route::delete('/recipes/{recipe}', [App\Http\Controllers\RecipeController::class, 'destroy']);