<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cac;
use Faker\Generator as Faker;

$factory->define(Cac::class, function (Faker $faker) {

    return [
        'cac_cliente_id' => $faker->randomDigitNotNull,
        'cac_data_abertura' => $faker->word,
        'cac_hora_abertura' => $faker->word,
        'cac_tipo' => $faker->word,
        'cac_descricao' => $faker->text,
        'cac_solucao' => $faker->text,
        'cac_status' => $faker->word,
        'cac_nomecontato' => $faker->word,
        'cac_data_solucao' => $faker->word,
        'cac_hora_solucao' => $faker->word,
        'cac_login' => $faker->word
    ];
});
