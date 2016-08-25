<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->name,
        'apellidoP' => $faker->lastname,
        'apellidoM' => $faker->lastname,
        'ci' => 'admin',//se aumento para ingresar con ci y no con email
        'email' => $faker->safeEmail,
        'password' => bcrypt('admin'),
        'id_estado' => '1',
        'id_unidad' => '1',
        'remember_token' => str_random(10),
    ];
});
