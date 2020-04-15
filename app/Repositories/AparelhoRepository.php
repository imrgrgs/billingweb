<?php

namespace App\Repositories;

use App\Models\Aparelho;
use App\Repositories\BaseRepository;

/**
 * Class AparelhoRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:35 pm UTC
*/

class AparelhoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'apa_descricao',
        'apa_valor',
        'apa_fornecedor_id'
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
        return Aparelho::class;
    }
}
