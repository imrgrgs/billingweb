<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Credito;
use Faker\Generator as Faker;

$factory->define(Credito::class, function (Faker $faker) {

    return [
        'crd_saldo' => $faker->randomDigitNotNull
    ];
});
