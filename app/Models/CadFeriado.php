<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CadFeriado
 * @package App\Models
 * @version April 14, 2020, 9:37 pm UTC
 *
 * @property string fer_data
 */
class CadFeriado extends Model
{
    use SoftDeletes;

    public $table = 'cadferiados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fer_data'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fer_id' => 'integer',
        'fer_data' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
