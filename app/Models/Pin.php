<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pin
 * @package App\Models
 * @version April 15, 2020, 12:21 pm UTC
 *
 * @property integer pin_number
 * @property string pin_plataforma
 * @property integer pin_user_id
 */
class Pin extends Model
{
    use SoftDeletes;

    public $table = 'pins';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'pin_number',
        'pin_plataforma',
        'pin_user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pin_id' => 'integer',
        'pin_number' => 'integer',
        'pin_plataforma' => 'string',
        'pin_user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pin_number' => 'required'
    ];

    
}
