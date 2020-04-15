<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Plano;
use Faker\Generator as Faker;

$factory->define(Plano::class, function (Faker $faker) {

    return [
        'pln_descricao' => $faker->word,
        'pln_adesao' => $faker->randomDigitNotNull,
        'pln_mensalidade' => $faker->randomDigitNotNull,
        'pln_limite_fixo' => $faker->randomDigitNotNull,
        'pln_limite_celular' => $faker->randomDigitNotNull,
        'pln_status' => $faker->word,
        'pln_detalhes' => $faker->text,
        'pln_geral' => $faker->text,
        'pln_imagem1' => $faker->word,
        'pln_imagem2' => $faker->word,
        'pln_imagem3' => $faker->word,
        'pln_extensao1' => $faker->word,
        'pln_extensao2' => $faker->word,
        'pln_extensao3' => $faker->word,
        'pln_vlrfixo_excedente' => $faker->randomDigitNotNull,
        'pln_vlrcel_excedente' => $faker->randomDigitNotNull,
        'pln_representante_id' => $faker->randomDigitNotNull,
        'pln_sem_limites' => $faker->word,
        'pln_bloquear_atingiu_franquia' => $faker->word,
        'pln_tabespecial_id' => $faker->randomDigitNotNull
    ];
});
