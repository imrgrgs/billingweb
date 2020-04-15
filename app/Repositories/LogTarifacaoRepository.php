<?php

namespace App\Repositories;

use App\Models\LogTarifacao;
use App\Repositories\BaseRepository;

/**
 * Class LogTarifacaoRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:18 pm UTC
*/

class LogTarifacaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lgt_representante_id',
        'lgt_assinante',
        'lgt_tptarifacao',
        'lgt_data_ini',
        'lgt_hora_ini'
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
        return LogTarifacao::class;
    }
}
