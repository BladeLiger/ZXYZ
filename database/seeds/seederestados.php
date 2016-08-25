<?php

use Illuminate\Database\Seeder;
use App\estados;

class seederestados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		estados::create([
	        'nombre'=>'habilitado',
	        'descripcion'=>'estado para el usuario o pub, para dar de alta del sistema'
		]);
		estados::create([
	        'nombre'=>'desabilitado',
	        'descripcion'=>'estado para el usuario o pub, para dar de baja del sistema'
		]);
		estados::create([
	        'nombre'=>'publicado',
	        'descripcion'=>'estado para publicar una pub'
		]);
		estados::create([
	        'nombre'=>'espera',
	        'descripcion'=>'estado para esperar por la publicacion'
		]);
		estados::create([
	        'nombre'=>'caducido',
	        'descripcion'=>'publicacion caducida'
		]);
    }
}
