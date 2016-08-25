<?php

use Illuminate\Database\Seeder;
use App\sitio;
class seedersitios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        sitio::create([
	        'nombre_sitio'=>'gobernacion',
	        'descripcion'=>'pagina de la gobernacion'
		]);
		sitio::create([
	        'nombre_sitio'=>'turismo',
	        'descripcion'=>'pagina de la turismo'
		]);
		sitio::create([
	        'nombre_sitio'=>'otro1',
	        'descripcion'=>'pagina de la otro1'
		]);
		sitio::create([
	        'nombre_sitio'=>'otro2',
	        'descripcion'=>'pagina de la otro2'
		]);
    }
}
