<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\GrupoUraDesvio;
use Faker\Generator as Faker;

$factory->define(GrupoUraDesvio::class, function (Faker $faker) {

    return [
        'gru_id' => $faker->randomDigitNotNull,
        'grudesvio_digito' => $faker->word,
        'grudesvio_nome' => $faker->word,
        'grudesvio_tipo' => $faker->word,
        'grudesvio_chamar' => $faker->randomDigitNotNull
    ];
});
