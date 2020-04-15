<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AgentexUser
 * @package App\Models
 * @version April 14, 2020, 9:34 pm UTC
 *
 * @property integer agu_users_id
 * @property string agu_data
 */
class AgentexUser extends Model
{
    use SoftDeletes;

    public $table = 'agentexuser';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'agu_users_id',
        'agu_data'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'agu_agente_id' => 'integer',
        'agu_users_id' => 'integer',
        'agu_data' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'agu_users_id' => 'required'
    ];

    
}
