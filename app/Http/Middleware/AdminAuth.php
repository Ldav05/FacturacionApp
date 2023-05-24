<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->path() == "login" && $request->session()->has('user') || $request->path()=="home"){
            return redirect()->to('homeadmin');
        }else if($request->path() == 'login' && $request->session()->has('users')|| $request->path()=="homeadmin"){
            return redirect()->to('home');
        }else{
            return $next($request);
        }
    }
}
