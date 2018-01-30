<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

Class MonnayeurController extends Controller{
	public function ListeMonnaie() {
		$mesMonnaies = DB::select('select * from ');
    return view('Monnayeur', ['Coin'=> $mesMonnaies]);
}
}