<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Agente;
use Faker\Generator as Faker;

$factory->define(Agente::class, function (Faker $faker) {

    return [
        'age_nome' => $faker->word,
        'age_login' => $faker->word,
        'age_senha' => $faker->word,
        'age_comissao' => $faker->randomDigitNotNull,
        'age_endereco' => $faker->word,
        'age_bairro' => $faker->word,
        'age_cidade' => $faker->word,
        'age_estado' => $faker->word,
        'age_cep' => $faker->randomDigitNotNull,
        'age_email' => $faker->word,
        'age_status' => $faker->word,
        'age_data' => $faker->word,
        'age_telefone1' => $faker->word,
        'age_telefone2' => $faker->word,
        'age_celular' => $faker->word,
        'age_mudasenha' => $faker->word,
        'age_representante_id' => $faker->randomDigitNotNull,
        'age_linguagem' => $faker->word,
        'age_incluir_users' => $faker->word,
        'age_alterar_users' => $faker->word,
        'age_acesso_cabines' => $faker->word,
        'age_acesso_creditos' => $faker->word,
        'age_tabelaespecial_id' => $faker->randomDigitNotNull,
        'age_percacrescimo' => $faker->randomDigitNotNull,
        'age_saldoreal' => $faker->randomDigitNotNull,
        'age_atualizado' => $faker->word,
        'age_tptarifacao' => $faker->word,
        'age_com_ident_nome' => $faker->word,
        'age_ligacoes_emcurso' => $faker->word,
        'age_liberar_inicializar' => $faker->word,
        'age_controle_lastro' => $faker->word,
        'age_qtde_colunas' => $faker->word,
        'age_como_revenda' => $faker->word
    ];
});
