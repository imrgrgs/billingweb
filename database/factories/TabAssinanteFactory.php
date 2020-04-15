<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TabAssinante;
use Faker\Generator as Faker;

$factory->define(TabAssinante::class, function (Faker $faker) {

    return [
        'tab_codigo' => $faker->word,
        'tab_descricao' => $faker->word,
        'tab_agente_id' => $faker->randomDigitNotNull
    ];
});
