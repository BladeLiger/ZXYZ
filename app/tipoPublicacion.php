<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicaciones extends Model
{
    protected $fillable = [
    	'tipo_nombre',
    	'descripcion',
    	'id_estado',
    ];
}
