<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CpaRevenda
 * @package App\Models
 * @version April 15, 2020, 11:11 am UTC
 *
 * @property integer cpa_representante_id
 * @property string cpa_data
 * @property time cpa_hora
 * @property number cpa_valor
 * @property string cpa_status
 * @property string cpa_dataliberou
 * @property string cpa_tipo
 * @property string cpa_historico
 * @property string cpa_boleto
 * @property number cpa_saldoanterior_rev
 * @property string cpa_comprovacao
 * @property integer cpa_estorno_id
 */
class CpaRevenda extends Model
{
    use SoftDeletes;

    public $table = 'cparevenda';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cpa_representante_id',
        'cpa_data',
        'cpa_hora',
        'cpa_valor',
        'cpa_status',
        'cpa_dataliberou',
        'cpa_tipo',
        'cpa_historico',
        'cpa_boleto',
        'cpa_saldoanterior_rev',
        'cpa_comprovacao',
        'cpa_estorno_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cpa_id' => 'integer',
        'cpa_representante_id' => 'integer',
        'cpa_data' => 'date',
        'cpa_valor' => 'float',
        'cpa_status' => 'string',
        'cpa_dataliberou' => 'date',
        'cpa_tipo' => 'string',
        'cpa_historico' => 'string',
        'cpa_boleto' => 'string',
        'cpa_saldoanterior_rev' => 'float',
        'cpa_comprovacao' => 'string',
        'cpa_estorno_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cpa_valor' => 'required',
        'cpa_saldoanterior_rev' => 'required'
    ];

    
}
