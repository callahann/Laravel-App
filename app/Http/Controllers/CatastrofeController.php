<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Catastrofe;
use DB;
use App\Medida;
use App\Bingo;
use App\Recoleccion;
use App\Voluntariado;
use App\Donacion;
use App\Comuna;
use App\CatastrofeComuna;
use App\Region;

class CatastrofeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    //Mostrar todas las catastrofes (MODIFICAR: Debería ser que catastrofe en que comuna, nada más)
    public function index(){
        $catastrofes = Catastrofe::all();
        $comunas = Comuna::all();
        $catastrofe_comunas = CatastrofeComuna::all();
        $regions = Region::all();
    	return view('catastrofes.index', compact('catastrofes','comunas','catastrofe_comunas','regions'));
    }

 	//Mostrar el detalle de una catastrofe (MODIFICAR: Poner todos los campos)
    public function show($id){
        $catastrofes = Catastrofe::findOrFail($id);

        $bingos =Bingo::all();
        $donacions = Donacion::all();
        $recoleccions = Recoleccion::all();
        $voluntariados = Voluntariado::all();
        $comunas = Comuna::all();
        $catastrofe_comunas = CatastrofeComuna::all();
        $regions = Region::all();
        $medidas = Medida::all();
        
        return view('catastrofes.show', compact('catastrofes', 'bingos', 'donacions', 'recoleccions', 'voluntariados', 'medidas', 'comunas', 'catastrofe_comunas', 'regions'));
    }

    //Modifica datos de la catastrofe (MODIFICAR: Permisos (Sólo gobierno) y se debe hacer update sólo desde la vista modificable que es del gobierno)
    public function update(Request $request, $id){
        $catastrofes = Catastrofe::findOrFail($id);
        $catastrofes->tipo_catas = "Cosas1";
        $catastrofes->descripcion_c = "descripcion nueva1";
        $catastrofes->save();
        return redirect()->route('catastrofes_lista'); 
    }

    public function comentarMedida(){

        return view('medidas.comentarMedida');
    }
}
