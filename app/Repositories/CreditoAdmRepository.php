<?php

namespace App\Repositories;

use App\Models\CreditoAdm;
use App\Repositories\BaseRepository;

/**
 * Class CreditoAdmRepository
 * @package App\Repositories
 * @version April 15, 2020, 11:16 am UTC
*/

class CreditoAdmRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cca_fornecedor_id',
        'cca_data',
        'cca_hora',
        'cca_valor'
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
        return CreditoAdm::class;
    }
}
