<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GrupoVoipRamal
 * @package App\Models
 * @version April 15, 2020, 12:16 pm UTC
 *
 * @property integer grv_id
 * @property integer user_id
 */
class GrupoVoipRamal extends Model
{
    use SoftDeletes;

    public $table = 'gruposvoipramal';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'grv_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'grv_ramal_id' => 'integer',
        'grv_id' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'grv_id' => 'required',
        'user_id' => 'required'
    ];

    
}
