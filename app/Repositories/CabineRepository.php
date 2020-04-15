<?php

namespace App\Repositories;

use App\Models\Cabine;
use App\Repositories\BaseRepository;

/**
 * Class CabineRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:36 pm UTC
*/

class CabineRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cab_data',
        'cab_hora',
        'cab_cliente',
        'cab_user_id',
        'cab_representante_id',
        'cab_fornecedor_id'
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
        return Cabine::class;
    }
}
