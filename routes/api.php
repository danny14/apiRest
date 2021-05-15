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

Route::get('tipo_inhalador', 'TipoInhaladorController@index');
Route::get('tipo_inhalador/{tipoInhalador}', 'TipoInhaladorController@show');
Route::post('tipo_inhalador','TipoInhaladorController@store');
Route::put('tipo_inhalador/{tipoInhalador}', 'TipoInhaladorController@update');
Route::delete('tipo_inhalador/{tipoInhalador}','TipoInhaladorController@destroy');

