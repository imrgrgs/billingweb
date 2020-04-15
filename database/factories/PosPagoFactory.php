<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PosPago;
use Faker\Generator as Faker;

$factory->define(PosPago::class, function (Faker $faker) {

    return [
        'pos_plano_id' => $faker->randomDigitNotNull,
        'pos_data_contrato' => $faker->word,
        'pos_utilizado_fixo' => $faker->randomDigitNotNull,
        'pos_utilizado_celular' => $faker->randomDigitNotNull,
        'pos_dia_zerar' => $faker->randomDigitNotNull
    ];
});
