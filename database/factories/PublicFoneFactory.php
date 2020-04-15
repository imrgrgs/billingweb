<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PublicFone;
use Faker\Generator as Faker;

$factory->define(PublicFone::class, function (Faker $faker) {

    return [
        'pbt_telefone' => $faker->word,
        'pbt_data_ligar' => $faker->word,
        'pbt_hora_ligar' => $faker->word,
        'pbt_data_ligou' => $faker->word,
        'pbt_hora_ligou' => $faker->word,
        'pbt_tempo_ouviu' => $faker->randomDigitNotNull,
        'pbt_obs' => $faker->word,
        'pbt_terminacao_id' => $faker->randomDigitNotNull,
        'pbt_criouarq' => $faker->word,
        'pbt_reinclusao' => $faker->randomDigitNotNull,
        'pbt_cpf' => $faker->randomDigitNotNull,
        'pbt_satisfacao' => $faker->word
    ];
});
