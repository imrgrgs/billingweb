<?php

namespace App\Repositories;

use App\Models\Ligacao;
use App\Repositories\BaseRepository;

/**
 * Class LigacaoRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:17 pm UTC
*/

class LigacaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lge_assinante',
        'lge_datainicio',
        'lge_datafim',
        'lge_segundos',
        'lge_fone_origem',
        'lge_valor',
        'lge_valor_agente',
        'lge_valor_repres',
        'lge_valor_master',
        'lge_representante_id',
        'lge_fornecedor_id',
        'lge_gvt_id',
        'lge_tptarifacao',
        'lge_status'
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
        return Ligacao::class;
    }
}
