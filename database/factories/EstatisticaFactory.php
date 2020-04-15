<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Estatistica;
use Faker\Generator as Faker;

$factory->define(Estatistica::class, function (Faker $faker) {

    return [
        'est_destino' => $faker->word,
        'est_fornecedor_id' => $faker->randomDigitNotNull,
        'est_representante_id' => $faker->randomDigitNotNull,
        'est_status' => $faker->word,
        'est_tempo_ate_atender' => $faker->randomDigitNotNull,
        'est_tempo_conversa' => $faker->randomDigitNotNull,
        'est_terminacao_id' => $faker->randomDigitNotNull,
        'est_assinante' => $faker->word,
        'est_data_inicio' => $faker->date('Y-m-d H:i:s'),
        'est_data_final' => $faker->date('Y-m-d H:i:s'),
        'est_tentativa' => $faker->randomDigitNotNull,
        'est_uniqueid' => $faker->word,
        'est_causahangup' => $faker->randomDigitNotNull
    ];
});
