<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Crececeber
 * @package App\Models
 * @version April 15, 2020, 11:14 am UTC
 *
 * @property string rec_nrodoc
 * @property integer rec_cliente_id
 * @property string rec_dtvencto
 * @property number rec_valor
 * @property string rec_nrparcela
 * @property string rec_historico
 * @property string rec_dtpagto
 * @property number rec_desconto
 * @property number rec_acrescimo
 * @property string rec_dtreprogramada
 * @property string rec_status
 * @property string rec_forma
 * @property string rec_nrdocpgto
 * @property integer rec_planocontas_id
 * @property integer rec_bancos_id
 * @property string rec_previsao
 * @property integer rec_empresa_id
 * @property string rec_nossonumero
 * @property string rec_dtemissao
 * @property string rec_dtefetivacao
 */
class Crececeber extends Model
{
    use SoftDeletes;

    public $table = 'creceber';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'rec_nrodoc',
        'rec_cliente_id',
        'rec_dtvencto',
        'rec_valor',
        'rec_nrparcela',
        'rec_historico',
        'rec_dtpagto',
        'rec_desconto',
        'rec_acrescimo',
        'rec_dtreprogramada',
        'rec_status',
        'rec_forma',
        'rec_nrdocpgto',
        'rec_planocontas_id',
        'rec_bancos_id',
        'rec_previsao',
        'rec_empresa_id',
        'rec_nossonumero',
        'rec_dtemissao',
        'rec_dtefetivacao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'rec_id' => 'integer',
        'rec_nrodoc' => 'string',
        'rec_cliente_id' => 'integer',
        'rec_dtvencto' => 'date',
        'rec_valor' => 'float',
        'rec_nrparcela' => 'string',
        'rec_historico' => 'string',
        'rec_dtpagto' => 'date',
        'rec_desconto' => 'float',
        'rec_acrescimo' => 'float',
        'rec_dtreprogramada' => 'date',
        'rec_status' => 'string',
        'rec_forma' => 'string',
        'rec_nrdocpgto' => 'string',
        'rec_planocontas_id' => 'integer',
        'rec_bancos_id' => 'integer',
        'rec_previsao' => 'string',
        'rec_empresa_id' => 'integer',
        'rec_nossonumero' => 'string',
        'rec_dtemissao' => 'date',
        'rec_dtefetivacao' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
