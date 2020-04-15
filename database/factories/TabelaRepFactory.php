<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TabelaRep;
use Faker\Generator as Faker;

$factory->define(TabelaRep::class, function (Faker $faker) {

    return [
        'tbr_tarifacao_id' => $faker->randomDigitNotNull,
        'tbr_valor' => $faker->randomDigitNotNull,
        'tbr_terminacao_id' => $faker->randomDigitNotNull
    ];
});
