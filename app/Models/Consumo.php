<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Consumo
 * @package App\Models
 * @version April 14, 2020, 9:39 pm UTC
 *
 * @property string cns_assinante_id
 * @property string|\Carbon\Carbon cns_data_ini
 * @property string|\Carbon\Carbon cns_data_fin
 * @property integer cns_segundos
 * @property string cns_destino
 * @property number cns_valor
 * @property number cns_valor_repr
 * @property number cns_valor_master
 * @property integer cns_representante_id
 * @property integer cns_fornecedor_id
 * @property integer cns_terminacao_id
 * @property string cns_ip
 * @property string cns_uniqueid
 * @property integer cns_cabine_id
 * @property number cns_valor_agente
 * @property number cns_valor_vendedor
 * @property string cns_tptarifacao
 * @property number cns_saldo_revendaagente
 * @property number cns_tarifa_assinante
 * @property string cns_fone_origem
 */
class Consumo extends Model
{
    use SoftDeletes;

    public $table = 'consumo';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cns_assinante_id',
        'cns_data_ini',
        'cns_data_fin',
        'cns_segundos',
        'cns_destino',
        'cns_valor',
        'cns_valor_repr',
        'cns_valor_master',
        'cns_representante_id',
        'cns_fornecedor_id',
        'cns_terminacao_id',
        'cns_ip',
        'cns_uniqueid',
        'cns_cabine_id',
        'cns_valor_agente',
        'cns_valor_vendedor',
        'cns_tptarifacao',
        'cns_saldo_revendaagente',
        'cns_tarifa_assinante',
        'cns_fone_origem'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cns_id' => 'integer',
        'cns_assinante_id' => 'string',
        'cns_data_ini' => 'datetime',
        'cns_data_fin' => 'datetime',
        'cns_segundos' => 'integer',
        'cns_destino' => 'string',
        'cns_valor' => 'float',
        'cns_valor_repr' => 'float',
        'cns_valor_master' => 'float',
        'cns_representante_id' => 'integer',
        'cns_fornecedor_id' => 'integer',
        'cns_terminacao_id' => 'integer',
        'cns_ip' => 'string',
        'cns_uniqueid' => 'string',
        'cns_cabine_id' => 'integer',
        'cns_valor_agente' => 'float',
        'cns_valor_vendedor' => 'float',
        'cns_tptarifacao' => 'string',
        'cns_saldo_revendaagente' => 'float',
        'cns_tarifa_assinante' => 'float',
        'cns_fone_origem' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cns_uniqueid' => 'required',
        'cns_cabine_id' => 'required',
        'cns_valor_agente' => 'required',
        'cns_valor_vendedor' => 'required',
        'cns_saldo_revendaagente' => 'required',
        'cns_tarifa_assinante' => 'required',
        'cns_fone_origem' => 'required'
    ];

    
}
