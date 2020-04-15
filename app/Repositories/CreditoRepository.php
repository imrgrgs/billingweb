<?php

namespace App\Repositories;

use App\Models\Credito;
use App\Repositories\BaseRepository;

/**
 * Class CreditoRepository
 * @package App\Repositories
 * @version April 15, 2020, 11:15 am UTC
*/

class CreditoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'crd_saldo'
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
        return Credito::class;
    }
}
