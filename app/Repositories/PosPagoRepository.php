<?php

namespace App\Repositories;

use App\Models\PosPago;
use App\Repositories\BaseRepository;

/**
 * Class PosPagoRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:24 pm UTC
*/

class PosPagoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pos_plano_id',
        'pos_data_contrato',
        'pos_utilizado_fixo',
        'pos_utilizado_celular',
        'pos_dia_zerar'
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
        return PosPago::class;
    }
}
