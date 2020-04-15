<?php

namespace App\Repositories;

use App\Models\AssinanteCancel;
use App\Repositories\BaseRepository;

/**
 * Class AssinanteCancelRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:36 pm UTC
*/

class AssinanteCancelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'atv_user_id',
        'atv_data',
        'atv_hora',
        'atv_atualizado_ant',
        'atv_atualizado_atu',
        'atv_representante_id',
        'atv_fornecedor_id'
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
        return AssinanteCancel::class;
    }
}
