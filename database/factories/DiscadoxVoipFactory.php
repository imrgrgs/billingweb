<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\DiscadoxVoip;
use Faker\Generator as Faker;

$factory->define(DiscadoxVoip::class, function (Faker $faker) {

    return [
        'dis_numerodiscado' => $faker->word,
        'dis_login_voip' => $faker->word,
        'dis_representante_id' => $faker->randomDigitNotNull,
        'dis_fornecedor_id' => $faker->randomDigitNotNull
    ];
});
