<?php

namespace App\Http\Middleware;

use Closure;

class MDusuarioStandar
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
        if(usuarioActual->tipos_id != 1 and usuarioActual->tipos_id != 0)
        {
            return view("mensajes.msj_rechazado")->with("msj", "No tiene suficientes permisos para acceder.");
        }
        return $next($request);
    }
}
