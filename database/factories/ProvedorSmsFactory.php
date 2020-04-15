<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProvedorSms;
use Faker\Generator as Faker;

$factory->define(ProvedorSms::class, function (Faker $faker) {

    return [
        'psms_nome' => $faker->word,
        'psms_login' => $faker->word,
        'psms_senha' => $faker->word,
        'psms_string' => $faker->word,
        'psms_disponivel' => $faker->word,
        'psms_saldo' => $faker->randomDigitNotNull,
        'psms_vlrsms' => $faker->randomDigitNotNull,
        'psms_fornecedor_id' => $faker->randomDigitNotNull
    ];
});
