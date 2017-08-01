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
Route::get('/determination', 'DeterminationController@index')->name('determination');
Route::post('/recherche', 'DeterminationController@recherche')->name('recherche');
Route::post('/resultat', 'DeterminationController@recherche')->name('resultat');
Route::get('/creation', 'ModificationController@index')->name('creation');
Route::post('/creation', 'ModificationController@addApple')->name('addApple');
Route::get('/list', 'ListController@getApples')->name('listApples');
Route::get('/description', 'DescriptionController@index')->name('description');
//Route::get('/list', 'ModificationController@addApple')->name('retour');