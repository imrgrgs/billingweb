<?php

namespace App\Repositories;

use App\Models\Credito4003;
use App\Repositories\BaseRepository;

/**
 * Class Credito4003Repository
 * @package App\Repositories
 * @version April 15, 2020, 11:16 am UTC
*/

class Credito4003Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cr4_data',
        'cr4_hora',
        'cr4_valor',
        'cr4_tipo',
        'cr4_comprovacao',
        'cr4_fornecedor_id'
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
        return Credito4003::class;
    }
}
