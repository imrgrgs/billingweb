<?php

namespace App\Repositories;

use App\Models\FonesAnatel;
use App\Repositories\BaseRepository;

/**
 * Class FonesAnatelRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:12 pm UTC
*/

class FonesAnatelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'anal_sigla_uf',
        'anal_sigla_cnl',
        'anal_codigo_cnl',
        'anal_localidade',
        'anal_municipio',
        'anal_codigo_area',
        'anal_prefixo',
        'anal_prestadora',
        'anal_faixa_ini',
        'anal_faixa_fim',
        'anal_latitude',
        'anal_hemisferio',
        'anal_longitude',
        'anal_sigla_cnl_local'
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
        return FonesAnatel::class;
    }
}
