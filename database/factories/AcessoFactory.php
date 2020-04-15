<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Acesso;
use Faker\Generator as Faker;

$factory->define(Acesso::class, function (Faker $faker) {

    return [
        'ace_data' => $faker->word,
        'ace_hora' => $faker->word,
        'ace_ip' => $faker->word,
        'ace_login' => $faker->word,
        'ace_senha' => $faker->word,
        'ace_sucesso' => $faker->word
    ];
});
