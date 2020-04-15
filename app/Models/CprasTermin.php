<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CprasTermin
 * @package App\Models
 * @version April 15, 2020, 11:12 am UTC
 *
 * @property string cpr_data
 * @property time cpr_hora
 * @property string cpr_historico
 * @property number cpr_valor
 * @property string cpr_operacao
 * @property integer cpr_terminacao_id
 * @property integer cpr_fornecedor_id
 */
class CprasTermin extends Model
{
    use SoftDeletes;

    public $table = 'cprastermin';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cpr_data',
        'cpr_hora',
        'cpr_historico',
        'cpr_valor',
        'cpr_operacao',
        'cpr_terminacao_id',
        'cpr_fornecedor_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cpr_id' => 'integer',
        'cpr_data' => 'date',
        'cpr_historico' => 'string',
        'cpr_valor' => 'float',
        'cpr_operacao' => 'string',
        'cpr_terminacao_id' => 'integer',
        'cpr_fornecedor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cpr_valor' => 'required'
    ];

    
}
