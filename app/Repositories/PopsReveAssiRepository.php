<?php

namespace App\Repositories;

use App\Models\PopsReveAssi;
use App\Repositories\BaseRepository;

/**
 * Class PopsReveAssiRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:23 pm UTC
*/

class PopsReveAssiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'popar_fornecedor_id',
        'popar_representante_id',
        'popar_assinante',
        'popar_tarifas_id',
        'popar_terminacao1_id',
        'popar_terminacao2_id',
        'popar_terminacao3_id'
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
        return PopsReveAssi::class;
    }
}
