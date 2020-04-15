<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Gvt
 * @package App\Models
 * @version April 15, 2020, 12:17 pm UTC
 *
 * @property string gvt_user
 * @property string gvt_pass
 * @property string gvt_url
 * @property integer gvt_porta
 * @property string gvt_user_fsol
 * @property string gvt_status
 * @property integer gvt_fornecedor_id
 * @property string gvt_numfone
 * @property boolean gvt_aplicacao
 * @property number gvt_vlr_callingcard
 * @property string gvt_tp_tarifacao
 * @property string gvt_fazer_registro
 * @property number gvt_vlr_conexao_fixo
 * @property number gvt_vlr_conexao_celular
 * @property number gvt_vlr_callingcard_cel
 * @property string gvt_identificador_via_uri
 * @property string gvt_arq_audio
 * @property string gvt_lig_gratuita
 * @property integer gvt_tmp_maximo_gratuita
 * @property string gvt_codec1
 * @property string gvt_codec2
 * @property string gvt_codec3
 * @property string gvt_codec4
 * @property string gvt_codec5
 * @property string pode_transferir
 * @property integer gvt_representante_id
 * @property integer gvt_tabprecos_id
 * @property number gvt_vlr_fx_revenda
 * @property number gvt_vlr_cel_revenda
 * @property integer gvt_recebe_de
 * @property integer gvt_lista_negra
 * @property integer gvt_tipo_atendimento
 * @property string gvt_telegram_token
 */
class Gvt extends Model
{
    use SoftDeletes;

    public $table = 'gvt';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'gvt_user',
        'gvt_pass',
        'gvt_url',
        'gvt_porta',
        'gvt_user_fsol',
        'gvt_status',
        'gvt_fornecedor_id',
        'gvt_numfone',
        'gvt_aplicacao',
        'gvt_vlr_callingcard',
        'gvt_tp_tarifacao',
        'gvt_fazer_registro',
        'gvt_vlr_conexao_fixo',
        'gvt_vlr_conexao_celular',
        'gvt_vlr_callingcard_cel',
        'gvt_identificador_via_uri',
        'gvt_arq_audio',
        'gvt_lig_gratuita',
        'gvt_tmp_maximo_gratuita',
        'gvt_codec1',
        'gvt_codec2',
        'gvt_codec3',
        'gvt_codec4',
        'gvt_codec5',
        'pode_transferir',
        'gvt_representante_id',
        'gvt_tabprecos_id',
        'gvt_vlr_fx_revenda',
        'gvt_vlr_cel_revenda',
        'gvt_recebe_de',
        'gvt_lista_negra',
        'gvt_tipo_atendimento',
        'gvt_telegram_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'gvt_id' => 'integer',
        'gvt_user' => 'string',
        'gvt_pass' => 'string',
        'gvt_url' => 'string',
        'gvt_porta' => 'integer',
        'gvt_user_fsol' => 'string',
        'gvt_status' => 'string',
        'gvt_fornecedor_id' => 'integer',
        'gvt_numfone' => 'string',
        'gvt_aplicacao' => 'boolean',
        'gvt_vlr_callingcard' => 'float',
        'gvt_tp_tarifacao' => 'string',
        'gvt_fazer_registro' => 'string',
        'gvt_vlr_conexao_fixo' => 'float',
        'gvt_vlr_conexao_celular' => 'float',
        'gvt_vlr_callingcard_cel' => 'float',
        'gvt_identificador_via_uri' => 'string',
        'gvt_arq_audio' => 'string',
        'gvt_lig_gratuita' => 'string',
        'gvt_tmp_maximo_gratuita' => 'integer',
        'gvt_codec1' => 'string',
        'gvt_codec2' => 'string',
        'gvt_codec3' => 'string',
        'gvt_codec4' => 'string',
        'gvt_codec5' => 'string',
        'pode_transferir' => 'string',
        'gvt_representante_id' => 'integer',
        'gvt_tabprecos_id' => 'integer',
        'gvt_vlr_fx_revenda' => 'float',
        'gvt_vlr_cel_revenda' => 'float',
        'gvt_recebe_de' => 'integer',
        'gvt_lista_negra' => 'integer',
        'gvt_tipo_atendimento' => 'integer',
        'gvt_telegram_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'gvt_porta' => 'required',
        'gvt_aplicacao' => 'required',
        'gvt_vlr_callingcard' => 'required',
        'gvt_tp_tarifacao' => 'required',
        'gvt_fazer_registro' => 'required',
        'gvt_vlr_conexao_fixo' => 'required',
        'gvt_vlr_conexao_celular' => 'required',
        'gvt_vlr_callingcard_cel' => 'required',
        'gvt_identificador_via_uri' => 'required',
        'gvt_lig_gratuita' => 'required',
        'gvt_tmp_maximo_gratuita' => 'required',
        'pode_transferir' => 'required',
        'gvt_vlr_fx_revenda' => 'required',
        'gvt_vlr_cel_revenda' => 'required',
        'gvt_recebe_de' => 'required',
        'gvt_tipo_atendimento' => 'required'
    ];

    
}
