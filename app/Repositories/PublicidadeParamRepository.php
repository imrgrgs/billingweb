<?php

namespace App\Repositories;

use App\Models\PublicidadeParam;
use App\Repositories\BaseRepository;

/**
 * Class PublicidadeParamRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:26 pm UTC
*/

class PublicidadeParamRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ppm_id',
        'ppm_qtd_simult_noite',
        'ppm_qtd_simult_dia'
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
        return PublicidadeParam::class;
    }
}
