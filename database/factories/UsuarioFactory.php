<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {

    return [
        'usr_fornecedor_id' => $faker->randomDigitNotNull,
        'usr_representante_id' => $faker->randomDigitNotNull,
        'usr_agente_id' => $faker->randomDigitNotNull,
        'usr_login' => $faker->word,
        'usr_senha' => $faker->word,
        'usr_status' => $faker->word,
        'usr_permissao' => $faker->text,
        'usr_linguagem' => $faker->word,
        'usr_nome' => $faker->word,
        'usr_tpmenu_id' => $faker->randomDigitNotNull,
        'usr_admin_id' => $faker->randomDigitNotNull,
        'usr_assinante_id' => $faker->word,
        'usr_foto' => $faker->word,
        'usr_email' => $faker->word,
        'usr_fone' => $faker->word
    ];
});
