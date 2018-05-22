<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorControlador extends Controller
{
    public function create()
    {
    	return view('errores.msjRechazado');
    }
}
