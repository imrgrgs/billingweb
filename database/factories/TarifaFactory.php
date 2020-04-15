<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tarifa;
use Faker\Generator as Faker;

$factory->define(Tarifa::class, function (Faker $faker) {

    return [
        'tar_grupo_id' => $faker->randomDigitNotNull,
        'tar_fonecode' => $faker->word,
        'tar_valor1' => $faker->randomDigitNotNull,
        'tar_valor2' => $faker->randomDigitNotNull,
        'tar_valor3' => $faker->randomDigitNotNull,
        'tar_valor4' => $faker->randomDigitNotNull,
        'tar_valor5' => $faker->randomDigitNotNull,
        'tar_fornecedor_id' => $faker->randomDigitNotNull,
        'tar_valor_diferenciado' => $faker->randomDigitNotNull,
        'tar_terminacao_id' => $faker->randomDigitNotNull,
        'tar_tipo' => $faker->word,
        'tar_fazpartefixado' => $faker->word,
        'tar_terminacao2_id' => $faker->randomDigitNotNull,
        'tar_terminacao3_id' => $faker->randomDigitNotNull,
        'tar_master' => $faker->word,
        'tar_descricao' => $faker->word,
        'tar_terminacao_fax' => $faker->randomDigitNotNull
    ];
});
