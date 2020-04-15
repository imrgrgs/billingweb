<?php

namespace App\Repositories;

use App\Models\Operadora;
use App\Repositories\BaseRepository;

/**
 * Class OperadoraRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:19 pm UTC
*/

class OperadoraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'opr_id',
        'opr_nome'
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
        return Operadora::class;
    }
}
