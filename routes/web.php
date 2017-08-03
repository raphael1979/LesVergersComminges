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
// });


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/determination', 'DeterminationController@index')->name('determination');
Route::get('/accueil', 'AccueilController@show');

// Route::get('/index', 'EvenementController@index')->name('evenement');
// Route::get('/accueil', 'HomeController@show')->name('index');


Route::post('/recherche', 'DeterminationController@recherche')->name('recherche');
Route::get('/modification', 'AppleController@index')->name('modification');
Route::get('/list', 'ListController@getApples')->name('listApples');