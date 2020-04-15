<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Adesao;
use Faker\Generator as Faker;

$factory->define(Adesao::class, function (Faker $faker) {

    return [
        'ads_assinante_id' => $faker->randomDigitNotNull,
        'ads_plano_id' => $faker->randomDigitNotNull,
        'ads_data_contrato' => $faker->word,
        'ads_franquia' => $faker->randomDigitNotNull,
        'ads_data_teto' => $faker->word,
        'ads_minutos_utilizadas' => $faker->randomDigitNotNull,
        'ads_status' => $faker->word,
        'ads_nossonumero' => $faker->word
    ];
});
