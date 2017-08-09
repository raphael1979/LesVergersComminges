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

// Route::get('/', function () {
// 	return view('index');
// 	return view('index');
// });
Route::get('/home', function(){
	// return redirect('accueil');
	return view('home');
})->name('home');


Auth::routes();
Route::get('/', 'AccueilController@show');
Route::get('/accueil', 'AccueilController@show');
<<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/list', 'ListController@getApples')->name('nos_varietes');
Route::get('/adminlist','AdminListController@index')->name('adminlist');
=======
Route::get('/list', 'ListController@getApples');
>>>>>>> c0b6756a1e903331e64bf95f8e6d39e300294c8e

// Route::get('/index', 'EvenementController@index')->name('evenement');
// Route::get('/accueil', 'HomeController@show')->name('index');

// Usager : determiner une variete
Route::get('/determination', 'DeterminationController@index');
Route::post('/recherche', 'DeterminationController@index');
Route::get('/resultat', 'DeterminationController@recherche');

//Admin : 
//creer lister modifier et supprimer une variete afficher les infos
<<<<<<< HEAD
Route::get('/creation', 'ModificationController@index')->name('creationApple');
Route::post('/add', 'ModificationController@add')->name('ajouterApple');
Route::get('/show/{id_apple}',' ModificationController@show')->name('voirApple');
Route::get('/edit/{id_apple}', 'ModificationController@edit')->name('editionApple');
//Route::post('/store', 'ModificationController@store')->name('storeApple');
Route::post('/update/{id_apple}', 'ModificationController@update')->name('updateApple');
Route::get('/delete/{id_apple}', 'ModificationController@destroy')->name('supprimerApple');
=======
Route::get('/adminlist', 'ModificationController@index');
Route::get('/creation', function(){
	return view('creation');
});
Route::post('/add', 'ModificationController@add');
Route::get('/show/{id}','ModificationController@show');
Route::get('/edition/{id}', 'ModificationController@edit');
// Route::post('/store', 'ModificationController@store')->name('storeApple');
Route::put('/update/', 'ModificationController@update');
Route::get('/delete/{id}', 'ModificationController@destroy');
>>>>>>> c0b6756a1e903331e64bf95f8e6d39e300294c8e

//Route gallery images
Route::get('/image-gallery', 'ImageGalleryController@index');
Route::get('/list-gallery', 'ImageGalleryController@list');
Route::get('/variety-description', 'ImageGalleryController@description');
Route::post('image-gallery', 'ImageGalleryController@upload');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');
Auth::routes();
