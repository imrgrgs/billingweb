<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SipBuddie
 * @package App\Models
 * @version April 15, 2020, 12:29 pm UTC
 *
 * @property string name
 * @property string accountcode
 * @property string amaflags
 * @property string callgroup
 * @property string callerid
 * @property string canreinvite
 * @property string context
 * @property string defaultip
 * @property string dtmfmode
 * @property string fromuser
 * @property string fromdomain
 * @property string host
 * @property string insecure
 * @property string language
 * @property string mailbox
 * @property string md5secret
 * @property string nat
 * @property string deny
 * @property string permit
 * @property string mask
 * @property string pickupgroup
 * @property string port
 * @property string qualify
 * @property string restrictcid
 * @property string rtptimeout
 * @property string rtpholdtimeout
 * @property string secret
 * @property string type
 * @property string username
 * @property string disallow
 * @property string allow
 * @property string musiconhold
 * @property integer regseconds
 * @property string ipaddr
 * @property string regexten
 * @property string cancallforward
 */
class SipBuddie extends Model
{
    use SoftDeletes;

    public $table = 'sip_buddies';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'accountcode' => 'string',
        'amaflags' => 'string',
        'callgroup' => 'string',
        'callerid' => 'string',
        'canreinvite' => 'string',
        'context' => 'string',
        'defaultip' => 'string',
        'dtmfmode' => 'string',
        'fromuser' => 'string',
        'fromdomain' => 'string',
        'host' => 'string',
        'insecure' => 'string',
        'language' => 'string',
        'mailbox' => 'string',
        'md5secret' => 'string',
        'nat' => 'string',
        'deny' => 'string',
        'permit' => 'string',
        'mask' => 'string',
        'pickupgroup' => 'string',
        'port' => 'string',
        'qualify' => 'string',
        'restrictcid' => 'string',
        'rtptimeout' => 'string',
        'rtpholdtimeout' => 'string',
        'secret' => 'string',
        'type' => 'string',
        'username' => 'string',
        'disallow' => 'string',
        'allow' => 'string',
        'musiconhold' => 'string',
        'regseconds' => 'integer',
        'ipaddr' => 'string',
        'regexten' => 'string',
        'cancallforward' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nat' => 'required',
        'type' => 'required',
        'regseconds' => 'required'
    ];

    
}
