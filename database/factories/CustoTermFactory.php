<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CustoTerm;
use Faker\Generator as Faker;

$factory->define(CustoTerm::class, function (Faker $faker) {

    return [
        'ctt_fonecode' => $faker->word,
        'ctt_descricao' => $faker->word,
        'ctt_valor' => $faker->randomDigitNotNull
    ];
});
