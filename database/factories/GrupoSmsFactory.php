<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\GrupoSms;
use Faker\Generator as Faker;

$factory->define(GrupoSms::class, function (Faker $faker) {

    return [
        'gsms_nome' => $faker->word,
        'gsms_fornecedor_id' => $faker->randomDigitNotNull,
        'gsms_representante_id' => $faker->randomDigitNotNull,
        'gsms_assinante_id' => $faker->randomDigitNotNull
    ];
});
