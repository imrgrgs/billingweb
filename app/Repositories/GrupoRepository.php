<?php

namespace App\Repositories;

use App\Models\Grupo;
use App\Repositories\BaseRepository;

/**
 * Class GrupoRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:14 pm UTC
*/

class GrupoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'gru_descricao'
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
        return Grupo::class;
    }
}
