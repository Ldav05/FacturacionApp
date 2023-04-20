<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductoController extends Controller
{   
    public function CrearProducto(Request $request){
        $Producto = new Productos();
 
        $Producto->precio  = $request->input('precio');
        $Producto->nombre = $request->input('nombre');
        $Producto->Disponibilidad = $request->input('Disponibilidad');
        //$Producto->apellido = $request->input('apellido');
 
        $Producto->save();
        return response()->json($Producto);
     }
}
