<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Firewall;
use Faker\Generator as Faker;

$factory->define(Firewall::class, function (Faker $faker) {

    return [
        'frw_id' => $faker->randomDigitNotNull,
        'frw_status' => $faker->word,
        'frw_data' => $faker->date('Y-m-d H:i:s'),
        'frw_motivo' => $faker->text
    ];
});
