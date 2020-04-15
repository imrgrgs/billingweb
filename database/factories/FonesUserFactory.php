<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FonesUser;
use Faker\Generator as Faker;

$factory->define(FonesUser::class, function (Faker $faker) {

    return [
        'fne_telefone' => $faker->word,
        'fne_user_id' => $faker->randomDigitNotNull,
        'retornar_callingcard' => $faker->word
    ];
});
