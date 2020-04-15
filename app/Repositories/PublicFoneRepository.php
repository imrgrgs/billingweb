<?php

namespace App\Repositories;

use App\Models\PublicFone;
use App\Repositories\BaseRepository;

/**
 * Class PublicFoneRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:25 pm UTC
*/

class PublicFoneRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pbt_telefone',
        'pbt_data_ligar',
        'pbt_hora_ligar',
        'pbt_data_ligou',
        'pbt_hora_ligou',
        'pbt_tempo_ouviu',
        'pbt_obs',
        'pbt_terminacao_id',
        'pbt_criouarq',
        'pbt_reinclusao',
        'pbt_cpf',
        'pbt_satisfacao'
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
        return PublicFone::class;
    }
}
