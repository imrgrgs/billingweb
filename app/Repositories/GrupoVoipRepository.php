<?php

namespace App\Repositories;

use App\Models\GrupoVoip;
use App\Repositories\BaseRepository;

/**
 * Class GrupoVoipRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:15 pm UTC
*/

class GrupoVoipRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'grv_nome',
        'grv_estrategia',
        'grv_representante_id',
        'grv_fornecedor_id',
        'grv_musica_espera',
        'grv_alias_grupo',
        'grv_assinante_id'
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
        return GrupoVoip::class;
    }
}
