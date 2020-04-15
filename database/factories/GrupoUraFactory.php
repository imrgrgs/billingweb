<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\GrupoUra;
use Faker\Generator as Faker;

$factory->define(GrupoUra::class, function (Faker $faker) {

    return [
        'gru_nome' => $faker->word,
        'gru_representante_id' => $faker->randomDigitNotNull,
        'gru_musica_espera' => $faker->word,
        'gru_arquivo_ura' => $faker->word,
        'gru_assinante_id' => $faker->randomDigitNotNull
    ];
});
