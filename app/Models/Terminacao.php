<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Terminacao
 * @package App\Models
 * @version April 15, 2020, 12:35 pm UTC
 *
 * @property string pst_nome
 * @property string pst_apelido
 * @property string pst_extension
 * @property integer pst_fornecedor_id
 * @property integer pst_del_prefix
 * @property string pst_channel
 * @property string pst_status
 * @property string pst_celular
 * @property string pst_fixo
 * @property number pst_saldo
 * @property string pst_atualizado
 * @property number pst_vlrfixo
 * @property number pst_vlrcelular
 * @property string pst_tp_tarifacao
 * @property string pst_obs
 * @property string pst_login
 * @property string pst_senha
 * @property string pst_ip_proxy
 * @property string pst_reinvite
 * @property string pst_ringfalso
 * @property string pst_nomeficticio
 * @property string pst_formacobranca
 * @property string pst_finalidade
 * @property string pst_participa_mcusto
 * @property string pst_id_terminador
 * @property integer pst_sgs_comecar_cobrar
 * @property integer pst_sgs_comecar_cobrar_celular
 * @property string pst_rota_automatica
 * @property string pst_custoemdolar
 * @property number pst_limite_maximo
 * @property number pst_consumido
 * @property integer pst_qtde_utilizada
 * @property string pst_configuracao
 * @property string pst_fazerregister
 * @property string pst_jaincluido
 * @property string pst_codec1
 * @property string pst_codec2
 * @property string pst_codec3
 * @property string pst_codec4
 * @property string pst_codec5
 * @property string pst_porta
 * @property integer pst_digitos_eliminar
 * @property string pst_caracteres_incluir
 * @property string pst_tech_prefix
 * @property integer pst_qtde_simultaneas
 * @property integer pst_codigo_operadora
 * @property string pst_complemento_callerid
 */
class Terminacao extends Model
{
    use SoftDeletes;

    public $table = 'terminacao';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'pst_nome',
        'pst_apelido',
        'pst_extension',
        'pst_fornecedor_id',
        'pst_del_prefix',
        'pst_channel',
        'pst_status',
        'pst_celular',
        'pst_fixo',
        'pst_saldo',
        'pst_atualizado',
        'pst_vlrfixo',
        'pst_vlrcelular',
        'pst_tp_tarifacao',
        'pst_obs',
        'pst_login',
        'pst_senha',
        'pst_ip_proxy',
        'pst_reinvite',
        'pst_ringfalso',
        'pst_nomeficticio',
        'pst_formacobranca',
        'pst_finalidade',
        'pst_participa_mcusto',
        'pst_id_terminador',
        'pst_sgs_comecar_cobrar',
        'pst_sgs_comecar_cobrar_celular',
        'pst_rota_automatica',
        'pst_custoemdolar',
        'pst_limite_maximo',
        'pst_consumido',
        'pst_qtde_utilizada',
        'pst_configuracao',
        'pst_fazerregister',
        'pst_jaincluido',
        'pst_codec1',
        'pst_codec2',
        'pst_codec3',
        'pst_codec4',
        'pst_codec5',
        'pst_porta',
        'pst_digitos_eliminar',
        'pst_caracteres_incluir',
        'pst_tech_prefix',
        'pst_qtde_simultaneas',
        'pst_codigo_operadora',
        'pst_complemento_callerid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pst_id' => 'integer',
        'pst_nome' => 'string',
        'pst_apelido' => 'string',
        'pst_extension' => 'string',
        'pst_fornecedor_id' => 'integer',
        'pst_del_prefix' => 'integer',
        'pst_channel' => 'string',
        'pst_status' => 'string',
        'pst_celular' => 'string',
        'pst_fixo' => 'string',
        'pst_saldo' => 'float',
        'pst_atualizado' => 'string',
        'pst_vlrfixo' => 'float',
        'pst_vlrcelular' => 'float',
        'pst_tp_tarifacao' => 'string',
        'pst_obs' => 'string',
        'pst_login' => 'string',
        'pst_senha' => 'string',
        'pst_ip_proxy' => 'string',
        'pst_reinvite' => 'string',
        'pst_ringfalso' => 'string',
        'pst_nomeficticio' => 'string',
        'pst_formacobranca' => 'string',
        'pst_finalidade' => 'string',
        'pst_participa_mcusto' => 'string',
        'pst_id_terminador' => 'string',
        'pst_sgs_comecar_cobrar' => 'integer',
        'pst_sgs_comecar_cobrar_celular' => 'integer',
        'pst_rota_automatica' => 'string',
        'pst_custoemdolar' => 'string',
        'pst_limite_maximo' => 'float',
        'pst_consumido' => 'float',
        'pst_qtde_utilizada' => 'integer',
        'pst_configuracao' => 'string',
        'pst_fazerregister' => 'string',
        'pst_jaincluido' => 'string',
        'pst_codec1' => 'string',
        'pst_codec2' => 'string',
        'pst_codec3' => 'string',
        'pst_codec4' => 'string',
        'pst_codec5' => 'string',
        'pst_porta' => 'string',
        'pst_digitos_eliminar' => 'integer',
        'pst_caracteres_incluir' => 'string',
        'pst_tech_prefix' => 'string',
        'pst_qtde_simultaneas' => 'integer',
        'pst_codigo_operadora' => 'integer',
        'pst_complemento_callerid' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pst_del_prefix' => 'required',
        'pst_formacobranca' => 'required',
        'pst_finalidade' => 'required',
        'pst_participa_mcusto' => 'required',
        'pst_sgs_comecar_cobrar' => 'required',
        'pst_sgs_comecar_cobrar_celular' => 'required',
        'pst_rota_automatica' => 'required',
        'pst_custoemdolar' => 'required',
        'pst_limite_maximo' => 'required',
        'pst_consumido' => 'required',
        'pst_qtde_utilizada' => 'required',
        'pst_configuracao' => 'required',
        'pst_fazerregister' => 'required',
        'pst_jaincluido' => 'required',
        'pst_codec1' => 'required',
        'pst_codec2' => 'required',
        'pst_codec3' => 'required',
        'pst_codec4' => 'required',
        'pst_codec5' => 'required',
        'pst_porta' => 'required',
        'pst_digitos_eliminar' => 'required',
        'pst_caracteres_incluir' => 'required',
        'pst_tech_prefix' => 'required',
        'pst_qtde_simultaneas' => 'required',
        'pst_codigo_operadora' => 'required',
        'pst_complemento_callerid' => 'required'
    ];

    
}
