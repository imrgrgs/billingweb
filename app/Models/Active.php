<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Active
 * @package App\Models
 * @version April 14, 2020, 9:32 pm UTC
 *
 * @property string act_origem
 * @property string act_destino
 * @property string act_usuario
 * @property string act_contexto
 */
class Active extends Model
{
    use SoftDeletes;

    public $table = 'active';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'act_origem',
        'act_destino',
        'act_usuario',
        'act_contexto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'act_id' => 'integer',
        'act_origem' => 'string',
        'act_destino' => 'string',
        'act_usuario' => 'string',
        'act_contexto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
