<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CreditoAdm;
use Faker\Generator as Faker;

$factory->define(CreditoAdm::class, function (Faker $faker) {

    return [
        'cca_fornecedor_id' => $faker->randomDigitNotNull,
        'cca_data' => $faker->word,
        'cca_hora' => $faker->word,
        'cca_valor' => $faker->randomDigitNotNull
    ];
});
