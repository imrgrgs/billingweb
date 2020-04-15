<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Representante
 * @package App\Models
 * @version April 15, 2020, 12:28 pm UTC
 *
 * @property \App\Models\Fornecedor repFornecedor
 * @property \Illuminate\Database\Eloquent\Collection agentes
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer rep_fornecedor_id
 * @property string rep_razao
 * @property string rep_documento
 * @property string rep_inscrest
 * @property string rep_fantasia
 * @property string rep_rua
 * @property string rep_complem
 * @property string rep_bairro
 * @property string rep_cidade
 * @property string rep_estado
 * @property integer rep_cep
 * @property string rep_email
 * @property integer rep_banco
 * @property string rep_agencia
 * @property string rep_conta
 * @property number rep_saldo
 * @property string rep_login
 * @property string rep_senha
 * @property string rep_mudasenha
 * @property string rep_telefone1
 * @property string rep_telefone2
 * @property string rep_celular
 * @property string rep_status
 * @property number rep_perccomissao
 * @property string rep_data
 * @property string rep_contato
 * @property number rep_percacrescimo
 * @property number rep_saldoreal
 * @property string rep_nomebanco
 * @property string rep_tpconta
 * @property string rep_nomebanco2
 * @property string rep_tpconta2
 * @property integer rep_banco2
 * @property string rep_agencia2
 * @property string rep_conta2
 * @property string rep_nomebanco3
 * @property string rep_tpconta3
 * @property integer rep_banco3
 * @property string rep_agencia3
 * @property string rep_conta3
 * @property string rep_tptarifa
 * @property string rep_usarpospago
 * @property string rep_atualizado
 * @property string rep_criarcontas
 * @property integer rep_terminacao_id
 * @property integer rep_terminacao2_id
 * @property integer rep_terminacao3_id
 * @property integer rep_terminacao_cel_id
 * @property integer rep_terminacao2_cel_id
 * @property integer rep_terminacao3_cel_id
 * @property integer rep_terminacao_int_id
 * @property integer rep_terminacao2_int_id
 * @property integer rep_terminacao3_int_id
 * @property string rep_cobrar_voipvoip
 * @property string rep_linguagem
 * @property integer rep_tabelaespecial_id
 * @property integer rep_lig_simultaneas
 * @property number rep_vlrporconta
 * @property integer rep_diacobranca
 * @property integer rep_sgs_comecar_cobrar
 * @property string rep_usa_cabines
 * @property string rep_avisar_fimcreditos
 * @property number rep_vlrmin_avisar
 * @property integer rep_sgs_comecar_cobrar_celular
 * @property string rep_usa_4003
 * @property number rep_venda_4003
 * @property number rep_venda_0800_fixo
 * @property number rep_venda_0800_celular
 * @property string rep_socobrar_4003_secompletar
 * @property string rep_cobrar_4003_emumatarifaso
 * @property string rep_tipo_lig_permitidas_4003
 * @property string rep_tp_tarifacao_4003
 * @property string rep_usa_sms
 * @property number rep_venda_sms
 * @property number rep_vlr_min_voip2voip
 * @property integer rep_limite_lig_simultaneas
 * @property string rep_ficar_negativo
 * @property number rep_limite_ficar_negativo
 * @property string rep_assinante_cartoes
 * @property string rep_logo_revenda
 * @property string rep_gravar_chamadas
 * @property string rep_falar_codigo_erros
 * @property string rep_host_smtp
 * @property string rep_cripto_smtp
 * @property integer rep_port_smtp
 * @property string rep_usuario_smtp
 * @property string rep_password_smtp
 * @property number rep_vlr_minimo_credito
 * @property string rep_recibo_deposito_obrigatorio
 */
class Representante extends Model
{
    use SoftDeletes;

    public $table = 'representante';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'rep_fornecedor_id',
        'rep_razao',
        'rep_documento',
        'rep_inscrest',
        'rep_fantasia',
        'rep_rua',
        'rep_complem',
        'rep_bairro',
        'rep_cidade',
        'rep_estado',
        'rep_cep',
        'rep_email',
        'rep_banco',
        'rep_agencia',
        'rep_conta',
        'rep_saldo',
        'rep_login',
        'rep_senha',
        'rep_mudasenha',
        'rep_telefone1',
        'rep_telefone2',
        'rep_celular',
        'rep_status',
        'rep_perccomissao',
        'rep_data',
        'rep_contato',
        'rep_percacrescimo',
        'rep_saldoreal',
        'rep_nomebanco',
        'rep_tpconta',
        'rep_nomebanco2',
        'rep_tpconta2',
        'rep_banco2',
        'rep_agencia2',
        'rep_conta2',
        'rep_nomebanco3',
        'rep_tpconta3',
        'rep_banco3',
        'rep_agencia3',
        'rep_conta3',
        'rep_tptarifa',
        'rep_usarpospago',
        'rep_atualizado',
        'rep_criarcontas',
        'rep_terminacao_id',
        'rep_terminacao2_id',
        'rep_terminacao3_id',
        'rep_terminacao_cel_id',
        'rep_terminacao2_cel_id',
        'rep_terminacao3_cel_id',
        'rep_terminacao_int_id',
        'rep_terminacao2_int_id',
        'rep_terminacao3_int_id',
        'rep_cobrar_voipvoip',
        'rep_linguagem',
        'rep_tabelaespecial_id',
        'rep_lig_simultaneas',
        'rep_vlrporconta',
        'rep_diacobranca',
        'rep_sgs_comecar_cobrar',
        'rep_usa_cabines',
        'rep_avisar_fimcreditos',
        'rep_vlrmin_avisar',
        'rep_sgs_comecar_cobrar_celular',
        'rep_usa_4003',
        'rep_venda_4003',
        'rep_venda_0800_fixo',
        'rep_venda_0800_celular',
        'rep_socobrar_4003_secompletar',
        'rep_cobrar_4003_emumatarifaso',
        'rep_tipo_lig_permitidas_4003',
        'rep_tp_tarifacao_4003',
        'rep_usa_sms',
        'rep_venda_sms',
        'rep_vlr_min_voip2voip',
        'rep_limite_lig_simultaneas',
        'rep_ficar_negativo',
        'rep_limite_ficar_negativo',
        'rep_assinante_cartoes',
        'rep_logo_revenda',
        'rep_gravar_chamadas',
        'rep_falar_codigo_erros',
        'rep_host_smtp',
        'rep_cripto_smtp',
        'rep_port_smtp',
        'rep_usuario_smtp',
        'rep_password_smtp',
        'rep_vlr_minimo_credito',
        'rep_recibo_deposito_obrigatorio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'rep_id' => 'integer',
        'rep_fornecedor_id' => 'integer',
        'rep_razao' => 'string',
        'rep_documento' => 'string',
        'rep_inscrest' => 'string',
        'rep_fantasia' => 'string',
        'rep_rua' => 'string',
        'rep_complem' => 'string',
        'rep_bairro' => 'string',
        'rep_cidade' => 'string',
        'rep_estado' => 'string',
        'rep_cep' => 'integer',
        'rep_email' => 'string',
        'rep_banco' => 'integer',
        'rep_agencia' => 'string',
        'rep_conta' => 'string',
        'rep_saldo' => 'float',
        'rep_login' => 'string',
        'rep_senha' => 'string',
        'rep_mudasenha' => 'string',
        'rep_telefone1' => 'string',
        'rep_telefone2' => 'string',
        'rep_celular' => 'string',
        'rep_status' => 'string',
        'rep_perccomissao' => 'float',
        'rep_data' => 'date',
        'rep_contato' => 'string',
        'rep_percacrescimo' => 'float',
        'rep_saldoreal' => 'float',
        'rep_nomebanco' => 'string',
        'rep_tpconta' => 'string',
        'rep_nomebanco2' => 'string',
        'rep_tpconta2' => 'string',
        'rep_banco2' => 'integer',
        'rep_agencia2' => 'string',
        'rep_conta2' => 'string',
        'rep_nomebanco3' => 'string',
        'rep_tpconta3' => 'string',
        'rep_banco3' => 'integer',
        'rep_agencia3' => 'string',
        'rep_conta3' => 'string',
        'rep_tptarifa' => 'string',
        'rep_usarpospago' => 'string',
        'rep_atualizado' => 'string',
        'rep_criarcontas' => 'string',
        'rep_terminacao_id' => 'integer',
        'rep_terminacao2_id' => 'integer',
        'rep_terminacao3_id' => 'integer',
        'rep_terminacao_cel_id' => 'integer',
        'rep_terminacao2_cel_id' => 'integer',
        'rep_terminacao3_cel_id' => 'integer',
        'rep_terminacao_int_id' => 'integer',
        'rep_terminacao2_int_id' => 'integer',
        'rep_terminacao3_int_id' => 'integer',
        'rep_cobrar_voipvoip' => 'string',
        'rep_linguagem' => 'string',
        'rep_tabelaespecial_id' => 'integer',
        'rep_lig_simultaneas' => 'integer',
        'rep_vlrporconta' => 'float',
        'rep_diacobranca' => 'integer',
        'rep_sgs_comecar_cobrar' => 'integer',
        'rep_usa_cabines' => 'string',
        'rep_avisar_fimcreditos' => 'string',
        'rep_vlrmin_avisar' => 'float',
        'rep_sgs_comecar_cobrar_celular' => 'integer',
        'rep_usa_4003' => 'string',
        'rep_venda_4003' => 'float',
        'rep_venda_0800_fixo' => 'float',
        'rep_venda_0800_celular' => 'float',
        'rep_socobrar_4003_secompletar' => 'string',
        'rep_cobrar_4003_emumatarifaso' => 'string',
        'rep_tipo_lig_permitidas_4003' => 'string',
        'rep_tp_tarifacao_4003' => 'string',
        'rep_usa_sms' => 'string',
        'rep_venda_sms' => 'float',
        'rep_vlr_min_voip2voip' => 'float',
        'rep_limite_lig_simultaneas' => 'integer',
        'rep_ficar_negativo' => 'string',
        'rep_limite_ficar_negativo' => 'float',
        'rep_assinante_cartoes' => 'string',
        'rep_logo_revenda' => 'string',
        'rep_gravar_chamadas' => 'string',
        'rep_falar_codigo_erros' => 'string',
        'rep_host_smtp' => 'string',
        'rep_cripto_smtp' => 'string',
        'rep_port_smtp' => 'integer',
        'rep_usuario_smtp' => 'string',
        'rep_password_smtp' => 'string',
        'rep_vlr_minimo_credito' => 'float',
        'rep_recibo_deposito_obrigatorio' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'rep_percacrescimo' => 'required',
        'rep_banco2' => 'required',
        'rep_banco3' => 'required',
        'rep_cobrar_voipvoip' => 'required',
        'rep_lig_simultaneas' => 'required',
        'rep_sgs_comecar_cobrar' => 'required',
        'rep_usa_cabines' => 'required',
        'rep_avisar_fimcreditos' => 'required',
        'rep_vlrmin_avisar' => 'required',
        'rep_sgs_comecar_cobrar_celular' => 'required',
        'rep_usa_4003' => 'required',
        'rep_venda_4003' => 'required',
        'rep_venda_0800_fixo' => 'required',
        'rep_venda_0800_celular' => 'required',
        'rep_socobrar_4003_secompletar' => 'required',
        'rep_cobrar_4003_emumatarifaso' => 'required',
        'rep_tipo_lig_permitidas_4003' => 'required',
        'rep_tp_tarifacao_4003' => 'required',
        'rep_usa_sms' => 'required',
        'rep_venda_sms' => 'required',
        'rep_vlr_min_voip2voip' => 'required',
        'rep_limite_lig_simultaneas' => 'required',
        'rep_ficar_negativo' => 'required',
        'rep_limite_ficar_negativo' => 'required',
        'rep_assinante_cartoes' => 'required',
        'rep_logo_revenda' => 'required',
        'rep_gravar_chamadas' => 'required',
        'rep_falar_codigo_erros' => 'required',
        'rep_vlr_minimo_credito' => 'required',
        'rep_recibo_deposito_obrigatorio' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function repFornecedor()
    {
        return $this->belongsTo(\App\Models\Fornecedor::class, 'rep_fornecedor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function agentes()
    {
        return $this->hasMany(\App\Models\Agente::class, 'age_representante_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function users()
    {
        return $this->hasMany(\App\Models\User::class, 'representante_id');
    }
}
