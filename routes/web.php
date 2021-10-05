<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');


Route::resource('citas', App\Http\Controllers\CitasController::class);


Route::resource('pacientes', App\Http\Controllers\PacienteController::class);


Route::resource('doctors', App\Http\Controllers\DoctorController::class);


Route::resource('usuarios', App\Http\Controllers\UsuarioController::class);


Route::resource('citasDetalles', App\Http\Controllers\CitasDetalleController::class);
