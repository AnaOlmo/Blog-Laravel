<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
        
class SelectIngredientsController extends Controller {
    
    public function select() {
    
        $mesIngredientsSelect = DB::select('select * from ingredients');
        
        dump ($mesIngredientsSelect);
        return view('Ingredients.SelectIngredients', ['Ingredients' => $mesIngredientsSelect]);
    }

   
    public function show ($id) {
            $mesIngredientsShow = DB::select('select * from ingredients where id = ?', [$id]);
            
        
        dump ($mesIngredientsShow);
         return view('Ingredients', ['Ingredients.SelectIngredients' => Ingredient::findOrFail($id)]); 

}
}    
 