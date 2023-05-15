<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

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

Route::view('/login','login')->name('login');
Route::view('/registro',"register")->name('registro');
Route::view('/inicio',"inicio")->name('inicio');
Route::post('/validar-registro', [UsuariosController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [UsuariosController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [UsuariosController::class, 'logout'])->name('logout');
