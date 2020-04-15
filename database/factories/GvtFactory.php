<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Gvt;
use Faker\Generator as Faker;

$factory->define(Gvt::class, function (Faker $faker) {

    return [
        'gvt_user' => $faker->word,
        'gvt_pass' => $faker->word,
        'gvt_url' => $faker->word,
        'gvt_porta' => $faker->word,
        'gvt_user_fsol' => $faker->word,
        'gvt_status' => $faker->word,
        'gvt_fornecedor_id' => $faker->randomDigitNotNull,
        'gvt_numfone' => $faker->word,
        'gvt_aplicacao' => $faker->word,
        'gvt_vlr_callingcard' => $faker->randomDigitNotNull,
        'gvt_tp_tarifacao' => $faker->word,
        'gvt_fazer_registro' => $faker->word,
        'gvt_vlr_conexao_fixo' => $faker->randomDigitNotNull,
        'gvt_vlr_conexao_celular' => $faker->randomDigitNotNull,
        'gvt_vlr_callingcard_cel' => $faker->randomDigitNotNull,
        'gvt_identificador_via_uri' => $faker->word,
        'gvt_arq_audio' => $faker->word,
        'gvt_lig_gratuita' => $faker->word,
        'gvt_tmp_maximo_gratuita' => $faker->randomDigitNotNull,
        'gvt_codec1' => $faker->word,
        'gvt_codec2' => $faker->word,
        'gvt_codec3' => $faker->word,
        'gvt_codec4' => $faker->word,
        'gvt_codec5' => $faker->word,
        'pode_transferir' => $faker->word,
        'gvt_representante_id' => $faker->randomDigitNotNull,
        'gvt_tabprecos_id' => $faker->randomDigitNotNull,
        'gvt_vlr_fx_revenda' => $faker->randomDigitNotNull,
        'gvt_vlr_cel_revenda' => $faker->randomDigitNotNull,
        'gvt_recebe_de' => $faker->randomDigitNotNull,
        'gvt_lista_negra' => $faker->randomDigitNotNull,
        'gvt_tipo_atendimento' => $faker->randomDigitNotNull,
        'gvt_telegram_token' => $faker->word
    ];
});
