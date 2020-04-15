<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FaxVirtual;
use Faker\Generator as Faker;

$factory->define(FaxVirtual::class, function (Faker $faker) {

    return [
        'fax_descricao' => $faker->word,
        'fax_status' => $faker->word,
        'fax_documento' => $faker->word,
        'fax_data_ini' => $faker->word,
        'fax_hora_ini' => $faker->word,
        'fax_terminacao_id' => $faker->randomDigitNotNull,
        'fax_fornecedor_id' => $faker->randomDigitNotNull,
        'fax_representante_id' => $faker->randomDigitNotNull,
        'fax_login' => $faker->word
    ];
});
