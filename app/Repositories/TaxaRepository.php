<?php

namespace App\Repositories;

use App\Models\Taxa;
use App\Repositories\BaseRepository;

/**
 * Class TaxaRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:34 pm UTC
*/

class TaxaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tax_pais_id',
        'tax_plano_id',
        'tax_tipo',
        'tax_valor',
        'tax_valorfora',
        'tax_vlrfornecedor'
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
        return Taxa::class;
    }
}
