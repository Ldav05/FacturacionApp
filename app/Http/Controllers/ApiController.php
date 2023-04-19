<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class ApiController extends Controller
{
    public function create(Request $request){
       $Ventas = new Ventas();

       $Ventas->nombre = $request->input('nombre');
       $Ventas->email = $request->input('email');
       $Ventas->telefono = $request->input('telefono');
       $Ventas->apellido = $request->input('apellido');

       $Ventas->save();
       return response()->json($Ventas);
    }
}
