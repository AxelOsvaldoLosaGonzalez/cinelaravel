<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource("generos", \App\Http\Controllers\GeneroController::class);
Route::resource("cines", \App\Http\Controllers\CineController::class);
Route::resource("directores", \App\Http\Controllers\DirectorController::class);
Route::resource("protagonistas", \App\Http\Controllers\ProtagonistaController::class);
Route::resource("clasificaciones", \App\Http\Controllers\ClasificacionController::class);
Route::resource("descuentos", \App\Http\Controllers\DescuentoController::class);
Route::resource("dias", \App\Http\Controllers\DiaController::class);
Route::resource("peliculas", \App\Http\Controllers\PeliculaController::class);
Route::resource("ciudades", \App\Http\Controllers\CiudadController::class);
Route::resource("asigna_protagonista", \App\Http\Controllers\AsignaProtagonistaController::class);