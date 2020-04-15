<?php

namespace App\Repositories;

use App\Models\TabEsp;
use App\Repositories\BaseRepository;

/**
 * Class TabEspRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:33 pm UTC
*/

class TabEspRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tbe_fonecode',
        'tbe_descricao',
        'tbe_tipo',
        'tbe_valor'
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
        return TabEsp::class;
    }
}
