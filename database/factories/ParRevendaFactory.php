<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ParRevenda;
use Faker\Generator as Faker;

$factory->define(ParRevenda::class, function (Faker $faker) {

    return [
        'prv_representante_id' => $faker->randomDigitNotNull,
        'prv_reais_inclusao' => $faker->randomDigitNotNull,
        'prv_perc_acrescimo' => $faker->randomDigitNotNull,
        'prv_emitir_boleto' => $faker->word,
        'prv_vlr_avisar' => $faker->randomDigitNotNull,
        'prv_reais_gratis' => $faker->randomDigitNotNull,
        'prv_avisar_pospagos' => $faker->word,
        'prv_dias_creditos_vencem' => $faker->randomDigitNotNull,
        'prv_tempo_ligacao' => $faker->randomDigitNotNull,
        'prv_linkassinantesonline' => $faker->word,
        'prv_tocar_anuncios' => $faker->word,
        'prv_brpay' => $faker->word,
        'prv_webcallback' => $faker->word,
        'prv_obriga_documento' => $faker->word,
        'prv_tempo_ligacao_cel' => $faker->randomDigitNotNull,
        'prv_taxa_conexao' => $faker->randomDigitNotNull,
        'prv_taxa_desconexao' => $faker->randomDigitNotNull,
        'prv_assinante_incluir_ass' => $faker->word,
        'prv_perc_assin_inclui_ass' => $faker->randomDigitNotNull,
        'prv_transf_creditos' => $faker->word
    ];
});
