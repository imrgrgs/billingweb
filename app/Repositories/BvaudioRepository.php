<?php

namespace App\Repositories;

use App\Models\Bvaudio;
use App\Repositories\BaseRepository;

/**
 * Class BvaudioRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:36 pm UTC
*/

class BvaudioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'originalName',
        'size',
        'time',
        'generatedName',
        'generatedPath',
        'gsmName',
        'gsmPath',
        'forId',
        'repId',
        'usrId',
        'dateCreated'
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
        return Bvaudio::class;
    }
}
