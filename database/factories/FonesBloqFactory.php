<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FonesBloq;
use Faker\Generator as Faker;

$factory->define(FonesBloq::class, function (Faker $faker) {

    return [
        'blq_user_id' => $faker->randomDigitNotNull
    ];
});
