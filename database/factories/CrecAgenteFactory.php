<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CrecAgente;
use Faker\Generator as Faker;

$factory->define(CrecAgente::class, function (Faker $faker) {

    return [
        'rrv_nrodoc' => $faker->word,
        'rrv_cliente_id' => $faker->randomDigitNotNull,
        'rrv_dtvencto' => $faker->word,
        'rrv_valor' => $faker->randomDigitNotNull,
        'rrv_nrparcela' => $faker->word,
        'rrv_historico' => $faker->text,
        'rrv_dtpagto' => $faker->word,
        'rrv_desconto' => $faker->randomDigitNotNull,
        'rrv_acrescimo' => $faker->randomDigitNotNull,
        'rrv_dtreprogramada' => $faker->word,
        'rrv_status' => $faker->word,
        'rrv_forma' => $faker->word,
        'rrv_nrdocpgto' => $faker->word,
        'rrv_planocontas_id' => $faker->randomDigitNotNull,
        'rrv_bancos_id' => $faker->randomDigitNotNull,
        'rrv_previsao' => $faker->word,
        'rrv_empresa_id' => $faker->randomDigitNotNull,
        'rrv_nossonumero' => $faker->word,
        'rrv_dtemissao' => $faker->word,
        'rrv_dtefetivacao' => $faker->word
    ];
});
