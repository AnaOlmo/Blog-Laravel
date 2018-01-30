<?php

namespace App\Http\Controllers;//storage place//

use Illuminate\Support\Facades\DB;//
use App\Http\Controllers\Controller;
use App\Boisson;

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



		public function prixBoissons() {
    	 
    	 $Boisson = Boisson::orderBy('Prix', 'ASC')->get();
    	
    	//dump ($Boissons);
        return view('Boisson/PrixBoissons', ['Boisson' => $Boisson]);
}
	
	public function create()
    {

        return view('Boisson/Formulaire');//BoissonFormulaire dans sous dossier Boisson//
    }

    public function store(Request $request)
    {

    $data = [
            'Boissons' => [
                'Nom Boisson' => $request->input('Nom Boisson'),
                'Code Boisson' => $request->input('Code Boisson'),
                'Prix' => $request->input('Prix'),
                
            ],
        ];

        return view('Boisson/Result', $data);
}
	public function update(Request $request, $boisson)
    {
        /*$data = [
            'Boissons' => [
                'Nom Boisson' => $request->input('Nom Boisson'),
                'Code Boisson' => $request->input('Code Boisson'),
                'Prix' => $request->input('Prix'),
                
            ],
        ];*/

        $inputs = $request->all (); //on récupère toutes les entrées du formulaire $request->all() dans le tableau $inputs//
        $Boisson->update($inputs);//on met la boisson à jour dans la table avec la méthode update//
        
        return view('Boisson/Result', $data);
    }
    public function destroy($id)
    {
        $data = [
            'Boissons' => [
                'Nom Boisson' => $request->input('Nom Boisson'),
                'Code Boisson' => $request->input('Code Boisson'),
                'Prix' => $request->input('Prix'),
                
            ],
        ];
        return view('Boisson/Result', $data);
    }
}