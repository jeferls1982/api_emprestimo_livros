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



Route::apiResource('/editoras', App\Http\Controllers\EditoraController::class);
Route::apiResource('/livros', App\Http\Controllers\LivroController::class);
Route::apiResource('/leitores', App\Http\Controllers\LeitorController::class);
Route::apiResource('/emprestimos', App\Http\Controllers\EmprestimoController::class);

Route::apiResource('/contatos', App\Http\Controllers\ContatoController::class);
Route::apiResource('/paises', App\Http\Controllers\PaisController::class);
Route::apiResource('/estados', App\Http\Controllers\EstadoController::class);
Route::apiResource('/cidades', App\Http\Controllers\CidadeController::class);


Route::get('/ping', function () {
    return "pong";
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
