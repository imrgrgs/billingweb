<?php

namespace App\Repositories;

use App\Models\TabRevenda;
use App\Repositories\BaseRepository;

/**
 * Class TabRevendaRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:34 pm UTC
*/

class TabRevendaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tab_codigo',
        'tab_descricao'
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
        return TabRevenda::class;
    }
}
