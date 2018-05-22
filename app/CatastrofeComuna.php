<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatastrofeComuna extends Model
{
    protected $table = 'catastrofe_comuna';
   	public function comunas()
   	{
   		return $this->belongsTo('App\Comuna');
   	}
   	
   	public function catastrofes()
   	{
   		return $this->belongsTo('App\Catastrofe');
   	}
}