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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Athlete::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'surname' => $faker->lastname,
        'genre' => $faker->randomElement($array = array('male', 'female')),
        'role' => str_random(10),
        'habilities' => str_random(10),
        'license' => $faker->regexify('CT\-+[0-9]{5}'),
        'date_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'active' => $faker->randomElement($array = array(1, 0))
    ];
});

$factory->define(App\Velocity::class, function (Faker\Generator $faker) {
    return [
        'category' => $faker->randomElement(['Cadet','Juvenil', 'Junior', 'Promesa', 'Absolut']),
        'track' => $faker->randomElement(['100mll','200mll', '400mll', '400mt']),
        'result' => $faker->time($format = 'H:i:s', $max = 'now'),
        "place" => str_random(10),
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        "field" => $faker->randomElement(['AL', 'PC']),
    ];
});

$factory->define(App\Competition::class, function (Faker\Generator $faker) {
    return [
        'category' => $faker->randomElement(['Cadet','Juvenil', 'Junior', 'Promesa', 'Absolut']),
        'track' => $faker->randomElement(['Llargada','triple', 'Pes', 'Alçada']),
        'result' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
        "place" => str_random(10),
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        "field" => $faker->randomElement(['AL', 'PC']),
    ];
});
