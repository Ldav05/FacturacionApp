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

     public function Tablaproductotodos(){
       // $datos = Productos::all(); 
        //$datos = DB::select('SELECT * FROM producto WHERE Disponibilidad = 1');
            $datos = Productos::paginate(4);
            return view('homeadmin')->with('datos', $datos);    
        }
    
     

     public function  Tablaproductodisponible(){
        $datos = Productos::where('Disponibilidad',1)->paginate(4);
        $usuario = User::all();
        return view('home')->with('datos', $datos)->with('usuario', $usuario);
     }

     public function Crearproductos(Request $request){
        $producto = new Productos();
        //$producto->id = $request->idRp;
        $producto->nombre  = $request->nombre;
        $producto->precio = $request->precio;
        if($request->Disponibilidad == 'Disponible'){
            $producto->Disponibilidad = 1;
        }else{
            $producto->Disponibilidad = 0;
        }
        //$producto->Disponibilidad = $request->cargoRp;  
        $producto->save();
        return redirect('homeadmin')->with('mensaje','¡Se agrego correctamente el producto!');
        
     }

     public function Updateproducto(Request $request){
       $producto =  Productos::find($request->id);
        //$producto->id = $request->id;
        $producto->nombre  = $request->nombre;
        $producto->precio = $request->precio;
        if($request->Disponibilidad == 'Disponible' or $request->Disponibilidad == 'disponible'){
            $producto->Disponibilidad = 1;
            $producto->save();
        }else{
           if($request->Disponibilidad == 'No Disponible' or $request->Disponibilidad == 'no disponible'){
            $producto->Disponibilidad = 0;
            $producto->save();
           }else{
            return redirect('homeadmin')->with('mensaje','¡Ingreso incorrectamente informacion en el campo Disponibilidad!');
           }
           
        }
        //$producto->Disponibilidad = $request->cargoRp;  
        
        return redirect('homeadmin')->with('mensaje','¡Se actualizo correctamente el producto!');
        
        
     }

     public function Deleteproducto($id){
        try {
            $sql = DB::delete("DELETE from producto WHERE id = $id");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if($sql == true){
            return redirect('homeadmin')->with('mensaje','Registro eliminado con exito');
        }else{
            return redirect('homeadmin')->with('mensaje','Error al eliminar');
        }
       
     }
     
     
}
