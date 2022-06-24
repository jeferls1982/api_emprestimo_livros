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


Route::get('/ping', function(){
    return "pong";
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
