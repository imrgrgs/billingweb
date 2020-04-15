<?php

namespace App\Repositories;

use App\Models\LigOnline;
use App\Repositories\BaseRepository;

/**
 * Class LigOnlineRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:17 pm UTC
*/

class LigOnlineRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'onl_fornecedor_id',
        'onl_representante_id',
        'onl_agente_id',
        'onl_assinante_id',
        'onl_username',
        'onl_tempo',
        'onl_destino',
        'onl_status',
        'onl_nome',
        'onl_terminacao_id',
        'onl_channel_origem',
        'onl_channel_destino',
        'onl_cabine_id',
        'onl_nro_origem',
        'onl_callingcard',
        'onl_ip_servidor'
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
        return LigOnline::class;
    }
}
