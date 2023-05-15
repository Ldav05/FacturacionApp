<?php

namespace App\Http\Controllers;

use App\Models\Permiso;
use App\Models\User;
//use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{


    public function register(Request $request){
      
        $user = new User();
        $user->nombre  = $request->nombre;
        $user->email = $request->email;
        $user->pasword = password_hash($request->pasword, PASSWORD_DEFAULT);
        $user->cargo = $request->cargo;
        $user->rolid = $request->rolid;
        $user->cedula = $request->cedula;
        
        $user->save();
        
        Auth::login($user);
        //echo "<script>alert('Registro enviado exitosamente');</script>";
        return redirect(route('login'))->with("<script>alert('Registro enviado exitosamente');</script>");
           
        
        

    }

    public function login(Request $request){
        
         $credentials = $request->only('email', 'pasword');
         $user = User::where('email',$credentials['email'])->first();       
        //$remember = ($request->has('remeber') ? true : false);
       // echo '<pre>';
       // print_r($credentials);
       // echo password_hash($credentials['pasword'], PASSWORD_DEFAULT);
        //echo password_verify($credentials['pasword'], $user->pasword);
        //echo '</pre>';
        //return ($user);
        if($user){
            if(password_verify($credentials['pasword'], $user->pasword)){
                return redirect('inicio');
            }else{
               return redirect('login');
            }
        }else{
            return redirect('login')->with('Verifique Su usuario o Contraseña');
        }
        /*  
        if(){
            $request->session()->regenerate();
            
            return "entro a aqui 0";//redirect('inicio');
        }else{  
            return  $credentials;//redirect('login');
        }
*/
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
    
}

