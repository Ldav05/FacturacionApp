<?php

namespace App\Http\Controllers;

use App\Models\Permiso;
use App\Models\Productos;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
//use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{


    public function register(Request $request){
      
        $user = new User();
        $user->nombre  = $request->nombre;
        $user->email = $request->email;
        $user->pasword = password_hash($request->pasword, PASSWORD_DEFAULT);
        $user->cargo = $request->cargo;
        if($request->rolid == 'Admin'){
            $user->rolid = 1;
        }else{
            $user->rolid = 2;
        }
        $user->cedula = $request->cedula;
        
        $user->save();
        
        Auth::login($user);
        //echo "<script>alert('Registro enviado exitosamente');</script>";
        return redirect(route('login'))->with('mensaje', '¡Registro Exitoso!');
           
        
        

    }

    public function login(Request $request){

         $credentials = $request->only('email', 'pasword','rolid');
         $user = User::where('email',$credentials['email'])->first();  
         $users = session('user');
            if(!$user || (!password_verify($credentials['pasword'], $user->pasword))){
                return redirect('login')->with('mensaje', '¡Error de credenciales!');
            }else if ((password_verify($credentials['pasword'], $user->pasword) & ($user->rolid == 1))){
                $request->session()->put('user',$user);
                return redirect('homeadmin')->with('mensaje', '¡Inicio de sesión exitoso!');
            }else if((password_verify($credentials['pasword'], $user->pasword) & ($user->rolid == 2))){
                $request->session()->put('users',$users);
                return redirect('home')->with('mensaje', '¡Inicio de sesión exitoso!');
            }
      
    }

    

    

    
    
}

