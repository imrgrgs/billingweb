<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TabRevenda;
use Faker\Generator as Faker;

$factory->define(TabRevenda::class, function (Faker $faker) {

    return [
        'tab_codigo' => $faker->word,
        'tab_descricao' => $faker->word
    ];
});
