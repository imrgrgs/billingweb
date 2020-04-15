<?php

namespace App\Repositories;

use App\Models\FonesProcon;
use App\Repositories\BaseRepository;

/**
 * Class FonesProconRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:12 pm UTC
*/

class FonesProconRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fpro_ddd',
        'fpro_fone',
        'fpro_dddfone',
        'fpro_cadastro',
        'fpro_evento',
        'fpro_data_evento'
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
        return FonesProcon::class;
    }
}
