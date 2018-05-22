<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medida;
use App\Bingo;
use App\Recoleccion;
use App\Voluntariado;
use App\Donacion;
use App\Catastrofe;

class MedidaController extends Controller
{	
	public function createBingo($id)
    {	
        $catastrofes = Catastrofe::findOrFail($id);
    	return view('medidas.createBingo', compact('catastrofes'));
    }
    public function createRecoleccion($id)
    {
    	$catastrofes = Catastrofe::findOrFail($id);
    	return view('medidas.createRecoleccion', compact('catastrofes'));
    }
    public function createVoluntariado($id)
    {
    	$catastrofes = Catastrofe::findOrFail($id);
    	return view('medidas.createVoluntariado', compact('catastrofes'));
    }
    public function createDonacion($id)
    {
    	$catastrofes = Catastrofe::findOrFail($id);
    	return view('medidas.createDonacion', compact('catastrofes'));
    }

   public function storeBingo(Request $request)
   {	
   		$medida = new Medida;
   		$medida->users_id = \Auth::user()->id;
   		$medida->catastrofes_id = $request->get('id');
   		$medida->save();

   		$bingo = new Bingo;
   		$bingo->medidas_id = $medida->id;
   		$bingo->catastrofes_id = $medida->catastrofes_id;
   		$bingo->progreso = 0;
   		$bingo->fecha_inicio = $request->get('fecha_inicio');
   		$bingo->fecha_termino = $request->get('fecha_termino');
   		$bingo->lugar_bingo = $request->get('lugar_bingo');
   		$bingo->monto_bingo = 0;
   		$bingo->meta_bingo = $request->get('meta_bingo');
   		$bingo->actividad = $request->get('actividad');
   		$bingo->save();
   		return redirect()->route('catastrofes_lista');  

   } 

   public function storeRecoleccion(Request $request)
   {
   		$medida = new Medida;
   		$medida->users_id = \Auth::user()->id;
   		$medida->catastrofes_id = $request->get('id');
   		$medida->save();

   		$recoleccion = new Recoleccion;
   		$recoleccion->medidas_id = $medida->id;
   		$recoleccion->catastrofes_id = $medida->catastrofes_id;
   		$recoleccion->progreso = 0;
   		$recoleccion->fecha_inicio = $request->get('fecha_inicio');
   		$recoleccion->fecha_termino = $request->get('fecha_termino');
   		$recoleccion->lugar_rec = $request->get('lugar_rec');
   		$recoleccion->cant_elem_actual = 0;
   		$recoleccion->cant_elem_meta = $request->get('cant_elem_meta');
   		$recoleccion->save();
   		return redirect()->route('catastrofes_lista'); 

   }

   public function storeVoluntariado(Request $request)
   {	
   		$medida = new Medida;
   		$medida->users_id = \Auth::user()->id;
   		$medida->catastrofes_id = $request->get('id');
   		$medida->save();

   		$voluntariado = new Voluntariado;
   		$voluntariado->medidas_id = $medida->id;
   		$voluntariado->catastrofes_id = $medida->catastrofes_id;
   		$voluntariado->progreso = 0;
   		$voluntariado->fecha_inicio = $request->get('fecha_inicio');
   		$voluntariado->fecha_termino = $request->get('fecha_termino');
   		$voluntariado->tipo_vol = $request->get('tipo_vol');
   		$voluntariado->cant_personas_actual = 0;
   		$voluntariado->cant_personas_esperadas = $request->get('cant_personas_esperadas');
   		$voluntariado->save();
   		return redirect()->route('catastrofes_lista'); 

   }

   public function storeDonacion(Request $request)
   {
   		$medida = new Medida;
   		$medida->users_id = \Auth::user()->id;
   		$medida->catastrofes_id = $request->get('id');
   		$medida->save();

   		$donacion = new Donacion;
   		$donacion->medidas_id = $medida->id;
   		$donacion->catastrofes_id = $medida->catastrofes_id;
   		$donacion->progreso = 0;
   		$donacion->fecha_inicio = $request->get('fecha_inicio');
   		$donacion->fecha_termino = $request->get('fecha_termino');
   		$donacion->monto_don = 0;
   		$donacion->meta_don = $request->get('meta_don');
   		$donacion->cuenta = $request->get('cuenta');
   		$donacion->save();
   		return redirect()->route('catastrofes_lista'); 

   }
}
