<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CpaMaster;
use Faker\Generator as Faker;

$factory->define(CpaMaster::class, function (Faker $faker) {

    return [
        'cma_fornecedor_id' => $faker->randomDigitNotNull,
        'cma_data' => $faker->word,
        'cma_hora' => $faker->word,
        'cma_valor' => $faker->randomDigitNotNull,
        'cma_status' => $faker->word,
        'cma_dataliberou' => $faker->word,
        'cma_tipo' => $faker->word,
        'cma_historico' => $faker->word,
        'cma_boleto' => $faker->word
    ];
});
