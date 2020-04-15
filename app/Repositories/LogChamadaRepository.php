<?php

namespace App\Repositories;

use App\Models\LogChamada;
use App\Repositories\BaseRepository;

/**
 * Class LogChamadaRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:18 pm UTC
*/

class LogChamadaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'log_datahora',
        'log_destino',
        'log_texto'
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
        return LogChamada::class;
    }
}
