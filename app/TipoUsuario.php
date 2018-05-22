<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    public function user()
    {
    	return $this->hasMany(User::class);
    }
}
