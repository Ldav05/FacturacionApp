<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    public function CrearCliente(Request $request){
        $Cliente = new Clientes();
 
        $Cliente->nombre = $request->input('nombre');
        $Cliente->email = $request->input('email');
        $Cliente->telefono = $request->input('telefono');
        $Cliente->apellido = $request->input('apellido');
 
        $Cliente->save();
        return response()->json($Cliente);
     }
     public function Tablacliente(){ 
        $datos = Clientes::paginate(4);
        return view('clientes')->with('datos', $datos);
     }

     public function Crearclientes(Request $request){
        $cliente = new Clientes();
        //$producto->id = $request->idRp;
        $cliente->nombre  = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->email = $request->email;
        $cliente->telefono = $request->telefono;
        //$producto->Disponibilidad = $request->cargoRp;  
        $cliente->save();
        return redirect('clientes')->with('mensaje','¡Se agrego correctamente el Cliente!');
        
     }

     public function Updatecliente(Request $request){
      $producto = Clientes::find($request->id);
       //$producto->id = $request->id;
       $producto->nombre  = $request->nombre;
       $producto->apellido = $request->apellido;
       $producto->email = $request->email;
       $producto->telefono = $request->telefono;
       
       //$producto->Disponibilidad = $request->cargoRp;  
       //$producto->save();
       return redirect('clientes')->with('mensaje','¡Se agrego correctamente el producto!');
       
       
    }

    public function Deletecliente($id){
       try {
           $sql = DB::delete("DELETE from cliente WHERE id = $id");
       } catch (\Throwable $th) {
           $sql = 0;
       }
       if($sql == true){
           return back()->with('mensaje','Registro eliminado con exito');
       }else{
           return back()->with('mensaje','Error al eliminar');
       }
      
    }
}
