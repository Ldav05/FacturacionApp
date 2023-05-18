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
        $data = User::where('rolid',1);
        if($data){
            if($data){
                $datos = Productos::where('Disponibilidad',1)->paginate(5);
                return redirect('homeadmin')->with('datos', $datos);
            }else{

            }
            $datos = Productos::paginate(5);
            return view('home')->with('datos', $datos);
        }
     }
}
