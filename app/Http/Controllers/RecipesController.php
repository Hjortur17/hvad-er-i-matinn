<?php

namespace App\Http\Controllers;

use App\Recipes;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Recipes  $recipes
	 * @return \Illuminate\Http\Response
	*/
	
	public function show(Request $request)
	{
		$recipes = Recipes::with(['instructions', 'ingredients'])->where([
			['vegan', $request['vegan'] == 'true' ? 1 : 0],
			['pesceterian', $request['pesceterian'] == 'true' ? 1 : 0],
			['continents', $request->continents],
			['food', $request->food],
			['spicy', $request['spicy'] == 'true' ? 1 : 0],
		])->get();

		$recipes->first()->instructions;
		$recipes->first()->ingredients;

		return response()->json([
			'recipes' => $recipes,
		]);
	}
}
