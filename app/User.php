<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'tipos_id'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function tipoUsuario()
    {
    	return $this->belongsTo(tipoUsuario::class);
    }

    public function comentario()
    {
    	return $this->hasMany(comentario::class);
    }

    public function catastrofe()
    {
    	return $this->hasMany(catastrofe::class);
    }
}
