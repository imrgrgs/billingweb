<?php

namespace App\Repositories;

use App\Models\FonesUser;
use App\Repositories\BaseRepository;

/**
 * Class FonesUserRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:14 pm UTC
*/

class FonesUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fne_telefone',
        'fne_user_id',
        'retornar_callingcard'
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
        return FonesUser::class;
    }
}
