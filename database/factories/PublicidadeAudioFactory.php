<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PublicidadeAudio;
use Faker\Generator as Faker;

$factory->define(PublicidadeAudio::class, function (Faker $faker) {

    return [
        'pub_id' => $faker->randomDigitNotNull,
        'pbaud_seq' => $faker->randomDigitNotNull,
        'pbaud_descricao' => $faker->word,
        'pbaud_status' => $faker->word,
        'pbaud_gingle_wav' => $faker->word,
        'pbaud_tempo_gingle' => $faker->randomDigitNotNull,
        'pbaud_checar_satisfacao' => $faker->word,
        'pbaud_desvio_tipo' => $faker->word,
        'pbaud_desvio_chamar' => $faker->randomDigitNotNull
    ];
});
