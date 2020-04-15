<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PublicidadeParam;
use Faker\Generator as Faker;

$factory->define(PublicidadeParam::class, function (Faker $faker) {

    return [
        'ppm_id' => $faker->randomDigitNotNull,
        'ppm_qtd_simult_noite' => $faker->randomDigitNotNull,
        'ppm_qtd_simult_dia' => $faker->randomDigitNotNull
    ];
});
