<?php

namespace App\Http\Middleware;

use Session;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //echo"hi";
        $path=$request->path();
        if(($path=="login" || $path=="register") && Session::get('user')){
            return redirect('/');
        }
        else if(($path!='login' && !Session::get('user')) && ($path!='register' && !Session::get('user'))){
            return redirect('/login');
        }
        return $next($request);
    }
}
