<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ataque;
use Faker\Generator as Faker;

$factory->define(Ataque::class, function (Faker $faker) {

    return [
        'ata_data' => $faker->word,
        'ata_hora' => $faker->word,
        'ata_login' => $faker->word,
        'ata_ip' => $faker->word,
        'ata_temp' => $faker->word
    ];
});
