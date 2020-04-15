<?php

namespace App\Repositories;

use App\Models\GrupoUra;
use App\Repositories\BaseRepository;

/**
 * Class GrupoUraRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:16 pm UTC
*/

class GrupoUraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'gru_nome',
        'gru_representante_id',
        'gru_musica_espera',
        'gru_arquivo_ura',
        'gru_assinante_id'
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
        return GrupoUra::class;
    }
}
