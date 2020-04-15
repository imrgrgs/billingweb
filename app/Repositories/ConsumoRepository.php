<?php

namespace App\Repositories;

use App\Models\Consumo;
use App\Repositories\BaseRepository;

/**
 * Class ConsumoRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:39 pm UTC
*/

class ConsumoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cns_assinante_id',
        'cns_data_ini',
        'cns_data_fin',
        'cns_segundos',
        'cns_destino',
        'cns_valor',
        'cns_valor_repr',
        'cns_valor_master',
        'cns_representante_id',
        'cns_fornecedor_id',
        'cns_terminacao_id',
        'cns_ip',
        'cns_uniqueid',
        'cns_cabine_id',
        'cns_valor_agente',
        'cns_valor_vendedor',
        'cns_tptarifacao',
        'cns_saldo_revendaagente',
        'cns_tarifa_assinante',
        'cns_fone_origem'
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
        return Consumo::class;
    }
}
