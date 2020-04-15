<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TabAssinante
 * @package App\Models
 * @version April 15, 2020, 12:31 pm UTC
 *
 * @property string tab_codigo
 * @property string tab_descricao
 * @property integer tab_agente_id
 */
class TabAssinante extends Model
{
    use SoftDeletes;

    public $table = 'tabassinante18';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tab_codigo',
        'tab_descricao',
        'tab_agente_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tab_id' => 'integer',
        'tab_codigo' => 'string',
        'tab_descricao' => 'string',
        'tab_agente_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
