<?php

namespace App\Http\Controllers;

use App\Models\FacturaCompra;
use App\Models\User;
use App\Models\Clientes;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function Crearventa(Request $request){
        $venta = new FacturaCompra();
        $cliente = new Clientes();
        $usuario = User::where('nombre', $request->usuario)->first();
        if($usuario){
            $fecha = date('Y-m-d H:i:s'); // Obtener la fecha actual
            $venta->fecha = $fecha;
            $venta->idusuario = $usuario->id;
            $venta->save();
            if ($request->has('habilitar')){
                $cliente->nombre  = $request->nombre;
                $cliente->apellido = $request->apellido;
                $cliente->email = $request->email;
                $cliente->telefono = $request->telefono;  
                $cliente->save(); 
                return back()->with('mensaje', '¡Venta generada exitosamente!');
            }else{
                return back()->with('mensaje', '¡Venta generada exitosamente!');
            }
            
        }
        
        
        
    }
}
