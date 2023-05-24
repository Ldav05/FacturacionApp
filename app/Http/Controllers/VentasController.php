<?php

namespace App\Http\Controllers;

use App\Models\FacturaCompra;
use App\Models\User;
use App\Models\Clientes;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentasController extends Controller
{
    public function Crearventa(Request $request){
        $nombre="";
        $venta = new FacturaCompra();
        $cliente = new Clientes();
        //$idclientes = Clientes::all();
        $usuario = User::where('nombre', $request->usuario)->first();
        if($usuario){
             
            
            /*$fecha = date('Y-m-d H:i:s'); // Obtener la fecha actual
            $venta->fecha = $fecha;
            $venta->idusuario = $userId;
            $venta->save();


            if ($request->has('habilitar')){
                //$venta->idcliente = $id;
                
                $cliente->nombre  = $request->nombre;
                $cliente->apellido = $request->apellido;
                $cliente->email = $request->email;
                $cliente->telefono = $request->telefono;
                $cliente->save();

                $idclientes = Clientes::where('email', $request->email);
                if($idclientes == $request->email){
                $venta->idcliente = $cliente->id;
                $venta->save(); 
                return back()->with('mensaje', '¡Venta generada exitosamente!');
                }else{
                    return back()->with('mensaje', '¡Este cliente ya se encuentra registrado!');
                }
                
                 
                //return back()->with('mensaje', '¡Venta generada exitosamente!');
            }else{
                return back()->with('mensaje', '¡Venta generada exitosamente!');
            }*/
            
        }
        
        
        
    }
}
