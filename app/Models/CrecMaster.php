<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CrecMaster
 * @package App\Models
 * @version April 15, 2020, 11:14 am UTC
 *
 * @property string ram_nrodoc
 * @property integer ram_cliente_id
 * @property string ram_dtvencto
 * @property number ram_valor
 * @property string ram_nrparcela
 * @property string ram_historico
 * @property string ram_dtpagto
 * @property number ram_desconto
 * @property number ram_acrescimo
 * @property string ram_dtreprogramada
 * @property string ram_status
 * @property string ram_forma
 * @property string ram_nrdocpgto
 * @property integer ram_planocontas_id
 * @property integer ram_bancos_id
 * @property string ram_previsao
 * @property integer ram_empresa_id
 * @property string ram_nossonumero
 * @property string ram_dtemissao
 * @property string ram_dtefetivacao
 */
class CrecMaster extends Model
{
    use SoftDeletes;

    public $table = 'crecmaster';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ram_nrodoc',
        'ram_cliente_id',
        'ram_dtvencto',
        'ram_valor',
        'ram_nrparcela',
        'ram_historico',
        'ram_dtpagto',
        'ram_desconto',
        'ram_acrescimo',
        'ram_dtreprogramada',
        'ram_status',
        'ram_forma',
        'ram_nrdocpgto',
        'ram_planocontas_id',
        'ram_bancos_id',
        'ram_previsao',
        'ram_empresa_id',
        'ram_nossonumero',
        'ram_dtemissao',
        'ram_dtefetivacao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ram_id' => 'integer',
        'ram_nrodoc' => 'string',
        'ram_cliente_id' => 'integer',
        'ram_dtvencto' => 'date',
        'ram_valor' => 'float',
        'ram_nrparcela' => 'string',
        'ram_historico' => 'string',
        'ram_dtpagto' => 'date',
        'ram_desconto' => 'float',
        'ram_acrescimo' => 'float',
        'ram_dtreprogramada' => 'date',
        'ram_status' => 'string',
        'ram_forma' => 'string',
        'ram_nrdocpgto' => 'string',
        'ram_planocontas_id' => 'integer',
        'ram_bancos_id' => 'integer',
        'ram_previsao' => 'string',
        'ram_empresa_id' => 'integer',
        'ram_nossonumero' => 'string',
        'ram_dtemissao' => 'date',
        'ram_dtefetivacao' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
