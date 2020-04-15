<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\NaoTarifadoTerm;
use Faker\Generator as Faker;

$factory->define(NaoTarifadoTerm::class, function (Faker $faker) {

    return [
        'nao_destino' => $faker->word,
        'nao_fornecedor_id' => $faker->randomDigitNotNull,
        'nao_terminacao_id' => $faker->randomDigitNotNull,
        'nao_segundos' => $faker->randomDigitNotNull
    ];
});
