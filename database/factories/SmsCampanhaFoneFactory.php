<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\SmsCampanhaFone;
use Faker\Generator as Faker;

$factory->define(SmsCampanhaFone::class, function (Faker $faker) {

    return [
        'smscf_telefone' => $faker->word,
        'smscf_nome' => $faker->word,
        'smscf_data_ligar' => $faker->word,
        'smscf_hora_ligar' => $faker->word,
        'smscf_data_ligou' => $faker->word,
        'smscf_hora_ligou' => $faker->word,
        'smscf_terminacao_id' => $faker->randomDigitNotNull,
        'smscf_criouarq' => $faker->word,
        'smscf_reinclusao' => $faker->randomDigitNotNull,
        'smscf_status' => $faker->word,
        'smscf_message' => $faker->word
    ];
});
