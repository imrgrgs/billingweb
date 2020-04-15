<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CprasTermin;
use Faker\Generator as Faker;

$factory->define(CprasTermin::class, function (Faker $faker) {

    return [
        'cpr_data' => $faker->word,
        'cpr_hora' => $faker->word,
        'cpr_historico' => $faker->word,
        'cpr_valor' => $faker->randomDigitNotNull,
        'cpr_operacao' => $faker->word,
        'cpr_terminacao_id' => $faker->randomDigitNotNull,
        'cpr_fornecedor_id' => $faker->randomDigitNotNull
    ];
});
