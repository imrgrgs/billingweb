<?php

namespace App\Repositories;

use App\Models\CustoTerm;
use App\Repositories\BaseRepository;

/**
 * Class CustoTermRepository
 * @package App\Repositories
 * @version April 15, 2020, 11:18 am UTC
*/

class CustoTermRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ctt_fonecode',
        'ctt_descricao',
        'ctt_valor'
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
        return CustoTerm::class;
    }
}
