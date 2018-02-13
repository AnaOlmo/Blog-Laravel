<?php

namespace App\Http\Controllers;//storage place//

use Illuminate\Support\Facades\DB;//
use App\Http\Controllers\Controller;
use App\Boisson;
use Illuminate\Http\Request;

// class = nom de la page//
Class UserBoissonsController extends Controller{
	public function userListeBoissons() {

		
		//$maBoisson = DB::select('select * from boisson'); //creer une variable et utiliser la requeste SQL grace a DB::select qui renverra un tableau. exemple: $results = DB::select('select * from users where id = ?', [1]); ou avec un nom $results = DB::select('select * from users where id = :id', ['id' => 1]);//

		$Boisson = Boisson::orderBy('nom_boisson', 'ASC')->get();
		
		//dump ($mesBoissons);

    return view('front_view', ['Boisson'=> $Boisson]);//('nom de la page view dans resources view', [inserer un tableau de donnees soit avec 'string message' soit avec Variable creer ligne superieure] qui devra etre a dispo de la view)
}


// Retourne la vue commande user	
public function userOrderBoissons(Boisson $boisson, Request $request){

        $sucre = $request->input('nbSucre');
        // redirection vers confirm commande -> id de commande
        return view('User/UserBoissons', ['Boisson'=> $boisson, 'Sucre'=>$sucre]);//userBoissons dans sous dossier User//
    }


    public function store(Request $request){
// Sauvegarde en BDD la nouvelle commande créée dans le formulaire
        $data = [
            'code_boisson' => $request->input('code'),
            'nom_boisson' => $request->input('name'),
            'Prix' => $request->input('price'),
        ];
//J'ajoute dans ma BDD les infos de mon formulaire
        $boisson= Boisson::create($data);
        dump($boisson);

        return redirect()->route('Drinks');
    }
}