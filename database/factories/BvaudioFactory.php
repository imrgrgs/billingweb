<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Bvaudio;
use Faker\Generator as Faker;

$factory->define(Bvaudio::class, function (Faker $faker) {

    return [
        'originalName' => $faker->word,
        'size' => $faker->randomDigitNotNull,
        'time' => $faker->word,
        'generatedName' => $faker->word,
        'generatedPath' => $faker->word,
        'gsmName' => $faker->word,
        'gsmPath' => $faker->word,
        'forId' => $faker->randomDigitNotNull,
        'repId' => $faker->randomDigitNotNull,
        'usrId' => $faker->randomDigitNotNull,
        'dateCreated' => $faker->date('Y-m-d H:i:s')
    ];
});
