<?php

namespace App\Repositories;

use App\Models\Estatistica;
use App\Repositories\BaseRepository;

/**
 * Class EstatisticaRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:09 pm UTC
*/

class EstatisticaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'est_destino',
        'est_fornecedor_id',
        'est_representante_id',
        'est_status',
        'est_tempo_ate_atender',
        'est_tempo_conversa',
        'est_terminacao_id',
        'est_assinante',
        'est_data_inicio',
        'est_data_final',
        'est_tentativa',
        'est_uniqueid',
        'est_causahangup'
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
        return Estatistica::class;
    }
}
