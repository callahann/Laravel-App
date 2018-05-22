<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recoleccion extends Model
{

	public function comentario()
    {
    	return $this->hasMany(Comentario::class);
    }

    public function catastrofe()
    {
    	return $this->belongsTo(Catastrofe::class);
    }
	
    public function elementos()
    {
    	return $this->hasMany(Elemento::class);
    }
}
