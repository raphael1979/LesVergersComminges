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
Route::get('/list', 'ListController@getApples');

// Route::get('/index', 'EvenementController@index')->name('evenement');
// Route::get('/accueil', 'HomeController@show')->name('index');

// Usager : determiner une variete
Route::get('/determination', 'DeterminationController@index');
Route::post('/recherche', 'DeterminationController@index');
Route::get('/resultat', 'DeterminationController@recherche');

//Admin : 
//creer lister modifier et supprimer une variete afficher les infos
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

//Route gallery images
Route::get('/image-gallery', 'ImageGalleryController@index');
Route::get('/list-gallery', 'ImageGalleryController@list');
Route::get('/variety-description', 'ImageGalleryController@description');
Route::post('image-gallery', 'ImageGalleryController@upload');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');
Auth::routes();
