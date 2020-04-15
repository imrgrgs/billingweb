<?php

namespace App\Repositories;

use App\Models\TabEspA;
use App\Repositories\BaseRepository;

/**
 * Class TabEspARepository
 * @package App\Repositories
 * @version April 15, 2020, 12:32 pm UTC
*/

class TabEspARepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tbe_fonecode',
        'tbe_descricao',
        'tbe_tipo',
        'tbe_valor',
        'tbe_vlr_feriado',
        'tbe_vlr_domingo',
        'tbe_hrini_ss',
        'tbe_hrfim_ss',
        'tbe_vlr_ss',
        'tbe_hrini_sabado',
        'tbe_hrfim_sabado',
        'tbe_vlr_sabado'
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
        return TabEspA::class;
    }
}
