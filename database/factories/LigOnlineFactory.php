<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\LigOnline;
use Faker\Generator as Faker;

$factory->define(LigOnline::class, function (Faker $faker) {

    return [
        'onl_fornecedor_id' => $faker->randomDigitNotNull,
        'onl_representante_id' => $faker->randomDigitNotNull,
        'onl_agente_id' => $faker->randomDigitNotNull,
        'onl_assinante_id' => $faker->randomDigitNotNull,
        'onl_username' => $faker->word,
        'onl_tempo' => $faker->word,
        'onl_destino' => $faker->word,
        'onl_status' => $faker->word,
        'onl_nome' => $faker->word,
        'onl_terminacao_id' => $faker->randomDigitNotNull,
        'onl_channel_origem' => $faker->word,
        'onl_channel_destino' => $faker->word,
        'onl_cabine_id' => $faker->randomDigitNotNull,
        'onl_nro_origem' => $faker->word,
        'onl_callingcard' => $faker->word,
        'onl_ip_servidor' => $faker->word
    ];
});
