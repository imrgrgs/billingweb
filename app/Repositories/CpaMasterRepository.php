<?php

namespace App\Repositories;

use App\Models\CpaMaster;
use App\Repositories\BaseRepository;

/**
 * Class CpaMasterRepository
 * @package App\Repositories
 * @version April 15, 2020, 11:11 am UTC
*/

class CpaMasterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cma_fornecedor_id',
        'cma_data',
        'cma_hora',
        'cma_valor',
        'cma_status',
        'cma_dataliberou',
        'cma_tipo',
        'cma_historico',
        'cma_boleto'
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
        return CpaMaster::class;
    }
}
