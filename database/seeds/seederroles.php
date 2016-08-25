<?php

use Illuminate\Database\Seeder;
use App\Role;
class seederroles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::Create([
	        'name'=>'superadmin',
	        'display_name'=>'superadmin',
	        'description'=>'administrador Total',
		]);
		Role::Create([
	        'name'=>'admin',
	        'display_name'=>'admin',
	        'description'=>'administrador pagina',
		]);
		Role::Create([
	        'name'=>'usuario',
	        'display_name'=>'usuario',
	        'description'=>'usuario',
		]);
    }
}
