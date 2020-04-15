<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Terminacao;
use Faker\Generator as Faker;

$factory->define(Terminacao::class, function (Faker $faker) {

    return [
        'pst_nome' => $faker->word,
        'pst_apelido' => $faker->word,
        'pst_extension' => $faker->word,
        'pst_fornecedor_id' => $faker->randomDigitNotNull,
        'pst_del_prefix' => $faker->randomDigitNotNull,
        'pst_channel' => $faker->word,
        'pst_status' => $faker->word,
        'pst_celular' => $faker->word,
        'pst_fixo' => $faker->word,
        'pst_saldo' => $faker->randomDigitNotNull,
        'pst_atualizado' => $faker->word,
        'pst_vlrfixo' => $faker->randomDigitNotNull,
        'pst_vlrcelular' => $faker->randomDigitNotNull,
        'pst_tp_tarifacao' => $faker->word,
        'pst_obs' => $faker->text,
        'pst_login' => $faker->word,
        'pst_senha' => $faker->word,
        'pst_ip_proxy' => $faker->word,
        'pst_reinvite' => $faker->word,
        'pst_ringfalso' => $faker->word,
        'pst_nomeficticio' => $faker->word,
        'pst_formacobranca' => $faker->word,
        'pst_finalidade' => $faker->word,
        'pst_participa_mcusto' => $faker->word,
        'pst_id_terminador' => $faker->word,
        'pst_sgs_comecar_cobrar' => $faker->randomDigitNotNull,
        'pst_sgs_comecar_cobrar_celular' => $faker->randomDigitNotNull,
        'pst_rota_automatica' => $faker->word,
        'pst_custoemdolar' => $faker->word,
        'pst_limite_maximo' => $faker->randomDigitNotNull,
        'pst_consumido' => $faker->randomDigitNotNull,
        'pst_qtde_utilizada' => $faker->randomDigitNotNull,
        'pst_configuracao' => $faker->text,
        'pst_fazerregister' => $faker->word,
        'pst_jaincluido' => $faker->word,
        'pst_codec1' => $faker->word,
        'pst_codec2' => $faker->word,
        'pst_codec3' => $faker->word,
        'pst_codec4' => $faker->word,
        'pst_codec5' => $faker->word,
        'pst_porta' => $faker->word,
        'pst_digitos_eliminar' => $faker->randomDigitNotNull,
        'pst_caracteres_incluir' => $faker->word,
        'pst_tech_prefix' => $faker->word,
        'pst_qtde_simultaneas' => $faker->randomDigitNotNull,
        'pst_codigo_operadora' => $faker->randomDigitNotNull,
        'pst_complemento_callerid' => $faker->word
    ];
});
