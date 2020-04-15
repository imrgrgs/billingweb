<?php

namespace App\Repositories;

use App\Models\FonesRestricao;
use App\Repositories\BaseRepository;

/**
 * Class FonesRestricaoRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:13 pm UTC
*/

class FonesRestricaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fonesrestricao_user_id',
        'fonesrestricao_telefone'
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
        return FonesRestricao::class;
    }
}
