<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FonesAnatel;
use Faker\Generator as Faker;

$factory->define(FonesAnatel::class, function (Faker $faker) {

    return [
        'anal_sigla_uf' => $faker->word,
        'anal_sigla_cnl' => $faker->word,
        'anal_codigo_cnl' => $faker->word,
        'anal_localidade' => $faker->word,
        'anal_municipio' => $faker->word,
        'anal_codigo_area' => $faker->word,
        'anal_prefixo' => $faker->word,
        'anal_prestadora' => $faker->word,
        'anal_faixa_ini' => $faker->word,
        'anal_faixa_fim' => $faker->word,
        'anal_latitude' => $faker->word,
        'anal_hemisferio' => $faker->word,
        'anal_longitude' => $faker->word,
        'anal_sigla_cnl_local' => $faker->word
    ];
});
