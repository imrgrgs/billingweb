<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pin;
use Faker\Generator as Faker;

$factory->define(Pin::class, function (Faker $faker) {

    return [
        'pin_number' => $faker->randomDigitNotNull,
        'pin_plataforma' => $faker->word,
        'pin_user_id' => $faker->randomDigitNotNull
    ];
});
