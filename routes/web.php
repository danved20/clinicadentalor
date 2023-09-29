<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HorarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/reservas',ReservaController::class);
Route::resource('/clientes',ClienteController::class);
Route::resource('/horarios',HorarioController::class);
 Route::get('/reporte-reservas', 'ReporteController@generarReporte'); 
