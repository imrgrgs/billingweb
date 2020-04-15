<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ParBoletoRev
 * @package App\Models
 * @version April 15, 2020, 12:21 pm UTC
 *
 * @property integer bol_empresa_id
 * @property integer bol_banco
 * @property string bol_agencia
 * @property string bol_conta
 * @property string bol_localpagamento
 * @property string bol_carteira
 * @property string bol_instrucao1
 * @property string bol_instrucao2
 * @property string bol_instrucao3
 * @property string bol_instrucao4
 * @property string bol_instrucao5
 * @property string bol_nossonumero
 * @property number bol_percjuros
 * @property number bol_taxabancaria
 * @property number bol_tetotxbanc
 * @property number bol_vlrminimo
 * @property integer bol_convenio
 * @property integer bol_qtd_dias_vcto
 */
class ParBoletoRev extends Model
{
    use SoftDeletes;

    public $table = 'parboletorev';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'bol_empresa_id',
        'bol_banco',
        'bol_agencia',
        'bol_conta',
        'bol_localpagamento',
        'bol_carteira',
        'bol_instrucao1',
        'bol_instrucao2',
        'bol_instrucao3',
        'bol_instrucao4',
        'bol_instrucao5',
        'bol_nossonumero',
        'bol_percjuros',
        'bol_taxabancaria',
        'bol_tetotxbanc',
        'bol_vlrminimo',
        'bol_convenio',
        'bol_qtd_dias_vcto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'bol_id' => 'integer',
        'bol_empresa_id' => 'integer',
        'bol_banco' => 'integer',
        'bol_agencia' => 'string',
        'bol_conta' => 'string',
        'bol_localpagamento' => 'string',
        'bol_carteira' => 'string',
        'bol_instrucao1' => 'string',
        'bol_instrucao2' => 'string',
        'bol_instrucao3' => 'string',
        'bol_instrucao4' => 'string',
        'bol_instrucao5' => 'string',
        'bol_nossonumero' => 'string',
        'bol_percjuros' => 'float',
        'bol_taxabancaria' => 'float',
        'bol_tetotxbanc' => 'float',
        'bol_vlrminimo' => 'float',
        'bol_convenio' => 'integer',
        'bol_qtd_dias_vcto' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'bol_empresa_id' => 'required',
        'bol_banco' => 'required',
        'bol_agencia' => 'required',
        'bol_conta' => 'required',
        'bol_vlrminimo' => 'required',
        'bol_convenio' => 'required',
        'bol_qtd_dias_vcto' => 'required'
    ];

    
}
