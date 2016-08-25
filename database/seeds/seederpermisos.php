<?php

use Illuminate\Database\Seeder;
use App\Permission;
class seederpermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::Create([
	        'name'=>'permiso1',
	        'display_name'=>'permiso1',
	        'description'=>'permiso1',
		]);
		Permission::Create([
	        'name'=>'permiso2',
	        'display_name'=>'permiso2',
	        'description'=>'permiso2',
		]);
		Permission::Create([
	        'name'=>'permiso3',
	        'display_name'=>'permiso3',
	        'description'=>'permiso3',
		]);
    }
}
