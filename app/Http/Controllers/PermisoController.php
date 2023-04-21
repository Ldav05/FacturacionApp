<?php

namespace App\Http\Controllers;

use App\Models\Permiso;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    public function CrearPermiso(Request $request){
        $Permiso = new Permiso();
 
        $Permiso->nombre  = $request->input('nombre');
        $Permiso->Descripcion  = $request->input('Descripcion');
        //$Producto->apellido = $request->input('apellido');
 
        $Permiso->save();
        return response()->json($Permiso);
    }
}
