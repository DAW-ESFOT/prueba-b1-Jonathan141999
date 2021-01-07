<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Usuarios
Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::put('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@delete');
//Generos
Route::get('genres', 'GenreController@index');
Route::get('genres/{genre}', 'GenreController@show');
Route::post('genres', 'GenreController@store');
Route::put('genres/{genre}', 'GenreController@update');
Route::delete('genres/{genre}', 'GenreController@delete');
//Peliculas
Route::get('peliculas', 'PeliculaController@index');
Route::get('peliculass/{pelicula}', 'PeliculaController@show');
Route::post('peliculas', 'PeliculaController@store');
Route::put('peliculas/{pelicula}', 'PeliculaController@update');
Route::delete('peliculas/{pelicula}', 'PeliculaController@delete');

//Route::middleware('auth:api')->get('/user', function (Request $request) {
  //  return $request->user();
//});
