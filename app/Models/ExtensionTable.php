<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ExtensionTable
 * @package App\Models
 * @version April 15, 2020, 12:10 pm UTC
 *
 * @property string context
 * @property string exten
 * @property boolean priority
 * @property string app
 * @property string appdata
 */
class ExtensionTable extends Model
{
    use SoftDeletes;

    public $table = 'extensions_table';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'context',
        'exten',
        'priority',
        'app',
        'appdata'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'context' => 'string',
        'exten' => 'string',
        'priority' => 'boolean',
        'app' => 'string',
        'appdata' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'priority' => 'required'
    ];

    
}
