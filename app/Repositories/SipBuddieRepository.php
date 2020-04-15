<?php

namespace App\Repositories;

use App\Models\SipBuddie;
use App\Repositories\BaseRepository;

/**
 * Class SipBuddieRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:29 pm UTC
*/

class SipBuddieRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'accountcode',
        'amaflags',
        'callgroup',
        'callerid',
        'canreinvite',
        'context',
        'defaultip',
        'dtmfmode',
        'fromuser',
        'fromdomain',
        'host',
        'insecure',
        'language',
        'mailbox',
        'md5secret',
        'nat',
        'deny',
        'permit',
        'mask',
        'pickupgroup',
        'port',
        'qualify',
        'restrictcid',
        'rtptimeout',
        'rtpholdtimeout',
        'secret',
        'type',
        'username',
        'disallow',
        'allow',
        'musiconhold',
        'regseconds',
        'ipaddr',
        'regexten',
        'cancallforward'
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
        return SipBuddie::class;
    }
}
