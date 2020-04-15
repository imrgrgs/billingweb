<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\SmsCampanha;
use Faker\Generator as Faker;

$factory->define(SmsCampanha::class, function (Faker $faker) {

    return [
        'smsc_descricao' => $faker->word,
        'smsc_status' => $faker->word,
        'smsc_data_ini' => $faker->word,
        'smsc_hora_ini' => $faker->word,
        'smsc_terminacao_id' => $faker->randomDigitNotNull,
        'smsc_fornecedor_id' => $faker->randomDigitNotNull,
        'smsc_login' => $faker->word,
        'smsc_maxretries' => $faker->randomDigitNotNull,
        'smsc_retrytime' => $faker->randomDigitNotNull,
        'smsc_waittime' => $faker->randomDigitNotNull,
        'smsc_reinclusao_automatica' => $faker->randomDigitNotNull,
        'smsc_representante_id' => $faker->randomDigitNotNull,
        'smsc_hora_parar' => $faker->word,
        'smsc_qtd_simult_noite' => $faker->randomDigitNotNull,
        'smsc_qtd_simult_dia' => $faker->randomDigitNotNull,
        'smsc_data_encerrar' => $faker->word,
        'smsc_bloqueia_procon' => $faker->word,
        'smsc_intervalo_envio' => $faker->randomDigitNotNull,
        'smsc_volume_envio_por_intervalo' => $faker->randomDigitNotNull
    ];
});
