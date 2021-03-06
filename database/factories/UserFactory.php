<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\projetoGCA\User::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
        'telefone' =>  '('.$faker->randomNumber($nbDigits = 2).') '. $faker->randomNumber($nbDigits = 5).'-'.
            $faker->randomNumber($nbDigits = 4), //$faker->phoneNumberCleared,
    ];
});
