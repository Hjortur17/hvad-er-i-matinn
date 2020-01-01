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
		$recipes = Recipes::where([
			['maltid', $request->maltid],
			['vegan', $request->vegan],
			['heimsalfa', $request->heimsalfa],
			['kjot', $request->kjot],
			['spicy', $request->spicy],
		])->get();

		return $recipes;
	}
}
