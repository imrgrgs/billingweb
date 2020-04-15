<?php

namespace App\Repositories;

use App\Models\SmsCampanha;
use App\Repositories\BaseRepository;

/**
 * Class SmsCampanhaRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:30 pm UTC
*/

class SmsCampanhaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'smsc_descricao',
        'smsc_status',
        'smsc_data_ini',
        'smsc_hora_ini',
        'smsc_terminacao_id',
        'smsc_fornecedor_id',
        'smsc_login',
        'smsc_maxretries',
        'smsc_retrytime',
        'smsc_waittime',
        'smsc_reinclusao_automatica',
        'smsc_representante_id',
        'smsc_hora_parar',
        'smsc_qtd_simult_noite',
        'smsc_qtd_simult_dia',
        'smsc_data_encerrar',
        'smsc_bloqueia_procon',
        'smsc_intervalo_envio',
        'smsc_volume_envio_por_intervalo'
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
        return SmsCampanha::class;
    }
}
