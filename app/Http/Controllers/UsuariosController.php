<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function CrearUsuarios(Request $request){
        $Usuario = new Usuarios();
 
        $Usuario->nombre  = $request->input('nombre');
        $Usuario->email = $request->input('email');
        $Usuario->pasword = $request->input('pasword');
        $Usuario->cargo = $request->input('cargo');
        $Usuario->rolid = $request->input('rolid');
        $Usuario->cedula = $request->input('cedula');
        //$Producto->apellido = $request->input('apellido');
 
        $Usuario->save();
        return response()->json($Usuario);
     }
}
