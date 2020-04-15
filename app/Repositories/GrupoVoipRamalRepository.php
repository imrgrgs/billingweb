<?php

namespace App\Repositories;

use App\Models\GrupoVoipRamal;
use App\Repositories\BaseRepository;

/**
 * Class GrupoVoipRamalRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:16 pm UTC
*/

class GrupoVoipRamalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'grv_id',
        'user_id'
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
        return GrupoVoipRamal::class;
    }
}
