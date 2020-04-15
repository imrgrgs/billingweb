<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bvaudio
 * @package App\Models
 * @version April 14, 2020, 9:36 pm UTC
 *
 * @property string originalName
 * @property integer size
 * @property integer time
 * @property string generatedName
 * @property string generatedPath
 * @property string gsmName
 * @property string gsmPath
 * @property integer forId
 * @property integer repId
 * @property integer usrId
 * @property string|\Carbon\Carbon dateCreated
 */
class Bvaudio extends Model
{
    use SoftDeletes;

    public $table = 'bvaudio';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'originalName' => 'string',
        'size' => 'integer',
        'time' => 'integer',
        'generatedName' => 'string',
        'generatedPath' => 'string',
        'gsmName' => 'string',
        'gsmPath' => 'string',
        'forId' => 'integer',
        'repId' => 'integer',
        'usrId' => 'integer',
        'dateCreated' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'originalName' => 'required',
        'generatedName' => 'required',
        'generatedPath' => 'required'
    ];

    
}
