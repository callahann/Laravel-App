<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catastrofe extends Model
{
    protected $table = 'catastrofes';
	public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function bingo()
    {
    	return $this->hasMany(Bingo::class);
    }

    public function voluntariado()
    {
    	return $this->hasMany(Voluntariado::class);
    }

    public function donacion()
    {
    	return $this->hasMany(Donacion::class);
    }

    public function recoleccion()
    {
    	return $this->hasMany(Recoleccion::class);
    }

    //Many to many.
    public function comunas()
    {
        return $this->belongsToMany(Comuna::class);
    }
}
