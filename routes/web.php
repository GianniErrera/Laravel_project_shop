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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/prodotti/inserisci', 'HomeController@nuovoProdotto');

Route::get('/prodotti/{id}', 'ProdottoController@show');

Route::post('/prodotti/inserisci', 'ProdottoController@store');

Route::post('/prodotti/elimina/{id}', 'ProdottoController@destroy');

Route::get('/prodotti/modifica/{id}', 'HomeController@edit');

Route::post('/prodotti/modifica/{id}', 'ProdottoController@edit');

Route::get('/categoria/nuova', 'CategoriaController@create');

Route::post('/categoria/nuova', 'CategoriaController@store');

Route::get('/categoria/{id}', 'CategoriaController@show');

Route::get('/categoria/immagine/{id}', 'CategoriaController@immagine');

Route::post('/copertina/carica/{id}', 'CategoriaController@copertina');

Route::get('/immagini/carica/{id}', 'ImmagineController@create');

Route::post('/galleria/carica/{id}', 'ImmagineController@store');
