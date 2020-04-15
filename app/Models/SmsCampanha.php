<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SmsCampanha
 * @package App\Models
 * @version April 15, 2020, 12:30 pm UTC
 *
 * @property string smsc_descricao
 * @property string smsc_status
 * @property string smsc_data_ini
 * @property time smsc_hora_ini
 * @property integer smsc_terminacao_id
 * @property integer smsc_fornecedor_id
 * @property string smsc_login
 * @property integer smsc_maxretries
 * @property integer smsc_retrytime
 * @property integer smsc_waittime
 * @property integer smsc_reinclusao_automatica
 * @property integer smsc_representante_id
 * @property time smsc_hora_parar
 * @property integer smsc_qtd_simult_noite
 * @property integer smsc_qtd_simult_dia
 * @property string smsc_data_encerrar
 * @property string smsc_bloqueia_procon
 * @property integer smsc_intervalo_envio
 * @property integer smsc_volume_envio_por_intervalo
 */
class SmsCampanha extends Model
{
    use SoftDeletes;

    public $table = 'smscampanha';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'smsc_descricao',
        'smsc_status',
        'smsc_data_ini',
        'smsc_hora_ini',
        'smsc_terminacao_id',
        'smsc_fornecedor_id',
        'smsc_login',
        'smsc_maxretries',
        'smsc_retrytime',
        'smsc_waittime',
        'smsc_reinclusao_automatica',
        'smsc_representante_id',
        'smsc_hora_parar',
        'smsc_qtd_simult_noite',
        'smsc_qtd_simult_dia',
        'smsc_data_encerrar',
        'smsc_bloqueia_procon',
        'smsc_intervalo_envio',
        'smsc_volume_envio_por_intervalo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'smsc_id' => 'integer',
        'smsc_descricao' => 'string',
        'smsc_status' => 'string',
        'smsc_data_ini' => 'date',
        'smsc_terminacao_id' => 'integer',
        'smsc_fornecedor_id' => 'integer',
        'smsc_login' => 'string',
        'smsc_maxretries' => 'integer',
        'smsc_retrytime' => 'integer',
        'smsc_waittime' => 'integer',
        'smsc_reinclusao_automatica' => 'integer',
        'smsc_representante_id' => 'integer',
        'smsc_qtd_simult_noite' => 'integer',
        'smsc_qtd_simult_dia' => 'integer',
        'smsc_data_encerrar' => 'date',
        'smsc_bloqueia_procon' => 'string',
        'smsc_intervalo_envio' => 'integer',
        'smsc_volume_envio_por_intervalo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
