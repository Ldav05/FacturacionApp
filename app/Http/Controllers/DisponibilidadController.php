<?php

namespace App\Http\Controllers;

use App\Models\Disponibilidad;
use App\Models\Producto;
use App\Models\Productos;
use App\Models\ProductosDisponibles;
use Illuminate\Http\Request;

class DisponibilidadController extends Controller
{
    public function DisponibilidadProducto(Request $request){
        $response="";
        $data = json_decode($request->getContent());
        //$goals = DB::select('SELECT Disponibilidad FROM producto');
        $disponible = ProductosDisponibles::where('Disponibilidad',$data->Disponibilidad)->first();
        if($disponible){
            if(($data->Disponibilidad) == ($disponible->Disponibilidad) & ($disponible->Disponibilidad) == 0){  
                $response = ProductosDisponibles::where('Disponibilidad','=',0)->get();
            //return ($response);  
            }else{
                $response = ProductosDisponibles::where('Disponibilidad','=',1)->get();
            }
        }
        return ($response);
    }
}
