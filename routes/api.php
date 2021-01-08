<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('arbitro/{id}', 'ArbitrosController@get');
Route::get('arbitros', 'ArbitrosController@index');
Route::post('arbitros', 'ArbitrosController@store');
Route::delete('arbitro/{id}', 'ArbitrosController@destroy');

Route::get('equipes', 'EquipesController@index');
Route::post('equipes', 'EquipesController@store');
Route::delete('equipes/{id}', 'EquipesController@destroy');
