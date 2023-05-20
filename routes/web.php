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
//////////////////////////////////////////////// Rutas para Ver login y Registro

Route::view('/login','login')->name('login');
Route::view('/registro',"register")->name('registro');
Route::view('/registroproducto',"registrarproducto")->name('registrarproducto');
Route::view('/registrocliente',"registrarcliente")->name('registrarcliente');
//Route::view('/clientes',"clientes")->name('clientes');
//Route::view('/home',"home")->name('home');
//Route::view('/home-admin',"homeadmin")->name('home-admin');

//////////////////////////////////////////////// Rutas para cargar productos

Route::get('/homeadmin',[ProductoController::class,'Tablaproductotodos'])->name('homeadmin');
Route::get('/home',[ProductoController::class,'Tablaproductodisponible'])->name('home');

//////////////////////////////////////////////// Rutas para crear productos y Clientes

Route::post('/registrar-producto',[ProductoController::class,'Crearproductos'])->name('registrar-producto');
Route::post('/registrar-cliente',[ClientesController::class,'Crearclientes'])->name('registrar-cliente');
//////////////////////////////////////////////// Rutas para validar registros y iniciar sesion

Route::post('/validar-registro', [UsuariosController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [UsuariosController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [UsuariosController::class, 'logout'])->name('logout');

/////////////////////////////////////////////// tabla clientes

Route::get('/clientes',[ClientesController::class,'Tablacliente'])->name('clientes');
//Route::post('/',[ProductoController::class,'Tablaproducto'])->name('productos');

/////////////////////////////////////////////  