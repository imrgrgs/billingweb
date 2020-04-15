<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Credito4003
 * @package App\Models
 * @version April 15, 2020, 11:16 am UTC
 *
 * @property string cr4_data
 * @property time cr4_hora
 * @property number cr4_valor
 * @property string cr4_tipo
 * @property string cr4_comprovacao
 * @property integer cr4_fornecedor_id
 */
class Credito4003 extends Model
{
    use SoftDeletes;

    public $table = 'creditos4003';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cr4_data',
        'cr4_hora',
        'cr4_valor',
        'cr4_tipo',
        'cr4_comprovacao',
        'cr4_fornecedor_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cr4_id' => 'integer',
        'cr4_data' => 'date',
        'cr4_valor' => 'float',
        'cr4_tipo' => 'string',
        'cr4_comprovacao' => 'string',
        'cr4_fornecedor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
