<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cdr
 * @package App\Models
 * @version April 14, 2020, 9:38 pm UTC
 *
 * @property string|\Carbon\Carbon calldate
 * @property string clid
 * @property string src
 * @property string dst
 * @property string dcontext
 * @property string channel
 * @property string dstchannel
 * @property string lastapp
 * @property string lastdata
 * @property string|\Carbon\Carbon start
 * @property string|\Carbon\Carbon answer
 * @property string|\Carbon\Carbon end
 * @property integer duration
 * @property integer billsec
 * @property string disposition
 * @property integer amaflags
 * @property string accountcode
 * @property string uniqueid
 */
class Cdr extends Model
{
    use SoftDeletes;

    public $table = 'cdr';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'calldate' => 'datetime',
        'clid' => 'string',
        'src' => 'string',
        'dst' => 'string',
        'dcontext' => 'string',
        'channel' => 'string',
        'dstchannel' => 'string',
        'lastapp' => 'string',
        'lastdata' => 'string',
        'start' => 'datetime',
        'answer' => 'datetime',
        'end' => 'datetime',
        'duration' => 'integer',
        'billsec' => 'integer',
        'disposition' => 'string',
        'amaflags' => 'integer',
        'accountcode' => 'string',
        'uniqueid' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'duration' => 'required',
        'billsec' => 'required',
        'disposition' => 'required',
        'amaflags' => 'required'
    ];

    
}
