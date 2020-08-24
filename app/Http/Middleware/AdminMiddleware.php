<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::user()->admin){ //verificará que sea un usuario administrador si ah iniciado sesión
            return redirect('/');
        }
        return $next($request); //la variable $next hace referencia a que pasará a la evaluación si hubiera otro middleware
    }
}
