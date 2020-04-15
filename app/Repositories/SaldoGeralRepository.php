<?php

namespace App\Repositories;

use App\Models\SaldoGeral;
use App\Repositories\BaseRepository;

/**
 * Class SaldoGeralRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:28 pm UTC
*/

class SaldoGeralRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sdg_data',
        'sdg_hora',
        'sdg_tipo',
        'sdg_valor',
        'sdg_codigo'
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
        return SaldoGeral::class;
    }
}
