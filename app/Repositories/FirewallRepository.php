<?php

namespace App\Repositories;

use App\Models\Firewall;
use App\Repositories\BaseRepository;

/**
 * Class FirewallRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:11 pm UTC
*/

class FirewallRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'frw_id',
        'frw_status',
        'frw_data',
        'frw_motivo'
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
        return Firewall::class;
    }
}
