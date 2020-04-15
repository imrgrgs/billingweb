<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ContaCorrente
 * @package App\Models
 * @version April 14, 2020, 9:39 pm UTC
 *
 * @property string cco_data
 * @property time cco_hora
 * @property string cco_historico
 * @property number cco_valor
 * @property string cco_tipo
 * @property string cco_assinante
 * @property integer cco_representante_id
 * @property integer cco_fornecedor_id
 */
class ContaCorrente extends Model
{
    use SoftDeletes;

    public $table = 'contacorrente';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cco_data',
        'cco_hora',
        'cco_historico',
        'cco_valor',
        'cco_tipo',
        'cco_assinante',
        'cco_representante_id',
        'cco_fornecedor_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cco_id' => 'integer',
        'cco_data' => 'date',
        'cco_historico' => 'string',
        'cco_valor' => 'float',
        'cco_tipo' => 'string',
        'cco_assinante' => 'string',
        'cco_representante_id' => 'integer',
        'cco_fornecedor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
