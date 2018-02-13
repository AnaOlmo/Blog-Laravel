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
Route::get('/Boissons', 'BoissonsController@ListeBoissons')->name('Drinks');//liste boissons back end//
Route::get('Boissons/{id}', 'BoissonsController@show');//1er element: URL de la page http://your-app.dev/Boissons- {route parametre} - 2eme element: nom page controller + nom fonction-methode//
Route::get('SelectBoisson/show/{boisson}','BoissonsController@showBoissons')->name('showDetails');//details nom boisson et prix//
Route::get('/PrixBoissons','BoissonsController@prixBoissons');

//formulaires boissons//

//Ajouter//
Route::get('/Formulaire/create', 'BoissonsController@create');//formulaire pour ajouter boisson//
Route::post('/Formulaire/create', 'BoissonsController@store');//sauvegarde nouvelle boisson dans BDD//

//Modifier//
Route::get('/Modifier/updateBoisson/{boisson}', 'BoissonsController@updateBoisson')->name("BoissonUpdateShow");//formulaire pour modifier boisson//
Route::put('/Modifier/updateBoisson/{boisson}','BoissonsController@update');//mets a jour BDD//

//delete//
Route::get('/DeleteBoissons/{boisson}', 'BoissonsController@deleteBoisson')->name("BoissonDelete");//formulaire pour supprimer boisson/
Route::delete('/DeleteBoissons/{boisson}', 'BoissonsController@destroy');//mets a jour BDD//



//Routes Ingredients//
Route::get('/Ingredients', 'IngredientsController@ListeIngredients')->name('Ingr');
Route::get('SelectIngredients/show/{ingredient}','IngredientsController@showIngredient')->name('showIngDetails');//details nom Ingredient//

//Ajouter//
Route::get('/Ingredients/IngredientsFormulaire/create', 'IngredientsController@create');//formulaire pour ajouter ingredient//
Route::post('/Ingredients/IngredientsFormulaire/create', 'IngredientsController@store');//sauvegarde nouvelle boisson dans BDD//

//Modifier//
Route::get('/Ingredients/ModifierIngredient/updateIngredient/{ingredient}', 'IngredientsController@updateIngredient')->name("IngrUpdateShow");//formulaire pour modifier Ingredient//
Route::put('/Ingredients/ModifierIngredient/update/{ingredient}','IngredientsController@update');//mets a jour BDD//

//delete//
Route::get('/Ingredients/DeleteIngredients/destroy/{ingredient}', 'IngredientsController@deleteIngredient')->name("IngredientDelete");//formulaire pour supprimer ingredient/
Route::delete('/Ingredients/DeleteIngredients/{Ingredient}', 'IngredientsController@destroy');//mets a jour BDD//

Route::get('/recettes', 'RecettesController@ListeRecettes')->name('Recipes');
Route::get('/Monnayeur', 'MonnayeurController@ListeMonnaie')->name('Money');
Route::get('/ventes', 'VentesController@ListeVentes')->name('Sales');



Route::get('/Tabord', function () {
    return view('Tabord');
});

//Routes User Boissons//
Route::get('/front_view', 'UserBoissonsController@userListeBoissons')->name('UserDrinks');//liste boissons a commander//
/*Route::get('front_view', function () {
    return view('front_view');
});*/
Route::post('/UserBoissons/{boisson}','UserBoissonsController@userOrderBoissons')->name('UserOrder');//vue commande client//

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
