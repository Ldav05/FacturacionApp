<?php

namespace App\Http\Controllers;

use App\Models\Disponibilidad;
use App\Models\Ventas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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


    public function Disponibilidad(Request $request){
        $response="";
        $data = json_decode($request->getContent());
        //$goals = DB::select('SELECT Disponibilidad FROM producto');
        $disponible = Disponibilidad::where('Disponibilidad',$data->Disponibilidad)->first();
        if($disponible){
            if(($data->Disponibilidad) == ($disponible->Disponibilidad) & ($disponible->Disponibilidad) == 0){  
                $response = Disponibilidad::where('Disponibilidad','=',0)->get();
            //return ($response);  
            }else{
                $response = Disponibilidad::where('Disponibilidad','=',1)->get();
            }
        }
        return ($response);
    }

}

