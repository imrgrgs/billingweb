<?php

namespace App\Repositories;

use App\Models\Contrato;
use App\Repositories\BaseRepository;

/**
 * Class ContratoRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:40 pm UTC
*/

class ContratoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cnt_id',
        'cnt_contrato'
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
        return Contrato::class;
    }
}
