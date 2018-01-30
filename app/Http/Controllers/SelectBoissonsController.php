<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
        
class SelectBoissonsController extends Controller {
    
    public function select() {
    
        $mesBoissonsSelect = DB::select('select * from boissons');
        
        dump ($mesBoissonsSelect);
        return view('SelectBoissons', ['Boisson' => $mesBoissonsSelect]);
    }

   
    public function show ($id) {
            $mesBoissonsShow = DB::select('select * from boissons where id = ?', [$id]);
            
        
        dump ($mesBoissonsShow);
         return view('Boisson', ['SelectBoissons' => Boisson::findOrFail($id)]); 

}
}    
 