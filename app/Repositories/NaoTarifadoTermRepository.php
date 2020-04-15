<?php

namespace App\Repositories;

use App\Models\NaoTarifadoTerm;
use App\Repositories\BaseRepository;

/**
 * Class NaoTarifadoTermRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:19 pm UTC
*/

class NaoTarifadoTermRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nao_destino',
        'nao_fornecedor_id',
        'nao_terminacao_id',
        'nao_segundos'
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
        return NaoTarifadoTerm::class;
    }
}
