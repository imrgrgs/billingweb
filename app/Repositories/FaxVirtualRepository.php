<?php

namespace App\Repositories;

use App\Models\FaxVirtual;
use App\Repositories\BaseRepository;

/**
 * Class FaxVirtualRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:10 pm UTC
*/

class FaxVirtualRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fax_descricao',
        'fax_status',
        'fax_documento',
        'fax_data_ini',
        'fax_hora_ini',
        'fax_terminacao_id',
        'fax_fornecedor_id',
        'fax_representante_id',
        'fax_login'
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
        return FaxVirtual::class;
    }
}
