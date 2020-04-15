<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Firewall
 * @package App\Models
 * @version April 15, 2020, 12:11 pm UTC
 *
 * @property integer frw_id
 * @property string frw_status
 * @property string|\Carbon\Carbon frw_data
 * @property string frw_motivo
 */
class Firewall extends Model
{
    use SoftDeletes;

    public $table = 'firewall';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'frw_id',
        'frw_status',
        'frw_data',
        'frw_motivo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'frw_id' => 'integer',
        'frw_ip' => 'string',
        'frw_status' => 'string',
        'frw_data' => 'datetime',
        'frw_motivo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'frw_id' => 'required',
        'frw_status' => 'required',
        'frw_data' => 'required',
        'frw_motivo' => 'required'
    ];

    
}
