<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TabEspA;
use Faker\Generator as Faker;

$factory->define(TabEspA::class, function (Faker $faker) {

    return [
        'tbe_fonecode' => $faker->word,
        'tbe_descricao' => $faker->word,
        'tbe_tipo' => $faker->word,
        'tbe_valor' => $faker->randomDigitNotNull,
        'tbe_vlr_feriado' => $faker->randomDigitNotNull,
        'tbe_vlr_domingo' => $faker->randomDigitNotNull,
        'tbe_hrini_ss' => $faker->word,
        'tbe_hrfim_ss' => $faker->word,
        'tbe_vlr_ss' => $faker->randomDigitNotNull,
        'tbe_hrini_sabado' => $faker->word,
        'tbe_hrfim_sabado' => $faker->word,
        'tbe_vlr_sabado' => $faker->randomDigitNotNull
    ];
});
