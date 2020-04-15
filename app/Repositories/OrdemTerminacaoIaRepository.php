<?php

namespace App\Repositories;

use App\Models\OrdemTerminacaoIa;
use App\Repositories\BaseRepository;

/**
 * Class OrdemTerminacaoIaRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:20 pm UTC
*/

class OrdemTerminacaoIaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'oia_fornecedor_id',
        'oia_terminacao_id',
        'oia_ddd',
        'oia_tempo'
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
        return OrdemTerminacaoIa::class;
    }
}
