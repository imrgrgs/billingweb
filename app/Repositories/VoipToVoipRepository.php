<?php

namespace App\Repositories;

use App\Models\VoipToVoip;
use App\Repositories\BaseRepository;

/**
 * Class VoipToVoipRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:37 pm UTC
*/

class VoipToVoipRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'vtov_origem',
        'vtov_destino',
        'vtov_representante_id',
        'vtov_fornecedor_id'
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
        return VoipToVoip::class;
    }
}
