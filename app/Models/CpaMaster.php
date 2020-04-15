<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CpaMaster
 * @package App\Models
 * @version April 15, 2020, 11:11 am UTC
 *
 * @property integer cma_fornecedor_id
 * @property string cma_data
 * @property time cma_hora
 * @property number cma_valor
 * @property string cma_status
 * @property string cma_dataliberou
 * @property string cma_tipo
 * @property string cma_historico
 * @property string cma_boleto
 */
class CpaMaster extends Model
{
    use SoftDeletes;

    public $table = 'cpamaster';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cma_fornecedor_id',
        'cma_data',
        'cma_hora',
        'cma_valor',
        'cma_status',
        'cma_dataliberou',
        'cma_tipo',
        'cma_historico',
        'cma_boleto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cma_id' => 'integer',
        'cma_fornecedor_id' => 'integer',
        'cma_data' => 'date',
        'cma_valor' => 'float',
        'cma_status' => 'string',
        'cma_dataliberou' => 'date',
        'cma_tipo' => 'string',
        'cma_historico' => 'string',
        'cma_boleto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cma_valor' => 'required'
    ];

    
}
