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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// determiner une variete
Route::get('/determination', 'DeterminationController@index')->name('determination');
Route::post('/recherche', 'DeterminationController@recherche')->name('recherche');
Route::post('/resultat', 'DeterminationController@recherche')->name('resultat');

//creer modifier et supprimer une variete afficher les infos
Route::get('/creation', 'ModificationController@index')->name('creation');
Route::post('/creation', 'ModificationController@creation')->name('createApple');
Route::get('/edition/{id}, ModificationController@show')->name('edition');
Route::get('/list', 'ListController@getApples')->name('listApples');
Route::get('/description/{id}', 'DescriptionController@index')->name('description');
