<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        return Recipe::all();
    }

    public function store(Request $request)
    {
        return Recipe::create($request->all());
    }

    public function show($id)
    {
        return Recipe::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $recipe = Recipe::findOrFail($id);
        $recipe->update($request->all());
        return $recipe;
    }

    public function destroy($id)
    {
        Recipe::destroy($id);
        return response()->json(null, 204);
    }
}