<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CelularSms;
use Faker\Generator as Faker;

$factory->define(CelularSms::class, function (Faker $faker) {

    return [
        'csms_num_cell' => $faker->word,
        'csms_nome' => $faker->word,
        'csms_grupo_id' => $faker->randomDigitNotNull,
        'csms_fornecedor_id' => $faker->randomDigitNotNull,
        'csms_representante_id' => $faker->randomDigitNotNull,
        'csms_assinante_id' => $faker->randomDigitNotNull
    ];
});
