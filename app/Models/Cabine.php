<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cabine
 * @package App\Models
 * @version April 14, 2020, 9:36 pm UTC
 *
 * @property string cab_data
 * @property time cab_hora
 * @property string cab_cliente
 * @property integer cab_user_id
 * @property integer cab_representante_id
 * @property integer cab_fornecedor_id
 */
class Cabine extends Model
{
    use SoftDeletes;

    public $table = 'cabines';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cab_data',
        'cab_hora',
        'cab_cliente',
        'cab_user_id',
        'cab_representante_id',
        'cab_fornecedor_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cab_id' => 'integer',
        'cab_data' => 'date',
        'cab_cliente' => 'string',
        'cab_user_id' => 'integer',
        'cab_representante_id' => 'integer',
        'cab_fornecedor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
