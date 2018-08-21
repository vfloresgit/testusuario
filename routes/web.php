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

Route::get('/','LoginController@index');
Route::post('login','LoginController@login');
Route::post('login/cerrarSession','LoginController@logout');

Route::get('usuario','UsuarioController@index');
//Route::get('usuario/create','UsuarioController@create');
Route::get('usuario/edit/{id}','UsuarioController@edit');
Route::post('usuario','UsuarioController@store');
Route::post('usuario/show/','UsuarioController@show');
Route::put('usuario/{id}','UsuarioController@update');
Route::post('usuario/destroy','UsuarioController@destroy');
/////////////////persona/////////////
Route::get('persona','PersonaController@index');
Route::get('persona/create','PersonaController@create');

//Route::get('persona/edit/{id}','PersonaController@edit');
Route::get('persona/edit/{id}','PersonaController@edit');
Route::post('persona','PersonaController@store');
Route::post('persona/show/','PersonaController@show');
Route::post('persona/actualizar','PersonaController@update');
//Route::put('persona/{id}','PersonaController@update');

Route::post('persona/destroy','PersonaController@destroy');
Route::post('persona/import',array(
'as' => 'persona.import',
'uses' =>'PersonaController@importExcelPersona',
));



//Route::get('persona/destroy/{id}','PersonaController@destroy');

Route::post('empresa','PersonaController@empresa');

Route::get('rol','RolController@index');
//Route::get('rol/create','RolController@create');
Route::get('rol/edit/{id}','RolController@edit');
Route::post('rol','RolController@store');
Route::post('rol/show/','RolController@show');
Route::put('rol/{id}','RolController@update');
Route::post('rol/destroy','RolController@destroy');