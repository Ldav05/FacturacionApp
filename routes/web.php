<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductoController;
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
//Route::view('/home',"home")->name('home');
//Route::view('/home-admin',"homeadmin")->name('home-admin');

////////////////////////////////////////////////

Route::get('/home',[ProductoController::class,'Tablaproducto'])->name('home');
Route::get('/homeadmin',[ProductoController::class,'Tablaproductoadmin'])->name('homeadmin');

Route::post('/validar-registro', [UsuariosController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [UsuariosController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [UsuariosController::class, 'logout'])->name('logout');

///////////////////////////////////////////////

Route::get('/',[ClientesController::class,'Tablacliente'])->name('clientes');
//Route::post('/',[ProductoController::class,'Tablaproducto'])->name('productos');