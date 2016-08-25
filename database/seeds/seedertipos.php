<?php

use Illuminate\Database\Seeder;
use App\categoria;
class seedertipos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categoria::create([
	        'categoria'=>'deportes',
	        'descripcion'=>'estado para el usuario o pub, para dar de alta del sistema'
		]);
		categoria::create([
	        'categoria'=>'turismo',
	        'descripcion'=>'estado para el usuario o pub, para dar de alta del sistema'
		]);
		categoria::create([
	        'categoria'=>'otros',
	        'descripcion'=>'estado para el usuario o pub, para dar de alta del sistema'
		]);
    }
}
