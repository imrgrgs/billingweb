<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AgentexUser;
use Faker\Generator as Faker;

$factory->define(AgentexUser::class, function (Faker $faker) {

    return [
        'agu_users_id' => $faker->randomDigitNotNull,
        'agu_data' => $faker->word
    ];
});
