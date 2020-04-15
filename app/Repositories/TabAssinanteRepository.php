<?php

namespace App\Repositories;

use App\Models\TabAssinante;
use App\Repositories\BaseRepository;

/**
 * Class TabAssinanteRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:31 pm UTC
*/

class TabAssinanteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tab_codigo',
        'tab_descricao',
        'tab_agente_id'
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
        return TabAssinante::class;
    }
}
