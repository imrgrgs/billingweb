<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Crececeber;
use Faker\Generator as Faker;

$factory->define(Crececeber::class, function (Faker $faker) {

    return [
        'rec_nrodoc' => $faker->word,
        'rec_cliente_id' => $faker->randomDigitNotNull,
        'rec_dtvencto' => $faker->word,
        'rec_valor' => $faker->randomDigitNotNull,
        'rec_nrparcela' => $faker->word,
        'rec_historico' => $faker->text,
        'rec_dtpagto' => $faker->word,
        'rec_desconto' => $faker->randomDigitNotNull,
        'rec_acrescimo' => $faker->randomDigitNotNull,
        'rec_dtreprogramada' => $faker->word,
        'rec_status' => $faker->word,
        'rec_forma' => $faker->word,
        'rec_nrdocpgto' => $faker->word,
        'rec_planocontas_id' => $faker->randomDigitNotNull,
        'rec_bancos_id' => $faker->randomDigitNotNull,
        'rec_previsao' => $faker->word,
        'rec_empresa_id' => $faker->randomDigitNotNull,
        'rec_nossonumero' => $faker->word,
        'rec_dtemissao' => $faker->word,
        'rec_dtefetivacao' => $faker->word
    ];
});
