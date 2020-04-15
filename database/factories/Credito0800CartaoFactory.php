<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Credito0800Cartao;
use Faker\Generator as Faker;

$factory->define(Credito0800Cartao::class, function (Faker $faker) {

    return [
        'cr8_data' => $faker->word,
        'cr8_hora' => $faker->word,
        'cr8_valor' => $faker->randomDigitNotNull,
        'cr8_tipo' => $faker->word,
        'cr8_comprovacao' => $faker->word,
        'cr8_fornecedor_id' => $faker->randomDigitNotNull
    ];
});
