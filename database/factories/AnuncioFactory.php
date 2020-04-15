<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Anuncio;
use Faker\Generator as Faker;

$factory->define(Anuncio::class, function (Faker $faker) {

    return [
        'anu_descricao' => $faker->word,
        'anu_status' => $faker->word,
        'anu_gingle_wav' => $faker->word,
        'anu_endereco_gingle' => $faker->word,
        'anu_qtde_tocar' => $faker->randomDigitNotNull,
        'anu_qtde_tocado' => $faker->randomDigitNotNull,
        'anu_data_tocado' => $faker->word,
        'anu_hora_tocado' => $faker->word,
        'anu_representante_id' => $faker->randomDigitNotNull,
        'anu_fornecedor_id' => $faker->randomDigitNotNull
    ];
});
