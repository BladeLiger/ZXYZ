<?php

use Illuminate\Database\Seeder;
use App\unidad;
class seederunidades extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        unidad::create([
	        'unidad'=>'gobernacion',
	        'descripcion'=>'gobernacion'
		]);
		unidad::create([
	        'unidad'=>'turimos',
	        'descripcion'=>'gobernacion'
		]);
		unidad::create([
	        'unidad'=>'otros',
	        'descripcion'=>'gobernacion'
		]);
    }
}
