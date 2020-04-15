<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CpaAgente;
use Faker\Generator as Faker;

$factory->define(CpaAgente::class, function (Faker $faker) {

    return [
        'cpa_agente_id' => $faker->randomDigitNotNull,
        'cpa_data' => $faker->word,
        'cpa_hora' => $faker->word,
        'cpa_valor' => $faker->randomDigitNotNull,
        'cpa_status' => $faker->word,
        'cpa_dataliberou' => $faker->word,
        'cpa_tipo' => $faker->word,
        'cpa_historico' => $faker->word,
        'cpa_boleto' => $faker->word,
        'cpa_saldoanterior_rev' => $faker->randomDigitNotNull,
        'cpa_comprovacao' => $faker->word,
        'cpa_estorno_id' => $faker->randomDigitNotNull
    ];
});
