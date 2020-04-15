<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AssinanteCancel;
use Faker\Generator as Faker;

$factory->define(AssinanteCancel::class, function (Faker $faker) {

    return [
        'atv_user_id' => $faker->randomDigitNotNull,
        'atv_data' => $faker->word,
        'atv_hora' => $faker->word,
        'atv_atualizado_ant' => $faker->word,
        'atv_atualizado_atu' => $faker->word,
        'atv_representante_id' => $faker->randomDigitNotNull,
        'atv_fornecedor_id' => $faker->randomDigitNotNull
    ];
});
