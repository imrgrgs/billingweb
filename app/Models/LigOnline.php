<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LigOnline
 * @package App\Models
 * @version April 15, 2020, 12:17 pm UTC
 *
 * @property integer onl_fornecedor_id
 * @property integer onl_representante_id
 * @property integer onl_agente_id
 * @property integer onl_assinante_id
 * @property string onl_username
 * @property string onl_tempo
 * @property string onl_destino
 * @property string onl_status
 * @property string onl_nome
 * @property integer onl_terminacao_id
 * @property string onl_channel_origem
 * @property string onl_channel_destino
 * @property integer onl_cabine_id
 * @property string onl_nro_origem
 * @property string onl_callingcard
 * @property string onl_ip_servidor
 */
class LigOnline extends Model
{
    use SoftDeletes;

    public $table = 'ligonline';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'onl_fornecedor_id',
        'onl_representante_id',
        'onl_agente_id',
        'onl_assinante_id',
        'onl_username',
        'onl_tempo',
        'onl_destino',
        'onl_status',
        'onl_nome',
        'onl_terminacao_id',
        'onl_channel_origem',
        'onl_channel_destino',
        'onl_cabine_id',
        'onl_nro_origem',
        'onl_callingcard',
        'onl_ip_servidor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'onl_fornecedor_id' => 'integer',
        'onl_representante_id' => 'integer',
        'onl_agente_id' => 'integer',
        'onl_assinante_id' => 'integer',
        'onl_username' => 'string',
        'onl_tempo' => 'string',
        'onl_destino' => 'string',
        'onl_status' => 'string',
        'onl_nome' => 'string',
        'onl_terminacao_id' => 'integer',
        'onl_channel_origem' => 'string',
        'onl_channel_destino' => 'string',
        'onl_cabine_id' => 'integer',
        'onl_nro_origem' => 'string',
        'onl_callingcard' => 'string',
        'onl_ip_servidor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'onl_fornecedor_id' => 'required',
        'onl_representante_id' => 'required',
        'onl_agente_id' => 'required',
        'onl_assinante_id' => 'required',
        'onl_terminacao_id' => 'required',
        'onl_nro_origem' => 'required',
        'onl_callingcard' => 'required',
        'onl_ip_servidor' => 'required'
    ];

    
}
