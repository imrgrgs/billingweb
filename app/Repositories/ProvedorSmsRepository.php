<?php

namespace App\Repositories;

use App\Models\ProvedorSms;
use App\Repositories\BaseRepository;

/**
 * Class ProvedorSmsRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:24 pm UTC
*/

class ProvedorSmsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'psms_nome',
        'psms_login',
        'psms_senha',
        'psms_string',
        'psms_disponivel',
        'psms_saldo',
        'psms_vlrsms',
        'psms_fornecedor_id'
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
        return ProvedorSms::class;
    }
}
