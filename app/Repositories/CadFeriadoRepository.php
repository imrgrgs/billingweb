<?php

namespace App\Repositories;

use App\Models\CadFeriado;
use App\Repositories\BaseRepository;

/**
 * Class CadFeriadoRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:37 pm UTC
*/

class CadFeriadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fer_data'
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
        return CadFeriado::class;
    }
}
