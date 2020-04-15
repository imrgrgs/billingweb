<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\SipBuddie;
use Faker\Generator as Faker;

$factory->define(SipBuddie::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'accountcode' => $faker->word,
        'amaflags' => $faker->word,
        'callgroup' => $faker->word,
        'callerid' => $faker->word,
        'canreinvite' => $faker->word,
        'context' => $faker->word,
        'defaultip' => $faker->word,
        'dtmfmode' => $faker->word,
        'fromuser' => $faker->word,
        'fromdomain' => $faker->word,
        'host' => $faker->word,
        'insecure' => $faker->word,
        'language' => $faker->word,
        'mailbox' => $faker->word,
        'md5secret' => $faker->word,
        'nat' => $faker->word,
        'deny' => $faker->word,
        'permit' => $faker->word,
        'mask' => $faker->word,
        'pickupgroup' => $faker->word,
        'port' => $faker->word,
        'qualify' => $faker->word,
        'restrictcid' => $faker->word,
        'rtptimeout' => $faker->word,
        'rtpholdtimeout' => $faker->word,
        'secret' => $faker->word,
        'type' => $faker->word,
        'username' => $faker->word,
        'disallow' => $faker->word,
        'allow' => $faker->word,
        'musiconhold' => $faker->word,
        'regseconds' => $faker->randomDigitNotNull,
        'ipaddr' => $faker->word,
        'regexten' => $faker->word,
        'cancallforward' => $faker->word
    ];
});
