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
            $datos = Productos::paginate(4);
            return view('home')->with('datos', $datos);    
        }
    
     

     public function  Tablaproductoadmin(){
        $datos = Productos::where('Disponibilidad',1)->paginate(4);
        return view('homeadmin')->with('datos', $datos)->with("<script>alert('Inicio de sesion correcto');</script>");
     }

     public function Crearproductos(Request $request){
        $producto = new Productos();
        //$producto->id = $request->idRp;
        $producto->nombre  = $request->nombreRp;
        $producto->precio = $request->emailRp;
        $producto->Disponibilidad = $request->cargoRp;  
        $producto->save();
        echo '<pre>';
        print_r($producto);
        echo '<pre>';
     }
}
