<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/test-db', function () {
    try {
        // Пробај едноставен query
        $recipes = DB::table('recipes')->get();
        return response()->json($recipes);
    } catch (\Exception $e) {
        // Ако има грешка, врати ја пораката
        return response()->json(['error' => $e->getMessage()], 500);
    }
});