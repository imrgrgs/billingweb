<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cdr;
use Faker\Generator as Faker;

$factory->define(Cdr::class, function (Faker $faker) {

    return [
        'calldate' => $faker->date('Y-m-d H:i:s'),
        'clid' => $faker->word,
        'src' => $faker->word,
        'dst' => $faker->word,
        'dcontext' => $faker->word,
        'channel' => $faker->word,
        'dstchannel' => $faker->word,
        'lastapp' => $faker->word,
        'lastdata' => $faker->word,
        'start' => $faker->date('Y-m-d H:i:s'),
        'answer' => $faker->date('Y-m-d H:i:s'),
        'end' => $faker->date('Y-m-d H:i:s'),
        'duration' => $faker->randomDigitNotNull,
        'billsec' => $faker->randomDigitNotNull,
        'disposition' => $faker->word,
        'amaflags' => $faker->randomDigitNotNull,
        'accountcode' => $faker->word,
        'uniqueid' => $faker->word
    ];
});
