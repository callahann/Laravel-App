<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donacion;
use App\Bingo;
use App\Recoleccion;
use App\Http\Requests\CreateCatastroRequest;
use App\Catastrofe;
use App\Voluntariado;
use App\Comuna;
use App\CatastrofeComuna;
use App\Region;
use App\User;
use App\Medida;


//Controlador que maneja las vistas admin.
class AdminController extends Controller
{
    public function index()
    {
    	//Se importa todo el modelo Medida y se envia a la vista para ser mostrado.
        $users = \Auth::user();
    	$donacions = Donacion::all();
    	$bingos = Bingo::all();
    	$recoleccions = Recoleccion::all();
    	$voluntariados = Voluntariado::all();

    	return view('admin.index', compact('donacions', 'bingos', 'recoleccions', 'voluntariados', 'users'));
    }

    public function show($id)
    {
        $users = User::all();
    	$medidas = Medida::findOrFail($id);
        $bingos = Bingo::all();
        $donacions = Donacion::all();
        $recoleccions = Recoleccion::all();
        $voluntariados = Voluntariado::all();
        foreach($bingos as $bingo)
        {
            if($bingo->medidas_id == $medidas->id)
            {
                $dato = $bingo;
            }
        }

        foreach($donacions as $donacion)
        {
            if($donacion->medidas_id == $medidas->id)
            {
                $dato = $donacion;
            }
        }

        foreach($recoleccions as $recoleccion)
        {
            if($recoleccion->medidas_id == $medidas->id)
            {
                $dato = $recoleccion;
            }
        }

        foreach($voluntariados as $voluntariado)
        {
            if($voluntariado->medidas_id == $medidas->id)
            {
                $dato = $voluntariado;
            }
        }

        foreach($users as $user)
        {
            if($user->id == $medidas->users_id)
            {
                $usuario = $user;
            }
        }
        
        return view('admin.show', compact('dato', 'usuario'));
    }

    public function create()
    {
        $regions = Region::all();
    	return view('admin.create', compact('regions'));
    }

    public function store(CreateCatastroRequest $request)
    {
    	$cata = new Catastrofe;
        $cata->users_id = \Auth::user()->id;
    	$cata->tipo_catas = $request->get('tipo_cata');
    	$cata->descripcion_c = $request->get('descripcion');
        $cata->nombre_catas = $request->get('nombre_cata');
        $cata->comuna_id = 0;
    	$cata->save();

        $comuna = new Comuna;
        $comuna->nombre_com = $request->get('comuna');
        $comuna->regions_id = $request->get('region');
        $comuna->catastrofes_id = 0;
        $comuna->save(); 

        $catastrofe_comuna = new CatastrofeComuna;
        $catastrofe_comuna->catastrofe_id = $cata->id;
        $catastrofe_comuna->comuna_id = $comuna->id;
        $catastrofe_comuna->save();
    	
    	return redirect()->route('catastrofes_lista'); 
    }
}