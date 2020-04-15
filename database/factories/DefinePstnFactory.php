<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\DefinePstn;
use Faker\Generator as Faker;

$factory->define(DefinePstn::class, function (Faker $faker) {

    return [
        'def_fornecedor_id' => $faker->randomDigitNotNull,
        'def_representante_id' => $faker->randomDigitNotNull,
        'def_assinante_id' => $faker->randomDigitNotNull,
        'def_pais' => $faker->word,
        'def_tipo' => $faker->word,
        'def_ddiddd_ini' => $faker->word,
        'def_ddiddd_fim' => $faker->word,
        'def_terminacao1_id' => $faker->randomDigitNotNull,
        'def_terminacao2_id' => $faker->randomDigitNotNull,
        'def_terminacao3_id' => $faker->randomDigitNotNull,
        'def_terminacao4_id' => $faker->randomDigitNotNull
    ];
});
