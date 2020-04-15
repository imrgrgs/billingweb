<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Credito4003;
use Faker\Generator as Faker;

$factory->define(Credito4003::class, function (Faker $faker) {

    return [
        'cr4_data' => $faker->word,
        'cr4_hora' => $faker->word,
        'cr4_valor' => $faker->randomDigitNotNull,
        'cr4_tipo' => $faker->word,
        'cr4_comprovacao' => $faker->word,
        'cr4_fornecedor_id' => $faker->randomDigitNotNull
    ];
});
