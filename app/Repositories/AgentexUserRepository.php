<?php

namespace App\Repositories;

use App\Models\AgentexUser;
use App\Repositories\BaseRepository;

/**
 * Class AgentexUserRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:34 pm UTC
*/

class AgentexUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'agu_users_id',
        'agu_data'
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
        return AgentexUser::class;
    }
}
