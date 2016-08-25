<?php

namespace App;

use App\Http\Requests\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use EntrustUserTrait; //hacemos uso del trait en la clase User para hacer uso de sus métodos
    //quitar por un momento para realizar el seeder
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellidosP','apellidoM','ci','email', 'password','id_estado','id_unidad',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //establecemos las relaciones con el modelo Role, ya que un usuario puede tener varios roles
    //y un rol lo pueden tener varios usuarios
    public function roles(){
        return $this->belongsToMany('App\Role');
    }

    
}
