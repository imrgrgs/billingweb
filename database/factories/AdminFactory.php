<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {

    return [
        'adm_razao' => $faker->word,
        'adm_cnpj' => $faker->word,
        'adm_inscrest' => $faker->word,
        'adm_fantasia' => $faker->word,
        'adm_rua' => $faker->word,
        'adm_complem' => $faker->word,
        'adm_bairro' => $faker->word,
        'adm_cidade' => $faker->word,
        'adm_estado' => $faker->word,
        'adm_cep' => $faker->randomDigitNotNull,
        'adm_email' => $faker->word,
        'adm_banco' => $faker->randomDigitNotNull,
        'adm_agencia' => $faker->word,
        'adm_conta' => $faker->word,
        'adm_saldo' => $faker->randomDigitNotNull,
        'adm_login' => $faker->word,
        'adm_senha' => $faker->word,
        'adm_mudasenha' => $faker->word,
        'adm_telefone1' => $faker->word,
        'adm_telefone2' => $faker->word,
        'adm_celular' => $faker->word,
        'adm_data' => $faker->word,
        'adm_contato' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
