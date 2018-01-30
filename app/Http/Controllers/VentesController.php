<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


Class VentesController extends Controller{
	public function ListeVentes() {
		$maVente = DB::select('select * from vente');
    return view('Ventes', ['Ventes'=> $maVente]);
}
}