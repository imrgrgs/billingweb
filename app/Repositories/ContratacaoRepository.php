<?php

namespace App\Repositories;

use App\Models\Contratacao;
use App\Repositories\BaseRepository;

/**
 * Class ContratacaoRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:39 pm UTC
*/

class ContratacaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cnt_assinante_id',
        'cnt_data',
        'cnt_hora',
        'cnt_valor',
        'cnt_status',
        'cnt_dataliberou',
        'cnt_tipo',
        'cnt_historico',
        'cnt_boleto',
        'cnt_agente_id',
        'cnt_saldo_repres',
        'cnt_percentual_rev',
        'cnt_percentual_assin',
        'cnt_saldo_assin_ant',
        'cnt_saldo_rev_ant',
        'cnt_comprovacao',
        'cnt_estorno_id'
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
        return Contratacao::class;
    }
}
