<?php

namespace App\Repositories;

use App\Models\EnvioSms;
use App\Repositories\BaseRepository;

/**
 * Class EnvioSmsRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:09 pm UTC
*/

class EnvioSmsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'esms_data',
        'esms_valor',
        'esms_valor_rev',
        'esms_valor_ass',
        'esms_status',
        'esms_assinante',
        'esms_fone_destino',
        'esms_mensagem',
        'esms_fornecedor_id',
        'esms_representante_id'
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
        return EnvioSms::class;
    }
}
