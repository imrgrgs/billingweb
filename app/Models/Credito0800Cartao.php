<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Credito0800Cartao
 * @package App\Models
 * @version April 15, 2020, 11:15 am UTC
 *
 * @property string cr8_data
 * @property time cr8_hora
 * @property number cr8_valor
 * @property string cr8_tipo
 * @property string cr8_comprovacao
 * @property integer cr8_fornecedor_id
 */
class Credito0800Cartao extends Model
{
    use SoftDeletes;

    public $table = 'creditos0800cartoes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cr8_data',
        'cr8_hora',
        'cr8_valor',
        'cr8_tipo',
        'cr8_comprovacao',
        'cr8_fornecedor_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cr8_id' => 'integer',
        'cr8_data' => 'date',
        'cr8_valor' => 'float',
        'cr8_tipo' => 'string',
        'cr8_comprovacao' => 'string',
        'cr8_fornecedor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
