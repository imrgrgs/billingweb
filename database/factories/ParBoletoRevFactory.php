<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ParBoletoRev;
use Faker\Generator as Faker;

$factory->define(ParBoletoRev::class, function (Faker $faker) {

    return [
        'bol_empresa_id' => $faker->randomDigitNotNull,
        'bol_banco' => $faker->randomDigitNotNull,
        'bol_agencia' => $faker->word,
        'bol_conta' => $faker->word,
        'bol_localpagamento' => $faker->word,
        'bol_carteira' => $faker->word,
        'bol_instrucao1' => $faker->word,
        'bol_instrucao2' => $faker->word,
        'bol_instrucao3' => $faker->word,
        'bol_instrucao4' => $faker->word,
        'bol_instrucao5' => $faker->word,
        'bol_nossonumero' => $faker->word,
        'bol_percjuros' => $faker->randomDigitNotNull,
        'bol_taxabancaria' => $faker->randomDigitNotNull,
        'bol_tetotxbanc' => $faker->randomDigitNotNull,
        'bol_vlrminimo' => $faker->randomDigitNotNull,
        'bol_convenio' => $faker->randomDigitNotNull,
        'bol_qtd_dias_vcto' => $faker->randomDigitNotNull
    ];
});
