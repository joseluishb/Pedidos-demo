<?php

namespace App\Http\Middleware;

use Closure;

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
        /* podemos quitar y poner en el grupo de rutas para que recuerde la url
        if(!auth()->check()){
            return redirect('/login');
        }
        */

        if(!auth()->user()->admin){
            return redirect('/login');
        }
        return $next($request);
    }
}
