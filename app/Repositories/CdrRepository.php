<?php

namespace App\Repositories;

use App\Models\Cdr;
use App\Repositories\BaseRepository;

/**
 * Class CdrRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:38 pm UTC
*/

class CdrRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'calldate',
        'clid',
        'src',
        'dst',
        'dcontext',
        'channel',
        'dstchannel',
        'lastapp',
        'lastdata',
        'start',
        'answer',
        'end',
        'duration',
        'billsec',
        'disposition',
        'amaflags',
        'accountcode',
        'uniqueid'
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
        return Cdr::class;
    }
}
