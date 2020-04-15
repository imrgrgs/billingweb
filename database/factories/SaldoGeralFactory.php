<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\SaldoGeral;
use Faker\Generator as Faker;

$factory->define(SaldoGeral::class, function (Faker $faker) {

    return [
        'sdg_data' => $faker->word,
        'sdg_hora' => $faker->word,
        'sdg_tipo' => $faker->word,
        'sdg_valor' => $faker->randomDigitNotNull,
        'sdg_codigo' => $faker->randomDigitNotNull
    ];
});
