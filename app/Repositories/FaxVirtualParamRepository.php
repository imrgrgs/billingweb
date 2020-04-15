<?php

namespace App\Repositories;

use App\Models\FaxVirtualParam;
use App\Repositories\BaseRepository;

/**
 * Class FaxVirtualParamRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:11 pm UTC
*/

class FaxVirtualParamRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pfv_id',
        'pfv_qtd_simult_noite',
        'pfv_qtd_simult_dia'
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
        return FaxVirtualParam::class;
    }
}
