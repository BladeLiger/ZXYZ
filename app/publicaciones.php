<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicaciones extends Model
{
    protected $fillable = [
    	'titulo',
    	'contenido',
    	'fecha_publicacion',
    	'fecha_caducidad',
    	'id_estado',
    	'id_tipo'
    ];
    public function sitios(){
        return $this->belongsToMany('App\sitio');
    }

    public function multimedia(){
        return $this->belongsTo('App\multimedia','id','id_publicacion');
    }
}
