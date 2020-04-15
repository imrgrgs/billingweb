<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Relacao;
use Faker\Generator as Faker;

$factory->define(Relacao::class, function (Faker $faker) {

    return [
        'rel_username' => $faker->word,
        'rel_username_amigo' => $faker->word
    ];
});
