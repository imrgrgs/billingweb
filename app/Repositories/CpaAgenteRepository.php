<?php

namespace App\Repositories;

use App\Models\CpaAgente;
use App\Repositories\BaseRepository;

/**
 * Class CpaAgenteRepository
 * @package App\Repositories
 * @version April 15, 2020, 11:10 am UTC
*/

class CpaAgenteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cpa_agente_id',
        'cpa_data',
        'cpa_hora',
        'cpa_valor',
        'cpa_status',
        'cpa_dataliberou',
        'cpa_tipo',
        'cpa_historico',
        'cpa_boleto',
        'cpa_saldoanterior_rev',
        'cpa_comprovacao',
        'cpa_estorno_id'
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
        return CpaAgente::class;
    }
}
