<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\TarjetasController;

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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/reserva1', function () {
    return view('reserva1');
});

Route::get('/reserva2', function () {
    return view('reserva2');
});

Route::get('/reserva3', function () {
    return view('reserva3');
});

Route::get('/reservaFinalizada', function () {
    return view('reservaFinalizada');
});

Route::get('/sesion', function () {
    return view('sesion');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/misReservas', function () {
    return view('misReservas');
});

Route::get('/pagos', function () {
    return view('pagos');
});

Route::get('/multimedia', function () {
    return view('multimedia');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/realizarReserva', function () {
    return view('reserva1');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/contacto', [ContactoController::class, 'store']);

Route::post('/pagos', [TarjetasController::class, 'crearTarjeta']);

// Horario reserva
Route::get('/fechasDisponibles', [ReservaController::class, 'eventoFechas']);
Route::post('/horasDisponibles', [ReservaController::class, 'eventoHoras']);

// Datos reserva
Route::post('/reserva2', [ReservaController::class, 'datos']);
Route::post('/reservaFinalizada', [ReservaController::class, 'reserva']);

// Mis reservas
Route::get('/misReservas', [ReservaController::class, 'showReservas']);
Route::get('/cancelarReserva/{id_reserva}/{id_horario}', [ReservaController::class, 'cancelarReserva']);
Route::get('/realizarReservas', [ReservaController::class, 'realizarReservas']);




