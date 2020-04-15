<?php

namespace App\Repositories;

use App\Models\Pin;
use App\Repositories\BaseRepository;

/**
 * Class PinRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:21 pm UTC
*/

class PinRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pin_number',
        'pin_plataforma',
        'pin_user_id'
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
        return Pin::class;
    }
}
