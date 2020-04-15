<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\VoipToVoip;
use Faker\Generator as Faker;

$factory->define(VoipToVoip::class, function (Faker $faker) {

    return [
        'vtov_origem' => $faker->word,
        'vtov_destino' => $faker->word,
        'vtov_representante_id' => $faker->randomDigitNotNull,
        'vtov_fornecedor_id' => $faker->randomDigitNotNull
    ];
});
