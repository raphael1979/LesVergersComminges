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

Auth::routes();
Route::get('/', 'AccueilController@show');
<<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home');
=======
>>>>>>> d1c65a2987d779707c6934a17459f63a629c0f39
Route::get('/accueil', 'AccueilController@show');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/list', 'ListController@getApples')->name('nos_varietes');
Route::get('/adminlist','AdminListController@index')->name('adminlist');

// Route::get('/index', 'EvenementController@index')->name('evenement');
// Route::get('/accueil', 'HomeController@show')->name('index');

// Usager : determiner une variete
Route::get('/determination', 'DeterminationController@index')->name('determination');
Route::post('/recherche', 'DeterminationController@recherche')->name('recherche');
Route::get('/resultat', 'DeterminationController@recherche')->name('resultat');

//Admin : 
//creer lister modifier et supprimer une variete afficher les infos
Route::get('/creation', 'ModificationController@index')->name('creationApple');
Route::post('/add', 'ModificationController@add')->name('ajouterApple');
Route::get('/show/{id_apple}',' ModificationController@show')->name('voirApple');
Route::get('/edit/{id_apple}', 'ModificationController@edit')->name('editionApple');
//Route::post('/store', 'ModificationController@store')->name('storeApple');
Route::post('/update/{id_apple}', 'ModificationController@update')->name('updateApple');
Route::get('/delete/{id_apple}', 'ModificationController@destroy')->name('supprimerApple');

//Route gallery images
Route::get('/image-gallery', 'ImageGalleryController@index');
Route::get('/list-gallery', 'ImageGalleryController@list');
Route::get('/variety-description', 'ImageGalleryController@description');
Route::post('image-gallery', 'ImageGalleryController@upload');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');

