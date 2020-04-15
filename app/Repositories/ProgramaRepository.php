<?php

namespace App\Repositories;

use App\Models\Programa;
use App\Repositories\BaseRepository;

/**
 * Class ProgramaRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:24 pm UTC
*/

class ProgramaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'prg_codigo',
        'prg_descricao',
        'prg_menu'
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
        return Programa::class;
    }
}
