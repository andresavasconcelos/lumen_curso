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

$factory->define(App\User::class, function (Faker\Generator $faker) { // gera dados fake
    static $password;
    return [
        'name' => $faker->name, //gerando um nome facil
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = app('hash')->make('secret'),
        'remember_token' => str_random(10),
    ];
});
