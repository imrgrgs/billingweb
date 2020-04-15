<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contrato;
use Faker\Generator as Faker;

$factory->define(Contrato::class, function (Faker $faker) {

    return [
        'cnt_id' => $faker->randomDigitNotNull,
        'cnt_contrato' => $faker->text
    ];
});
