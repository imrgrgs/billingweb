<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CadFeriado;
use Faker\Generator as Faker;

$factory->define(CadFeriado::class, function (Faker $faker) {

    return [
        'fer_data' => $faker->word
    ];
});
