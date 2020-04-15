<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Server;
use Faker\Generator as Faker;

$factory->define(Server::class, function (Faker $faker) {

    return [
        'ip_number' => $faker->word,
        'type_access' => $faker->word,
        'alias' => $faker->word,
        'ssh_user_access' => $faker->word,
        'ssh_password_access' => $faker->word,
        'ssh_port' => $faker->word,
        'admin_id' => $faker->randomDigitNotNull,
        'name' => $faker->word,
        'description' => $faker->text,
        'date_created' => $faker->date('Y-m-d H:i:s'),
        'date_updated' => $faker->date('Y-m-d H:i:s'),
        'status' => $faker->word
    ];
});
