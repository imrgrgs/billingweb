<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\GrupoVoipRamal;
use Faker\Generator as Faker;

$factory->define(GrupoVoipRamal::class, function (Faker $faker) {

    return [
        'grv_id' => $faker->randomDigitNotNull,
        'user_id' => $faker->randomDigitNotNull
    ];
});
