<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TabEsp;
use Faker\Generator as Faker;

$factory->define(TabEsp::class, function (Faker $faker) {

    return [
        'tbe_fonecode' => $faker->word,
        'tbe_descricao' => $faker->word,
        'tbe_tipo' => $faker->word,
        'tbe_valor' => $faker->randomDigitNotNull
    ];
});
