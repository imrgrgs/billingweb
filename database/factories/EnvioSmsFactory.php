<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\EnvioSms;
use Faker\Generator as Faker;

$factory->define(EnvioSms::class, function (Faker $faker) {

    return [
        'esms_data' => $faker->date('Y-m-d H:i:s'),
        'esms_valor' => $faker->randomDigitNotNull,
        'esms_valor_rev' => $faker->randomDigitNotNull,
        'esms_valor_ass' => $faker->randomDigitNotNull,
        'esms_status' => $faker->word,
        'esms_assinante' => $faker->word,
        'esms_fone_destino' => $faker->word,
        'esms_mensagem' => $faker->text,
        'esms_fornecedor_id' => $faker->randomDigitNotNull,
        'esms_representante_id' => $faker->randomDigitNotNull
    ];
});
