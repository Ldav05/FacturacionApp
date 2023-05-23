<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacturaCompra;
use App\Models\Productos;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    public function Crearventa(Request $request){
        $venta = new FacturaCompra();
        $usuario = User::find();
        //$producto = Productos::find('nombre');
        if($usuario->nombre == $request->usuario){
            $venta->idusuario = $usuario->id;
            //if($producto->nombre == $request->producto){
               // $venta->idusuario = $usuario->id;
           // }
            $venta->save();
        }
        //$venta->idusuario = $request->usuario;
        return back()->with('mensaje', '¡Venta generada exitosamente!');
    }
}
