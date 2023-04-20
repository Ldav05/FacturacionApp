<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function CrearClientes(Request $request){
        $Cliente = new Clientes();
 
        $Cliente->nombre = $request->input('nombre');
        $Cliente->email = $request->input('email');
        $Cliente->telefono = $request->input('telefono');
        $Cliente->apellido = $request->input('apellido');
 
        $Cliente->save();
        return response()->json($Cliente);
     }
}
