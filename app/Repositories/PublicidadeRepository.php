<?php

namespace App\Repositories;

use App\Models\Publicidade;
use App\Repositories\BaseRepository;

/**
 * Class PublicidadeRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:25 pm UTC
*/

class PublicidadeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pub_descricao',
        'pub_status',
        'pub_gingle_wav',
        'pub_endereco_gingle',
        'pub_gingle_wav2',
        'pub_endereco_gingle2',
        'pub_tempo_gingle',
        'pub_data_ini',
        'pub_hora_ini',
        'pub_terminacao_id',
        'pub_fornecedor_id',
        'pub_login',
        'pub_maxretries',
        'pub_retrytime',
        'pub_waittime',
        'pub_reinclusao_automatica',
        'pub_representante_id',
        'pub_checar_satisfacao',
        'pub_hora_parar',
        'pub_qtd_simult_noite',
        'pub_qtd_simult_dia',
        'pub_data_encerrar',
        'pub_bloqueia_procon',
        'pub_initial_silence',
        'pub_greeting',
        'pub_after_greeting_silence',
        'pub_total_analysis_time',
        'pub_minimum_word_length',
        'pub_between_words_silence',
        'pub_maximum_number_of_words',
        'pub_silence_threshold',
        'pub_maximum_word_length',
        'pub_checar_automatizado',
        'pub_intervalo_envio',
        'pub_volume_envio_por_intervalo'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Publicidade::class;
    }
}
