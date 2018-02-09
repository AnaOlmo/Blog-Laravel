<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Routes Boissons//
Route::get('/Boissons', 'BoissonsController@ListeBoissons')->name('Drinks');
Route::get('Boissons/{id}', 'BoissonsController@show');//1er element: URL de la page http://your-app.dev/Boissons- {route parametre} - 2eme element: nom page controller + nom fonction-methode//
Route::get('SelectBoisson/show/{boisson}','BoissonsController@showBoissons')->name('showDetails');
Route::get('/PrixBoissons','BoissonsController@prixBoissons');

//formulaire//

//Ajouter//
Route::get('/Formulaire/create', 'BoissonsController@create');
Route::post('/Formulaire/create', 'BoissonsController@store');

//Modifier//
Route::get('/Modifier/{boisson}', 'BoissonsController@updateBoisson')->name("BoissonUpdateShow");
Route::put('/Modifier/{boisson}','BoissonsController@update');

//delete//
Route::get('/DeleteBoissons/{boisson}', 'BoissonsController@deleteBoisson')->name("BoissonDelete");
Route::delete('/DeleteBoissons/{boisson}', 'BoissonsController@destroy')->name("BoissonDelete");

//Route::get('/Formulaire/update', 'BoissonsController@update');
//Route::get('/Formulaire/destroy','BoissonsController@destroy');


Route::get('/Ingredients', 'IngredientsController@ListeIngredients');
Route::get('/recettes', 'RecettesController@ListeRecettes');
Route::get('/Monnayeur', 'MonnayeurController@ListeMonnaie');
Route::get('/Ventes', 'VentesController@ListeVentes');



Route::get('/Tabord', function () {
    return view('Tabord');
});

Route::get('front_view', function () {
    return view('front_view');
});
