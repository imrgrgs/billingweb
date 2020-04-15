<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Aparelho;
use Faker\Generator as Faker;

$factory->define(Aparelho::class, function (Faker $faker) {

    return [
        'apa_descricao' => $faker->word,
        'apa_valor' => $faker->randomDigitNotNull,
        'apa_fornecedor_id' => $faker->randomDigitNotNull
    ];
});
