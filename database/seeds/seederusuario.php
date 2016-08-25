<?php

use Illuminate\Database\Seeder;

class seederusuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 1)->create();// accedes al modelo, cuantos usuarios por defecto queremos crear
    }
}
