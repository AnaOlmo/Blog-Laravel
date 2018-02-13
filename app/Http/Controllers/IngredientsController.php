<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Ingredients;
use Illuminate\Http\Request;

Class IngredientsController extends Controller{
	/*public function ListeIngredients() {
		$monIngredient = DB::select('select * from ingredient');
		//dump ($mesIngredients);
		return view('Ingredients', ['Ing'=> $monIngredient]);
	}*/

	public function ListeIngredients() {

		
		//$ingredients = DB::select('select * from ingredients'); //creer une variable et utiliser la requeste SQL grace a DB::select qui renverra un tableau. exemple: $results = DB::select('select * from users where id = ?', [1]); ou avec un nom $results = DB::select('select * from users where id = :id', ['id' => 1]);//

		$Ingredient = Ingredients::orderBy('nom', 'ASC')->get();
	

    return view('Ingredients/Ingredients', ['Ingredient'=> $Ingredient]);//('nom de la page view dans resources view', [inserer un tableau de donnees soit avec 'string message' soit avec Variable creer ligne superieure] qui devra etre a dispo de la view)
}	
	//Afficher les détails d'un ingredient en exigeant en paramètre l'instance de la classe Ingredient
	public function showIngredient(Ingredients $ingredient) {
    	
    	
	return view('Ingredients.SelectIngredients', ['Ingredients' => $ingredient]);
}
// Retourne la vue avec le formulaire pour ajouter un ingredient
public function create(){

        return view('Ingredients/IngredientsFormulaire');//IngredientFormulaire dans sous dossier Ingredient//
    }
    public function store(Request $request)
    {
// Sauvegarde en BDD la nouvelle boisson créée dans le formulaire
    	$data = [
    		'id' => $request->input('code'),
    		'nom' => $request->input('name'),
    		'stock' => $request->input('price'),
    	];
//J'ajoute dans ma BDD les infos de mon formulaire
    	$Ingredient= Ingredients::create($data);

    	return redirect()->route('Ingr');
    }
    // Retourne la vue avec le formulaire de modification d'un ingredient
    public function updateIngredient()
    {
    	return view('Ingredients/ModifierIngredient');
    }

// Met à jour dans la BDD l'ingredient modifié
    public function update(Request $request,$id)
    {
    	$modif = Ingredients::find($id);//
    	$modif->update($request->all());
    	//$modif->save();
        //$data = [
            //'code_boisson' => $request->input('code'),
            //'nom_boisson' => $request->input('name'),
            //'Prix' => $request->input('price'),
        //];
        //$inputs = $request->all (); //on récupère toutes les entrées du formulaire $request->all() dans le tableau $inputs//
        //$boisson->update($inputs);//on met la boisson à jour dans la table avec la méthode update//
        //$modif->update($data);
    	dd($modif);

    	//return redirect()->route('IngrUpdateShow');

    }
    //Retourne la vue avec le formulaire de suppression d'un ingredient
    public function deleteIngredient()
    {
        return view('Ingredients/DeleteIngredients');
    }
// Supprime en BDD la boisson sélectionnée    
    public function destroy(Ingredients $ingredient)
    {
        $Ingr=ingredients::find($ingredient);    
        $Ingr->delete();
        return redirect()->back();
    }
}