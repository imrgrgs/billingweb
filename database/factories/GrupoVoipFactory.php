<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\GrupoVoip;
use Faker\Generator as Faker;

$factory->define(GrupoVoip::class, function (Faker $faker) {

    return [
        'grv_nome' => $faker->word,
        'grv_estrategia' => $faker->word,
        'grv_representante_id' => $faker->randomDigitNotNull,
        'grv_fornecedor_id' => $faker->randomDigitNotNull,
        'grv_musica_espera' => $faker->word,
        'grv_alias_grupo' => $faker->randomDigitNotNull,
        'grv_assinante_id' => $faker->randomDigitNotNull
    ];
});
