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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categoria','App\Http\Controllers\ControllerCategoria@getCategoria');
Route::get('categoria/{id}', 'App\Http\Controllers\ControllerCategoria@getCategoriaId');
Route::post('categoria', 'App\Http\Controllers\ControllerCategoria@postCategoria');
Route::put('categoria/{id}', 'App\Http\Controllers\ControllerCategoria@updateCategoria');
Route::delete('categoria/{id}', 'App\Http\Controllers\ControllerCategoria@deleteCategoria');

//Doc Tecnica
Route::get('documentacion', 'App\Http\Controllers\ControllerDocTecnica@getDocTecnica');
Route::get('documentacion/{id}', 'App\Http\Controllers\ControllerDocTecnica@getDocTecnicaId');
Route::post('documentacion', 'App\Http\Controllers\ControllerDocTecnica@postDocTecnica');
Route::put('documentacion/{id}', 'App\Http\Controllers\ControllerDocTecnica@putDocTecnicaId');
Route::delete('documentacion/{id}', 'App\Http\Controllers\ControllerDocTecnica@deleteDocTecnicaId');