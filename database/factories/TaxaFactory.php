<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Taxa;
use Faker\Generator as Faker;

$factory->define(Taxa::class, function (Faker $faker) {

    return [
        'tax_pais_id' => $faker->randomDigitNotNull,
        'tax_plano_id' => $faker->randomDigitNotNull,
        'tax_tipo' => $faker->word,
        'tax_valor' => $faker->randomDigitNotNull,
        'tax_valorfora' => $faker->randomDigitNotNull,
        'tax_vlrfornecedor' => $faker->randomDigitNotNull
    ];
});
