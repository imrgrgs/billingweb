<?php

namespace App\Repositories;

use App\Models\ExtensionTable;
use App\Repositories\BaseRepository;

/**
 * Class ExtensionTableRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:10 pm UTC
*/

class ExtensionTableRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'context',
        'exten',
        'priority',
        'app',
        'appdata'
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
        return ExtensionTable::class;
    }
}
