<?php

use App\Http\Controllers\AuthController;
use App\Models\Disponibilidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\DisponibilidadController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CLientesController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuariosController;

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

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout',  [AuthController::class, 'logout']);
    //Route::post('Ventas',  [AuthController::class, 'Ventas']);
});
Route::post('/Clientes', [ClientesController::class, 'CrearClientes']);
Route::post('/Productos', [ProductoController::class, 'CrearProducto']);
Route::post('/Usuarios', [UsuariosController::class, 'CrearUsuarios']);
Route::post('/Rol', [RolController::class, 'CrearRol']);
Route::post('/Permiso', [PermisoController::class, 'CrearPermiso']);
Route::post('/ProductosDisponibles', [DisponibilidadController::class, 'DisponibilidadProducto']);
//Route::post('/FacturaCompra', [ApiController::class, 'Ventas']);
//Route::post('/VentasSinInformacion', [ApiController::class, 'SinInformacion']);
//Route::get('Disponibilidad',function ($id){
  //  return Disponibilidad::find($id);
//}); 


    

