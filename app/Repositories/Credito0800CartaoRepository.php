<?php

namespace App\Repositories;

use App\Models\Credito0800Cartao;
use App\Repositories\BaseRepository;

/**
 * Class Credito0800CartaoRepository
 * @package App\Repositories
 * @version April 15, 2020, 11:15 am UTC
*/

class Credito0800CartaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cr8_data',
        'cr8_hora',
        'cr8_valor',
        'cr8_tipo',
        'cr8_comprovacao',
        'cr8_fornecedor_id'
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
        return Credito0800Cartao::class;
    }
}
