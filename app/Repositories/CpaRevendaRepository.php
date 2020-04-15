<?php

namespace App\Repositories;

use App\Models\CpaRevenda;
use App\Repositories\BaseRepository;

/**
 * Class CpaRevendaRepository
 * @package App\Repositories
 * @version April 15, 2020, 11:11 am UTC
*/

class CpaRevendaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cpa_representante_id',
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
        return CpaRevenda::class;
    }
}
