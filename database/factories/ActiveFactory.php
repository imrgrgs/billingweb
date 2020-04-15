<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Active;
use Faker\Generator as Faker;

$factory->define(Active::class, function (Faker $faker) {

    return [
        'act_origem' => $faker->word,
        'act_destino' => $faker->word,
        'act_usuario' => $faker->word,
        'act_contexto' => $faker->word
    ];
});
