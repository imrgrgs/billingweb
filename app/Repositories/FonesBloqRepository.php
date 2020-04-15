<?php

namespace App\Repositories;

use App\Models\FonesBloq;
use App\Repositories\BaseRepository;

/**
 * Class FonesBloqRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:12 pm UTC
*/

class FonesBloqRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'blq_user_id'
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
        return FonesBloq::class;
    }
}
