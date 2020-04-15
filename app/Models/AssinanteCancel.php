<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AssinanteCancel
 * @package App\Models
 * @version April 15, 2020, 12:36 pm UTC
 *
 * @property integer atv_user_id
 * @property string atv_data
 * @property time atv_hora
 * @property string atv_atualizado_ant
 * @property string atv_atualizado_atu
 * @property integer atv_representante_id
 * @property integer atv_fornecedor_id
 */
class AssinanteCancel extends Model
{
    use SoftDeletes;

    public $table = 'userscancel';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'atv_user_id',
        'atv_data',
        'atv_hora',
        'atv_atualizado_ant',
        'atv_atualizado_atu',
        'atv_representante_id',
        'atv_fornecedor_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'atv_id' => 'integer',
        'atv_user_id' => 'integer',
        'atv_data' => 'date',
        'atv_atualizado_ant' => 'string',
        'atv_atualizado_atu' => 'string',
        'atv_representante_id' => 'integer',
        'atv_fornecedor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
