<?php

namespace App\Repositories;

use App\Models\Active;
use App\Repositories\BaseRepository;

/**
 * Class ActiveRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:32 pm UTC
*/

class ActiveRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'act_origem',
        'act_destino',
        'act_usuario',
        'act_contexto'
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
        return Active::class;
    }
}
