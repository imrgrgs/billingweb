<?php

namespace App\Repositories;

use App\Models\CacRevenda;
use App\Repositories\BaseRepository;

/**
 * Class CacRevendaRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:37 pm UTC
*/

class CacRevendaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cac_representante_id',
        'cac_data_abertura',
        'cac_hora_abertura',
        'cac_tipo',
        'cac_descricao',
        'cac_solucao',
        'cac_status',
        'cac_nomecontato',
        'cac_data_solucao',
        'cac_hora_solucao',
        'cac_login'
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
        return CacRevenda::class;
    }
}
