<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contratacao
 * @package App\Models
 * @version April 14, 2020, 9:39 pm UTC
 *
 * @property integer cnt_assinante_id
 * @property string cnt_data
 * @property time cnt_hora
 * @property number cnt_valor
 * @property string cnt_status
 * @property string cnt_dataliberou
 * @property string cnt_tipo
 * @property string cnt_historico
 * @property string cnt_boleto
 * @property integer cnt_agente_id
 * @property number cnt_saldo_repres
 * @property number cnt_percentual_rev
 * @property number cnt_percentual_assin
 * @property number cnt_saldo_assin_ant
 * @property number cnt_saldo_rev_ant
 * @property string cnt_comprovacao
 * @property integer cnt_estorno_id
 */
class Contratacao extends Model
{
    use SoftDeletes;

    public $table = 'contratacao';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cnt_assinante_id',
        'cnt_data',
        'cnt_hora',
        'cnt_valor',
        'cnt_status',
        'cnt_dataliberou',
        'cnt_tipo',
        'cnt_historico',
        'cnt_boleto',
        'cnt_agente_id',
        'cnt_saldo_repres',
        'cnt_percentual_rev',
        'cnt_percentual_assin',
        'cnt_saldo_assin_ant',
        'cnt_saldo_rev_ant',
        'cnt_comprovacao',
        'cnt_estorno_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cnt_id' => 'integer',
        'cnt_assinante_id' => 'integer',
        'cnt_data' => 'date',
        'cnt_valor' => 'float',
        'cnt_status' => 'string',
        'cnt_dataliberou' => 'date',
        'cnt_tipo' => 'string',
        'cnt_historico' => 'string',
        'cnt_boleto' => 'string',
        'cnt_agente_id' => 'integer',
        'cnt_saldo_repres' => 'float',
        'cnt_percentual_rev' => 'float',
        'cnt_percentual_assin' => 'float',
        'cnt_saldo_assin_ant' => 'float',
        'cnt_saldo_rev_ant' => 'float',
        'cnt_comprovacao' => 'string',
        'cnt_estorno_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cnt_valor' => 'required',
        'cnt_historico' => 'required',
        'cnt_percentual_rev' => 'required',
        'cnt_percentual_assin' => 'required',
        'cnt_saldo_assin_ant' => 'required',
        'cnt_saldo_rev_ant' => 'required'
    ];

    
}
