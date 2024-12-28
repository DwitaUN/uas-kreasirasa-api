<?php

namespace App\Http\Controllers; 
use App\Models\Recipe; use Illuminate\Http\Request; 
use Illuminate\Http\Response; 
use Illuminate\Support\Facades\Validator;

class RecipeController extends Controller
{
    public function index()
    {
        return Recipe::all();
    }

    public function store(Request $request)
    {
        $recipe = Recipe::create($request->all());
        return response()->json($recipe, 201);
    }

    public function show($id)
    {
        return Recipe::find($id);
    }

    public function update(Request $request, $id)
    {
        $recipe = Recipe::findOrFail($id);
        $recipe->update($request->all());
        return response()->json($recipe, 200);
    }

    public function destroy($id)
    {
        Recipe::destroy($id);
        return response()->json(null, 204);
    }
}
