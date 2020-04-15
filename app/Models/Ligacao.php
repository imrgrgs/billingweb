<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ligacao
 * @package App\Models
 * @version April 15, 2020, 12:17 pm UTC
 *
 * @property string lge_assinante
 * @property string|\Carbon\Carbon lge_datainicio
 * @property string|\Carbon\Carbon lge_datafim
 * @property integer lge_segundos
 * @property string lge_fone_origem
 * @property number lge_valor
 * @property number lge_valor_agente
 * @property number lge_valor_repres
 * @property number lge_valor_master
 * @property integer lge_representante_id
 * @property integer lge_fornecedor_id
 * @property integer lge_gvt_id
 * @property string lge_tptarifacao
 * @property string lge_status
 */
class Ligacao extends Model
{
    use SoftDeletes;

    public $table = 'ligacoes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'lge_assinante',
        'lge_datainicio',
        'lge_datafim',
        'lge_segundos',
        'lge_fone_origem',
        'lge_valor',
        'lge_valor_agente',
        'lge_valor_repres',
        'lge_valor_master',
        'lge_representante_id',
        'lge_fornecedor_id',
        'lge_gvt_id',
        'lge_tptarifacao',
        'lge_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'lge_id' => 'integer',
        'lge_assinante' => 'string',
        'lge_datainicio' => 'datetime',
        'lge_datafim' => 'datetime',
        'lge_segundos' => 'integer',
        'lge_fone_origem' => 'string',
        'lge_valor' => 'float',
        'lge_valor_agente' => 'float',
        'lge_valor_repres' => 'float',
        'lge_valor_master' => 'float',
        'lge_representante_id' => 'integer',
        'lge_fornecedor_id' => 'integer',
        'lge_gvt_id' => 'integer',
        'lge_tptarifacao' => 'string',
        'lge_status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'lge_valor' => 'required',
        'lge_valor_agente' => 'required',
        'lge_valor_repres' => 'required',
        'lge_valor_master' => 'required'
    ];

    
}
