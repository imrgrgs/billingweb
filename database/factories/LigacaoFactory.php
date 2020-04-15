<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ligacao;
use Faker\Generator as Faker;

$factory->define(Ligacao::class, function (Faker $faker) {

    return [
        'lge_assinante' => $faker->word,
        'lge_datainicio' => $faker->date('Y-m-d H:i:s'),
        'lge_datafim' => $faker->date('Y-m-d H:i:s'),
        'lge_segundos' => $faker->randomDigitNotNull,
        'lge_fone_origem' => $faker->word,
        'lge_valor' => $faker->randomDigitNotNull,
        'lge_valor_agente' => $faker->randomDigitNotNull,
        'lge_valor_repres' => $faker->randomDigitNotNull,
        'lge_valor_master' => $faker->randomDigitNotNull,
        'lge_representante_id' => $faker->randomDigitNotNull,
        'lge_fornecedor_id' => $faker->randomDigitNotNull,
        'lge_gvt_id' => $faker->randomDigitNotNull,
        'lge_tptarifacao' => $faker->word,
        'lge_status' => $faker->word
    ];
});
