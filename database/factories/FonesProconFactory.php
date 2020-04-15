<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FonesProcon;
use Faker\Generator as Faker;

$factory->define(FonesProcon::class, function (Faker $faker) {

    return [
        'fpro_ddd' => $faker->word,
        'fpro_fone' => $faker->word,
        'fpro_dddfone' => $faker->word,
        'fpro_cadastro' => $faker->word,
        'fpro_evento' => $faker->word,
        'fpro_data_evento' => $faker->word
    ];
});
