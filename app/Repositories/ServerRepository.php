<?php

namespace App\Repositories;

use App\Models\Server;
use App\Repositories\BaseRepository;

/**
 * Class ServerRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:29 pm UTC
*/

class ServerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ip_number',
        'type_access',
        'alias',
        'ssh_user_access',
        'ssh_password_access',
        'ssh_port',
        'admin_id',
        'name',
        'description',
        'date_created',
        'date_updated',
        'status'
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
        return Server::class;
    }
}
