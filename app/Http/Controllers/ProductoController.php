<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Productos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

     public function Tablaproducto(){
       // $datos = Productos::all(); 
        //$datos = DB::select('SELECT * FROM producto WHERE Disponibilidad = 1');
            $datos = Productos::paginate(3);
            return view('home')->with('datos', $datos);    
        }
    
     

     public function  Tablaproductoadmin(){
        $datos = Productos::where('Disponibilidad',1)->paginate(3);
        return view('homeadmin')->with('datos', $datos);
     }
}
