<?php

namespace App\Repositories;

use App\Models\TabelaRep;
use App\Repositories\BaseRepository;

/**
 * Class TabelaRepRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:32 pm UTC
*/

class TabelaRepRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tbr_tarifacao_id',
        'tbr_valor',
        'tbr_terminacao_id'
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
        return TabelaRep::class;
    }
}
