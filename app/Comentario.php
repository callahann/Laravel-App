<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function bingo()
    {
    	return $this->belongsTo(Bingo::class);
    }

    public function donacion()
    {
    	return $this->belongsTo(Donacion::class);
    }

    public function recoleccion()
    {
    	return $this->belongsTo(Recoleccion::class);
    }

    public function voluntariado()
    {
    	return $this->belongsTo(Voluntariado::class);
    }
}
