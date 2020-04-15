<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ContaCorrente;
use Faker\Generator as Faker;

$factory->define(ContaCorrente::class, function (Faker $faker) {

    return [
        'cco_data' => $faker->word,
        'cco_hora' => $faker->word,
        'cco_historico' => $faker->word,
        'cco_valor' => $faker->randomDigitNotNull,
        'cco_tipo' => $faker->word,
        'cco_assinante' => $faker->word,
        'cco_representante_id' => $faker->randomDigitNotNull,
        'cco_fornecedor_id' => $faker->randomDigitNotNull
    ];
});
