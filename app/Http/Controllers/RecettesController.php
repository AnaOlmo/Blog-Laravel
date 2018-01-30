<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

Class RecettesController extends Controller{
	public function ListeRecettes() {
		$maRecette = DB::select('select * from recette');
		//dump ($mesRecettes);
    return view('Recettes', ['Recipe'=> $maRecette]);
}
}