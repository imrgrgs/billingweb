<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ExtensionTable;
use Faker\Generator as Faker;

$factory->define(ExtensionTable::class, function (Faker $faker) {

    return [
        'context' => $faker->word,
        'exten' => $faker->word,
        'priority' => $faker->word,
        'app' => $faker->word,
        'appdata' => $faker->word
    ];
});
