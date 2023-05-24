<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureTokenIsValid
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
        if($request->path() == 'login' && $request->session()->has('user')){
            return redirect()->to('homeadmin');
        }else if($request->path() == 'login' && $request->session()->has('users')){
            return redirect()->to('home');
        }else{
            return $next($request);
        }
       
    }
}
