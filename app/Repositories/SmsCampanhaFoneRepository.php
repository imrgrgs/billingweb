<?php

namespace App\Repositories;

use App\Models\SmsCampanhaFone;
use App\Repositories\BaseRepository;

/**
 * Class SmsCampanhaFoneRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:30 pm UTC
*/

class SmsCampanhaFoneRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'smscf_telefone',
        'smscf_nome',
        'smscf_data_ligar',
        'smscf_hora_ligar',
        'smscf_data_ligou',
        'smscf_hora_ligou',
        'smscf_terminacao_id',
        'smscf_criouarq',
        'smscf_reinclusao',
        'smscf_status',
        'smscf_message'
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
        return SmsCampanhaFone::class;
    }
}
