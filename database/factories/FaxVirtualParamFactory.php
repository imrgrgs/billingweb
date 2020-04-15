<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FaxVirtualParam;
use Faker\Generator as Faker;

$factory->define(FaxVirtualParam::class, function (Faker $faker) {

    return [
        'pfv_id' => $faker->randomDigitNotNull,
        'pfv_qtd_simult_noite' => $faker->randomDigitNotNull,
        'pfv_qtd_simult_dia' => $faker->randomDigitNotNull
    ];
});
