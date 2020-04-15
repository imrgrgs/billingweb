<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PopsReveAssi;
use Faker\Generator as Faker;

$factory->define(PopsReveAssi::class, function (Faker $faker) {

    return [
        'popar_fornecedor_id' => $faker->randomDigitNotNull,
        'popar_representante_id' => $faker->randomDigitNotNull,
        'popar_assinante' => $faker->word,
        'popar_tarifas_id' => $faker->randomDigitNotNull,
        'popar_terminacao1_id' => $faker->randomDigitNotNull,
        'popar_terminacao2_id' => $faker->randomDigitNotNull,
        'popar_terminacao3_id' => $faker->randomDigitNotNull
    ];
});
