<?php

namespace App\Http\Controllers;//storage place//

use Illuminate\Support\Facades\DB;//
use App\Http\Controllers\Controller;
use App\Boisson;
use Illuminate\Http\Request;

// class = nom de la page//
Class BoissonsController extends Controller{
	public function ListeBoissons() {

		
		//$maBoisson = DB::select('select * from boisson'); //creer une variable et utiliser la requeste SQL grace a DB::select qui renverra un tableau. exemple: $results = DB::select('select * from users where id = ?', [1]); ou avec un nom $results = DB::select('select * from users where id = :id', ['id' => 1]);//

		$Boisson = Boisson::orderBy('nom_boisson', 'ASC')->get();
		
		//dump ($mesBoissons);
	
    return view('Boisson/Boissons', ['Boisson'=> $Boisson]);//('nom de la page view dans resources view', [inserer un tableau de donnees soit avec 'string message' soit avec Variable creer ligne superieure] qui devra etre a dispo de la view)
}
	
	//Afficher les détails d'une boisson en exigeant en paramètre l'instance de la classe Boisson
	public function showBoissons(Boisson $boisson) 
	{
    	//$Boisson = DB::select('select * from Boisson where id = ?', [$id]);
    	//$Boisson = Boisson::where('nom_boisson','Expresso')->select(['nom_boisson','Prix'])->get();
        return view('SelectBoissons', ['Boissons' => $boisson]);
	}


//Retourne la vue contenant la liste triée des boissons par prix croissant
		public function prixBoissons() {
    	 
    	 $Boisson = Boisson::orderBy('Prix', 'ASC')->get();
    	
    	//dump ($Boissons);
        return view('Boisson/PrixBoissons', ['Boisson' => $Boisson]);
}
// Retourne la vue avec le formulaire pour ajouter une boisson	
	public function create()
    {

        return view('Boisson/Formulaire');//BoissonFormulaire dans sous dossier Boisson//
    }

    public function store(Request $request)
    {
// Sauvegarde en BDD la nouvelle boisson créée dans le formulaire
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
// Retourne la vue avec le formulaire de modification d'une boisson
    public function updateBoisson(Boisson $boisson)
    {
        return view('modifier', ["boisson" => $boisson]);
    }

// Met à jour dans la BDD la boisson modifiée
	public function update(Request $request, $boisson)
    {
        $modif = Boisson::find($boisson);
        $data = [
            'code_boisson' => $request->input('code'),
            'nom_boisson' => $request->input('name'),
            'Prix' => $request->input('price'),
        ];

        $modif->update($data);
        dump($boisson);

        return redirect()->route('Drinks');
        

       // $inputs = $request->all (); //on récupère toutes les entrées du formulaire $request->all() dans le tableau $inputs//
        //$Boisson->update($inputs);//on met la boisson à jour dans la table avec la méthode update//
        
       // return view('Boisson/Result', $data);
    }

// Supprime en BDD la boisson sélectionnée    
    public function destroy($id)
    {
                $boisson->delete();
        return redirect()->route('Drinks');
    }
}