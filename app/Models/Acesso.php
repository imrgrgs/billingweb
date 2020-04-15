<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Acesso
 * @package App\Models
 * @version April 14, 2020, 9:32 pm UTC
 *
 * @property string ace_data
 * @property time ace_hora
 * @property string ace_ip
 * @property string ace_login
 * @property string ace_senha
 * @property string ace_sucesso
 */
class Acesso extends Model
{
    use SoftDeletes;

    public $table = 'acessos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ace_data',
        'ace_hora',
        'ace_ip',
        'ace_login',
        'ace_senha',
        'ace_sucesso'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ace_id' => 'integer',
        'ace_data' => 'date',
        'ace_ip' => 'string',
        'ace_login' => 'string',
        'ace_senha' => 'string',
        'ace_sucesso' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
