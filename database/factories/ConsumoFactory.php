<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Consumo;
use Faker\Generator as Faker;

$factory->define(Consumo::class, function (Faker $faker) {

    return [
        'cns_assinante_id' => $faker->word,
        'cns_data_ini' => $faker->date('Y-m-d H:i:s'),
        'cns_data_fin' => $faker->date('Y-m-d H:i:s'),
        'cns_segundos' => $faker->randomDigitNotNull,
        'cns_destino' => $faker->word,
        'cns_valor' => $faker->word,
        'cns_valor_repr' => $faker->word,
        'cns_valor_master' => $faker->word,
        'cns_representante_id' => $faker->randomDigitNotNull,
        'cns_fornecedor_id' => $faker->randomDigitNotNull,
        'cns_terminacao_id' => $faker->randomDigitNotNull,
        'cns_ip' => $faker->word,
        'cns_uniqueid' => $faker->word,
        'cns_cabine_id' => $faker->randomDigitNotNull,
        'cns_valor_agente' => $faker->word,
        'cns_valor_vendedor' => $faker->word,
        'cns_tptarifacao' => $faker->word,
        'cns_saldo_revendaagente' => $faker->word,
        'cns_tarifa_assinante' => $faker->word,
        'cns_fone_origem' => $faker->word
    ];
});
