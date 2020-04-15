<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Publicidade;
use Faker\Generator as Faker;

$factory->define(Publicidade::class, function (Faker $faker) {

    return [
        'pub_descricao' => $faker->word,
        'pub_status' => $faker->word,
        'pub_gingle_wav' => $faker->word,
        'pub_endereco_gingle' => $faker->word,
        'pub_gingle_wav2' => $faker->word,
        'pub_endereco_gingle2' => $faker->word,
        'pub_tempo_gingle' => $faker->randomDigitNotNull,
        'pub_data_ini' => $faker->word,
        'pub_hora_ini' => $faker->word,
        'pub_terminacao_id' => $faker->randomDigitNotNull,
        'pub_fornecedor_id' => $faker->randomDigitNotNull,
        'pub_login' => $faker->word,
        'pub_maxretries' => $faker->randomDigitNotNull,
        'pub_retrytime' => $faker->randomDigitNotNull,
        'pub_waittime' => $faker->randomDigitNotNull,
        'pub_reinclusao_automatica' => $faker->randomDigitNotNull,
        'pub_representante_id' => $faker->randomDigitNotNull,
        'pub_checar_satisfacao' => $faker->word,
        'pub_hora_parar' => $faker->word,
        'pub_qtd_simult_noite' => $faker->randomDigitNotNull,
        'pub_qtd_simult_dia' => $faker->randomDigitNotNull,
        'pub_data_encerrar' => $faker->word,
        'pub_bloqueia_procon' => $faker->word,
        'pub_initial_silence' => $faker->randomDigitNotNull,
        'pub_greeting' => $faker->randomDigitNotNull,
        'pub_after_greeting_silence' => $faker->randomDigitNotNull,
        'pub_total_analysis_time' => $faker->randomDigitNotNull,
        'pub_minimum_word_length' => $faker->randomDigitNotNull,
        'pub_between_words_silence' => $faker->randomDigitNotNull,
        'pub_maximum_number_of_words' => $faker->randomDigitNotNull,
        'pub_silence_threshold' => $faker->randomDigitNotNull,
        'pub_maximum_word_length' => $faker->randomDigitNotNull,
        'pub_checar_automatizado' => $faker->word,
        'pub_intervalo_envio' => $faker->randomDigitNotNull,
        'pub_volume_envio_por_intervalo' => $faker->randomDigitNotNull
    ];
});
