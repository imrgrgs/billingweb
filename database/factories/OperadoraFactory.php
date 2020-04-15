<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Operadora;
use Faker\Generator as Faker;

$factory->define(Operadora::class, function (Faker $faker) {

    return [
        'opr_id' => $faker->randomDigitNotNull,
        'opr_nome' => $faker->word
    ];
});
