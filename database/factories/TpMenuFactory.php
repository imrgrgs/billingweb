<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TpMenu;
use Faker\Generator as Faker;

$factory->define(TpMenu::class, function (Faker $faker) {

    return [
        'tip_descricao' => $faker->word,
        'tip_menu' => $faker->word,
        'tip_fornecedor_id' => $faker->randomDigitNotNull,
        'tip_representante_id' => $faker->randomDigitNotNull,
        'tip_agente_id' => $faker->randomDigitNotNull,
        'tip_permissao' => $faker->text
    ];
});
