<?php

namespace App\Repositories;

use App\Models\CelularSms;
use App\Repositories\BaseRepository;

/**
 * Class CelularSmsRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:38 pm UTC
*/

class CelularSmsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'csms_num_cell',
        'csms_nome',
        'csms_grupo_id',
        'csms_fornecedor_id',
        'csms_representante_id',
        'csms_assinante_id'
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
        return CelularSms::class;
    }
}
