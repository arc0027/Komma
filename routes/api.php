<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ReservaControllerApi;

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

Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);
Route::get('/consultarReservas', [ReservaControllerApi::class, 'consultarReservas']);
Route::get('/consultarHorarios', [ReservaControllerApi::class, 'consultarHorarios']);
Route::post('/insertarReserva', [ReservaControllerApi::class, 'insertarReserva']);
Route::put('/reservas/{id}', [ReservaControllerApi::class, 'actualizarReserva']);
Route::delete('/reservas/{id}', [ReservaControllerApi::class, 'borrarReserva']);

