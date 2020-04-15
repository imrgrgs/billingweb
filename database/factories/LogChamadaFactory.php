<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\LogChamada;
use Faker\Generator as Faker;

$factory->define(LogChamada::class, function (Faker $faker) {

    return [
        'log_datahora' => $faker->date('Y-m-d H:i:s'),
        'log_destino' => $faker->word,
        'log_texto' => $faker->text
    ];
});
