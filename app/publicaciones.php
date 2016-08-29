<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicaciones extends Model
{
    //protected $hidden = Array('pivot');
    protected $fillable = [
    	'titulo',
    	'contenido',
    	'fecha_publicacion',
    	'fecha_caducidad',
    	'id_estado',
    	'id_tipo',
        'id_usuario'
    ];
    public function sitios(){
        return $this->belongsToMany('App\sitio');
    }

    public function multimedia(){
        return $this->belongsTo('App\multimedia','id','id_publicacion');
    }

    /*public function toArray()
    {
        $attributes = $this->attributesToArray();
        $attributes = array_merge($attributes, $this->relationsToArray());
        unset($attributes['original']['id']);
        return $attributes;
    }*/
}
