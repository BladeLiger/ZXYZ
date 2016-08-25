<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sitio extends Model
{
    protected $fillable = [
    	'nombre_sitio',
    	'descripcion',
    ];
    public function publicaciones(){
        return $this->belongsToMany('App\publicaciones');
    }
}
