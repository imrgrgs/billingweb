<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contratacao;
use Faker\Generator as Faker;

$factory->define(Contratacao::class, function (Faker $faker) {

    return [
        'cnt_assinante_id' => $faker->randomDigitNotNull,
        'cnt_data' => $faker->word,
        'cnt_hora' => $faker->word,
        'cnt_valor' => $faker->randomDigitNotNull,
        'cnt_status' => $faker->word,
        'cnt_dataliberou' => $faker->word,
        'cnt_tipo' => $faker->word,
        'cnt_historico' => $faker->word,
        'cnt_boleto' => $faker->word,
        'cnt_agente_id' => $faker->randomDigitNotNull,
        'cnt_saldo_repres' => $faker->randomDigitNotNull,
        'cnt_percentual_rev' => $faker->randomDigitNotNull,
        'cnt_percentual_assin' => $faker->randomDigitNotNull,
        'cnt_saldo_assin_ant' => $faker->randomDigitNotNull,
        'cnt_saldo_rev_ant' => $faker->randomDigitNotNull,
        'cnt_comprovacao' => $faker->word,
        'cnt_estorno_id' => $faker->randomDigitNotNull
    ];
});
