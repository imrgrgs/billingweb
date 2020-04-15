<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OrdemTerminacaoIa;
use Faker\Generator as Faker;

$factory->define(OrdemTerminacaoIa::class, function (Faker $faker) {

    return [
        'oia_fornecedor_id' => $faker->randomDigitNotNull,
        'oia_terminacao_id' => $faker->randomDigitNotNull,
        'oia_ddd' => $faker->word,
        'oia_tempo' => $faker->randomDigitNotNull
    ];
});
