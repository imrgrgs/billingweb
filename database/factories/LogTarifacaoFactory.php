<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\LogTarifacao;
use Faker\Generator as Faker;

$factory->define(LogTarifacao::class, function (Faker $faker) {

    return [
        'lgt_representante_id' => $faker->randomDigitNotNull,
        'lgt_assinante' => $faker->word,
        'lgt_tptarifacao' => $faker->word,
        'lgt_data_ini' => $faker->word,
        'lgt_hora_ini' => $faker->word
    ];
});
