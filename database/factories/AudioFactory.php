<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Audio;
use Faker\Generator as Faker;

$factory->define(Audio::class, function (Faker $faker) {

    return [
        'aud_data' => $faker->word,
        'aud_hora' => $faker->word,
        'aud_assinante' => $faker->word,
        'aud_destino' => $faker->word,
        'aud_tempo' => $faker->randomDigitNotNull,
        'aud_arquivo' => $faker->word
    ];
});
