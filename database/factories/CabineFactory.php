<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cabine;
use Faker\Generator as Faker;

$factory->define(Cabine::class, function (Faker $faker) {

    return [
        'cab_data' => $faker->word,
        'cab_hora' => $faker->word,
        'cab_cliente' => $faker->word,
        'cab_user_id' => $faker->randomDigitNotNull,
        'cab_representante_id' => $faker->randomDigitNotNull,
        'cab_fornecedor_id' => $faker->randomDigitNotNull
    ];
});
