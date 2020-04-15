<?php

namespace App\Repositories;

use App\Models\GrupoSms;
use App\Repositories\BaseRepository;

/**
 * Class GrupoSmsRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:15 pm UTC
*/

class GrupoSmsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'gsms_nome',
        'gsms_fornecedor_id',
        'gsms_representante_id',
        'gsms_assinante_id'
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
        return GrupoSms::class;
    }
}
