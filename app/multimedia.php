<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class multimedia extends Model
{
    protected $fillable = [
    	'nombre_multimedia',
    	'tipo',
    	'id_publicacion',
    ];

    public function publicaciones(){
    	return $this->hasMany('App\publicaciones','id');
    }
}
