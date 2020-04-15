<?php

namespace App\Repositories;

use App\Models\CprasTermin;
use App\Repositories\BaseRepository;

/**
 * Class CprasTerminRepository
 * @package App\Repositories
 * @version April 15, 2020, 11:12 am UTC
*/

class CprasTerminRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cpr_data',
        'cpr_hora',
        'cpr_historico',
        'cpr_valor',
        'cpr_operacao',
        'cpr_terminacao_id',
        'cpr_fornecedor_id'
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
        return CprasTermin::class;
    }
}
