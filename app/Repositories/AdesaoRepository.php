<?php

namespace App\Repositories;

use App\Models\Adesao;
use App\Repositories\BaseRepository;

/**
 * Class AdesaoRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:33 pm UTC
*/

class AdesaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ads_assinante_id',
        'ads_plano_id',
        'ads_data_contrato',
        'ads_franquia',
        'ads_data_teto',
        'ads_minutos_utilizadas',
        'ads_status',
        'ads_nossonumero'
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
        return Adesao::class;
    }
}
