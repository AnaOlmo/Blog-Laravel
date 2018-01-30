<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

Class IngredientsController extends Controller{
	public function ListeIngredients() {
		$monIngredient = DB::select('select * from ingredient');
		//dump ($mesIngredients);
	return view('Ingredients', ['Ing'=> $monIngredient]);
}
}
    