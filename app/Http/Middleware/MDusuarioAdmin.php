<?php

namespace App\Http\Middleware;

use Closure;

class MDusuarioAdmin
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
        $usuarioActual = \Auth::user();
        if($usuarioActual == NULL or $usuarioActual->tipos_id != 0)
        {
            return redirect('/error');//->with('msj',"No tiene suficientes permisos para acceder.");
            //return view('msj_rechazado')->with("msj", "No tiene suficientes permisos para acceder.");
        }
        return $next($request);
    }
}
