<?php

namespace App\Repositories;

use App\Models\ContaCorrente;
use App\Repositories\BaseRepository;

/**
 * Class ContaCorrenteRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:39 pm UTC
*/

class ContaCorrenteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cco_data',
        'cco_hora',
        'cco_historico',
        'cco_valor',
        'cco_tipo',
        'cco_assinante',
        'cco_representante_id',
        'cco_fornecedor_id'
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
        return ContaCorrente::class;
    }
}
