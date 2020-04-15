<?php

namespace App\Repositories;

use App\Models\DefinePstn;
use App\Repositories\BaseRepository;

/**
 * Class DefinePstnRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:08 pm UTC
*/

class DefinePstnRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'def_fornecedor_id',
        'def_representante_id',
        'def_assinante_id',
        'def_pais',
        'def_tipo',
        'def_ddiddd_ini',
        'def_ddiddd_fim',
        'def_terminacao1_id',
        'def_terminacao2_id',
        'def_terminacao3_id',
        'def_terminacao4_id'
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
        return DefinePstn::class;
    }
}
