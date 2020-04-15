<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FonesRestricao;
use Faker\Generator as Faker;

$factory->define(FonesRestricao::class, function (Faker $faker) {

    return [
        'fonesrestricao_user_id' => $faker->randomDigitNotNull,
        'fonesrestricao_telefone' => $faker->word
    ];
});
