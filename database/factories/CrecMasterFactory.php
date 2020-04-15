<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CrecMaster;
use Faker\Generator as Faker;

$factory->define(CrecMaster::class, function (Faker $faker) {

    return [
        'ram_nrodoc' => $faker->word,
        'ram_cliente_id' => $faker->randomDigitNotNull,
        'ram_dtvencto' => $faker->word,
        'ram_valor' => $faker->randomDigitNotNull,
        'ram_nrparcela' => $faker->word,
        'ram_historico' => $faker->text,
        'ram_dtpagto' => $faker->word,
        'ram_desconto' => $faker->randomDigitNotNull,
        'ram_acrescimo' => $faker->randomDigitNotNull,
        'ram_dtreprogramada' => $faker->word,
        'ram_status' => $faker->word,
        'ram_forma' => $faker->word,
        'ram_nrdocpgto' => $faker->word,
        'ram_planocontas_id' => $faker->randomDigitNotNull,
        'ram_bancos_id' => $faker->randomDigitNotNull,
        'ram_previsao' => $faker->word,
        'ram_empresa_id' => $faker->randomDigitNotNull,
        'ram_nossonumero' => $faker->word,
        'ram_dtemissao' => $faker->word,
        'ram_dtefetivacao' => $faker->word
    ];
});
