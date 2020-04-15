<?php

namespace App\Repositories;

use App\Models\GrupoUraDesvio;
use App\Repositories\BaseRepository;

/**
 * Class GrupoUraDesvioRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:16 pm UTC
*/

class GrupoUraDesvioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'gru_id',
        'grudesvio_digito',
        'grudesvio_nome',
        'grudesvio_tipo',
        'grudesvio_chamar'
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
        return GrupoUraDesvio::class;
    }
}
