<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EnvioSms
 * @package App\Models
 * @version April 15, 2020, 12:09 pm UTC
 *
 * @property string|\Carbon\Carbon esms_data
 * @property number esms_valor
 * @property number esms_valor_rev
 * @property number esms_valor_ass
 * @property string esms_status
 * @property string esms_assinante
 * @property string esms_fone_destino
 * @property string esms_mensagem
 * @property integer esms_fornecedor_id
 * @property integer esms_representante_id
 */
class EnvioSms extends Model
{
    use SoftDeletes;

    public $table = 'enviosms';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'esms_data',
        'esms_valor',
        'esms_valor_rev',
        'esms_valor_ass',
        'esms_status',
        'esms_assinante',
        'esms_fone_destino',
        'esms_mensagem',
        'esms_fornecedor_id',
        'esms_representante_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'esms_id' => 'integer',
        'esms_data' => 'datetime',
        'esms_valor' => 'float',
        'esms_valor_rev' => 'float',
        'esms_valor_ass' => 'float',
        'esms_status' => 'string',
        'esms_assinante' => 'string',
        'esms_fone_destino' => 'string',
        'esms_mensagem' => 'string',
        'esms_fornecedor_id' => 'integer',
        'esms_representante_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
