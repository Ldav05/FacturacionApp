<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function CrearRol(Request $request){
        $Rol = new Rol();
 
        $Rol->nombre  = $request->input('nombre');
        
        //$Producto->apellido = $request->input('apellido');
 
        $Rol->save();
        return response()->json($Rol);
     }
}
