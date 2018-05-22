<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elemento extends Model
{
    public function recoleccion()
    {
    	return $this->belongsTo(Recoleccion::class);
    }
}
