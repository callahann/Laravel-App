<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bingo extends Model
{
    public function comentario()
    {
    	return $this->hasMany(Comentario::class);
    }

    public function catastrofe()
    {
    	return $this->belongsTo(Catastrofe::class);
    }
}
