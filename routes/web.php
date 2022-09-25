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
    return redirect('/home');
})->middleware(\App\Http\Middleware\Autenticador::class);

//CidadesController
Route::get('/cidades', 'CidadesController@index');
Route::get('/cidades/criar', 'CidadesController@create');
Route::post('/cidades/salvar', 'CidadesController@store');
//BairrosController
Route::get('/bairros', 'BairrosController@index');
Route::get('/bairros/criar', 'BairrosController@create');
Route::post('/bairros/salvar', 'BairrosController@store');
//SistemaController
Route::get('/home', 'SistemaController@index');
Route::get('/listar', 'SistemaController@listar');
//LoginController
Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@store');
Route::get('/logout','LoginController@destroy');
//UsersController
Route::get('/register','UsersController@create');
Route::post('/register','UsersController@store');

