<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FonesBloq
 * @package App\Models
 * @version April 15, 2020, 12:12 pm UTC
 *
 * @property integer blq_user_id
 */
class FonesBloq extends Model
{
    use SoftDeletes;

    public $table = 'fonesbloq';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'blq_user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'blq_telefone' => 'string',
        'blq_user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'blq_user_id' => 'required'
    ];

    
}
