<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CrecAgente
 * @package App\Models
 * @version April 15, 2020, 11:13 am UTC
 *
 * @property string rrv_nrodoc
 * @property integer rrv_cliente_id
 * @property string rrv_dtvencto
 * @property number rrv_valor
 * @property string rrv_nrparcela
 * @property string rrv_historico
 * @property string rrv_dtpagto
 * @property number rrv_desconto
 * @property number rrv_acrescimo
 * @property string rrv_dtreprogramada
 * @property string rrv_status
 * @property string rrv_forma
 * @property string rrv_nrdocpgto
 * @property integer rrv_planocontas_id
 * @property integer rrv_bancos_id
 * @property string rrv_previsao
 * @property integer rrv_empresa_id
 * @property string rrv_nossonumero
 * @property string rrv_dtemissao
 * @property string rrv_dtefetivacao
 */
class CrecAgente extends Model
{
    use SoftDeletes;

    public $table = 'crecagente';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'rrv_nrodoc',
        'rrv_cliente_id',
        'rrv_dtvencto',
        'rrv_valor',
        'rrv_nrparcela',
        'rrv_historico',
        'rrv_dtpagto',
        'rrv_desconto',
        'rrv_acrescimo',
        'rrv_dtreprogramada',
        'rrv_status',
        'rrv_forma',
        'rrv_nrdocpgto',
        'rrv_planocontas_id',
        'rrv_bancos_id',
        'rrv_previsao',
        'rrv_empresa_id',
        'rrv_nossonumero',
        'rrv_dtemissao',
        'rrv_dtefetivacao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'rrv_id' => 'integer',
        'rrv_nrodoc' => 'string',
        'rrv_cliente_id' => 'integer',
        'rrv_dtvencto' => 'date',
        'rrv_valor' => 'float',
        'rrv_nrparcela' => 'string',
        'rrv_historico' => 'string',
        'rrv_dtpagto' => 'date',
        'rrv_desconto' => 'float',
        'rrv_acrescimo' => 'float',
        'rrv_dtreprogramada' => 'date',
        'rrv_status' => 'string',
        'rrv_forma' => 'string',
        'rrv_nrdocpgto' => 'string',
        'rrv_planocontas_id' => 'integer',
        'rrv_bancos_id' => 'integer',
        'rrv_previsao' => 'string',
        'rrv_empresa_id' => 'integer',
        'rrv_nossonumero' => 'string',
        'rrv_dtemissao' => 'date',
        'rrv_dtefetivacao' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
