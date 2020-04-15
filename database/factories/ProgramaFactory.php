<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Programa;
use Faker\Generator as Faker;

$factory->define(Programa::class, function (Faker $faker) {

    return [
        'prg_codigo' => $faker->word,
        'prg_descricao' => $faker->word,
        'prg_menu' => $faker->word
    ];
});
