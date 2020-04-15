<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Fornecedor
 * @package App\Models
 * @version April 15, 2020, 12:14 pm UTC
 *
 * @property \App\Models\Admin forAdmin
 * @property \Illuminate\Database\Eloquent\Collection representantes
 * @property integer for_admin_id
 * @property string for_razao
 * @property string for_contexto
 * @property integer for_qualvalor
 * @property string for_cnpj
 * @property string for_inscrest
 * @property string for_fantasia
 * @property string for_rua
 * @property string for_complem
 * @property string for_bairro
 * @property string for_cidade
 * @property string for_estado
 * @property integer for_cep
 * @property string for_email
 * @property integer for_banco
 * @property string for_agencia
 * @property string for_conta
 * @property number for_saldo
 * @property string for_login
 * @property string for_senha
 * @property string for_mudasenha
 * @property string for_telefone1
 * @property string for_telefone2
 * @property string for_celular
 * @property string for_status
 * @property string for_data
 * @property number for_basedolar
 * @property string for_contato
 * @property number for_saldoreal
 * @property string for_fundador
 * @property string for_comddi
 * @property string for_dia_vencimento
 * @property integer for_contas_voip
 * @property number for_valor_billing
 * @property integer for_tempo_ligacao
 * @property string for_inicio_internacionais
 * @property string for_inicio_nacionais
 * @property string for_podemudarvlrs
 * @property string for_finalizar_ligacao
 * @property integer for_sgs_comecar_cobrar
 * @property integer for_contas_gvt
 * @property string for_mostrarassinonline
 * @property string for_logo_master
 * @property string for_especial
 * @property integer for_qtd_digitos_minimo
 * @property string for_reinvite
 * @property string for_prefvoipvoip
 * @property string for_ringfalso
 * @property string for_linguagem
 * @property integer for_ultimoconsumo
 * @property string for_podeprocessar
 * @property string for_senhaadmin
 * @property string for_abrirwebphone
 * @property string for_brpay
 * @property integer for_tempo_ligacao_cel
 * @property string for_usar_4003
 * @property string for_voiptovoip_semcredito
 * @property string for_darmensagemsemcredito
 * @property integer for_sgs_comecar_cobrar_celular
 * @property string for_mostrar_ligacoes_nao_cobradas
 * @property string for_plataforma_exclusiva
 * @property string for_limitar_digitos_ligacao
 * @property number for_saldo4003
 * @property string for_atualizado
 * @property number for_venda_4003
 * @property string for_terminacao_automatica
 * @property number for_venda_0800_fixo
 * @property number for_venda_0800_celular
 * @property string for_socobrar_4003_secompletar
 * @property string for_cobrar_4003_emumatarifaso
 * @property string for_tipo_lig_permitidas_4003
 * @property string for_tp_tarifacao_4003
 * @property integer for_tempo_dial_voip
 * @property integer for_tempo_dial_pstn
 * @property string for_rechamar_congestion
 * @property string for_rechamar_chanunavail
 * @property string for_rechamar_noanswer
 * @property string for_rechamar_busy
 * @property number for_venda_sms
 * @property number for_saldosms
 * @property number for_valor_dolar_hoje
 * @property string for_gravar_ligacoes
 * @property number for_saldo0800cartoes
 * @property integer for_limite_lig_simultaneas
 * @property string for_dar_mensagem_numerica
 * @property string for_prefixo_fax
 * @property string for_sms_provedor_proprio
 * @property string for_end_url_provedor_sms
 * @property string for_login_provedor_sms
 * @property string for_senha_provedor_sms
 * @property string for_texto_ddi_sms
 * @property integer for_banco2
 * @property string for_agencia2
 * @property string for_conta2
 * @property integer for_banco3
 * @property string for_agencia3
 * @property string for_conta3
 * @property string for_usar_portabilidade
 * @property integer for_provedor_portabilidade
 * @property string for_portabilidade_senha
 */
class Fornecedor extends Model
{
    use SoftDeletes;

    public $table = 'fornecedor';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'for_admin_id',
        'for_razao',
        'for_contexto',
        'for_qualvalor',
        'for_cnpj',
        'for_inscrest',
        'for_fantasia',
        'for_rua',
        'for_complem',
        'for_bairro',
        'for_cidade',
        'for_estado',
        'for_cep',
        'for_email',
        'for_banco',
        'for_agencia',
        'for_conta',
        'for_saldo',
        'for_login',
        'for_senha',
        'for_mudasenha',
        'for_telefone1',
        'for_telefone2',
        'for_celular',
        'for_status',
        'for_data',
        'for_basedolar',
        'for_contato',
        'for_saldoreal',
        'for_fundador',
        'for_comddi',
        'for_dia_vencimento',
        'for_contas_voip',
        'for_valor_billing',
        'for_tempo_ligacao',
        'for_inicio_internacionais',
        'for_inicio_nacionais',
        'for_podemudarvlrs',
        'for_finalizar_ligacao',
        'for_sgs_comecar_cobrar',
        'for_contas_gvt',
        'for_mostrarassinonline',
        'for_logo_master',
        'for_especial',
        'for_qtd_digitos_minimo',
        'for_reinvite',
        'for_prefvoipvoip',
        'for_ringfalso',
        'for_linguagem',
        'for_ultimoconsumo',
        'for_podeprocessar',
        'for_senhaadmin',
        'for_abrirwebphone',
        'for_brpay',
        'for_tempo_ligacao_cel',
        'for_usar_4003',
        'for_voiptovoip_semcredito',
        'for_darmensagemsemcredito',
        'for_sgs_comecar_cobrar_celular',
        'for_mostrar_ligacoes_nao_cobradas',
        'for_plataforma_exclusiva',
        'for_limitar_digitos_ligacao',
        'for_saldo4003',
        'for_atualizado',
        'for_venda_4003',
        'for_terminacao_automatica',
        'for_venda_0800_fixo',
        'for_venda_0800_celular',
        'for_socobrar_4003_secompletar',
        'for_cobrar_4003_emumatarifaso',
        'for_tipo_lig_permitidas_4003',
        'for_tp_tarifacao_4003',
        'for_tempo_dial_voip',
        'for_tempo_dial_pstn',
        'for_rechamar_congestion',
        'for_rechamar_chanunavail',
        'for_rechamar_noanswer',
        'for_rechamar_busy',
        'for_venda_sms',
        'for_saldosms',
        'for_valor_dolar_hoje',
        'for_gravar_ligacoes',
        'for_saldo0800cartoes',
        'for_limite_lig_simultaneas',
        'for_dar_mensagem_numerica',
        'for_prefixo_fax',
        'for_sms_provedor_proprio',
        'for_end_url_provedor_sms',
        'for_login_provedor_sms',
        'for_senha_provedor_sms',
        'for_texto_ddi_sms',
        'for_banco2',
        'for_agencia2',
        'for_conta2',
        'for_banco3',
        'for_agencia3',
        'for_conta3',
        'for_usar_portabilidade',
        'for_provedor_portabilidade',
        'for_portabilidade_senha'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'for_id' => 'integer',
        'for_admin_id' => 'integer',
        'for_razao' => 'string',
        'for_contexto' => 'string',
        'for_qualvalor' => 'integer',
        'for_cnpj' => 'string',
        'for_inscrest' => 'string',
        'for_fantasia' => 'string',
        'for_rua' => 'string',
        'for_complem' => 'string',
        'for_bairro' => 'string',
        'for_cidade' => 'string',
        'for_estado' => 'string',
        'for_cep' => 'integer',
        'for_email' => 'string',
        'for_banco' => 'integer',
        'for_agencia' => 'string',
        'for_conta' => 'string',
        'for_saldo' => 'float',
        'for_login' => 'string',
        'for_senha' => 'string',
        'for_mudasenha' => 'string',
        'for_telefone1' => 'string',
        'for_telefone2' => 'string',
        'for_celular' => 'string',
        'for_status' => 'string',
        'for_data' => 'date',
        'for_basedolar' => 'float',
        'for_contato' => 'string',
        'for_saldoreal' => 'float',
        'for_fundador' => 'string',
        'for_comddi' => 'string',
        'for_dia_vencimento' => 'string',
        'for_contas_voip' => 'integer',
        'for_valor_billing' => 'float',
        'for_tempo_ligacao' => 'integer',
        'for_inicio_internacionais' => 'string',
        'for_inicio_nacionais' => 'string',
        'for_podemudarvlrs' => 'string',
        'for_finalizar_ligacao' => 'string',
        'for_sgs_comecar_cobrar' => 'integer',
        'for_contas_gvt' => 'integer',
        'for_mostrarassinonline' => 'string',
        'for_logo_master' => 'string',
        'for_especial' => 'string',
        'for_qtd_digitos_minimo' => 'integer',
        'for_reinvite' => 'string',
        'for_prefvoipvoip' => 'string',
        'for_ringfalso' => 'string',
        'for_linguagem' => 'string',
        'for_ultimoconsumo' => 'integer',
        'for_podeprocessar' => 'string',
        'for_senhaadmin' => 'string',
        'for_abrirwebphone' => 'string',
        'for_brpay' => 'string',
        'for_tempo_ligacao_cel' => 'integer',
        'for_usar_4003' => 'string',
        'for_voiptovoip_semcredito' => 'string',
        'for_darmensagemsemcredito' => 'string',
        'for_sgs_comecar_cobrar_celular' => 'integer',
        'for_mostrar_ligacoes_nao_cobradas' => 'string',
        'for_plataforma_exclusiva' => 'string',
        'for_limitar_digitos_ligacao' => 'string',
        'for_saldo4003' => 'float',
        'for_atualizado' => 'string',
        'for_venda_4003' => 'float',
        'for_terminacao_automatica' => 'string',
        'for_venda_0800_fixo' => 'float',
        'for_venda_0800_celular' => 'float',
        'for_socobrar_4003_secompletar' => 'string',
        'for_cobrar_4003_emumatarifaso' => 'string',
        'for_tipo_lig_permitidas_4003' => 'string',
        'for_tp_tarifacao_4003' => 'string',
        'for_tempo_dial_voip' => 'integer',
        'for_tempo_dial_pstn' => 'integer',
        'for_rechamar_congestion' => 'string',
        'for_rechamar_chanunavail' => 'string',
        'for_rechamar_noanswer' => 'string',
        'for_rechamar_busy' => 'string',
        'for_venda_sms' => 'float',
        'for_saldosms' => 'float',
        'for_valor_dolar_hoje' => 'float',
        'for_gravar_ligacoes' => 'string',
        'for_saldo0800cartoes' => 'float',
        'for_limite_lig_simultaneas' => 'integer',
        'for_dar_mensagem_numerica' => 'string',
        'for_prefixo_fax' => 'string',
        'for_sms_provedor_proprio' => 'string',
        'for_end_url_provedor_sms' => 'string',
        'for_login_provedor_sms' => 'string',
        'for_senha_provedor_sms' => 'string',
        'for_texto_ddi_sms' => 'string',
        'for_banco2' => 'integer',
        'for_agencia2' => 'string',
        'for_conta2' => 'string',
        'for_banco3' => 'integer',
        'for_agencia3' => 'string',
        'for_conta3' => 'string',
        'for_usar_portabilidade' => 'string',
        'for_provedor_portabilidade' => 'integer',
        'for_portabilidade_senha' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'for_tempo_ligacao' => 'required',
        'for_sgs_comecar_cobrar' => 'required',
        'for_contas_gvt' => 'required',
        'for_ringfalso' => 'required',
        'for_ultimoconsumo' => 'required',
        'for_podeprocessar' => 'required',
        'for_abrirwebphone' => 'required',
        'for_brpay' => 'required',
        'for_tempo_ligacao_cel' => 'required',
        'for_usar_4003' => 'required',
        'for_voiptovoip_semcredito' => 'required',
        'for_darmensagemsemcredito' => 'required',
        'for_sgs_comecar_cobrar_celular' => 'required',
        'for_mostrar_ligacoes_nao_cobradas' => 'required',
        'for_plataforma_exclusiva' => 'required',
        'for_limitar_digitos_ligacao' => 'required',
        'for_saldo4003' => 'required',
        'for_atualizado' => 'required',
        'for_terminacao_automatica' => 'required',
        'for_venda_0800_fixo' => 'required',
        'for_venda_0800_celular' => 'required',
        'for_socobrar_4003_secompletar' => 'required',
        'for_cobrar_4003_emumatarifaso' => 'required',
        'for_tipo_lig_permitidas_4003' => 'required',
        'for_tp_tarifacao_4003' => 'required',
        'for_tempo_dial_voip' => 'required',
        'for_tempo_dial_pstn' => 'required',
        'for_rechamar_congestion' => 'required',
        'for_rechamar_chanunavail' => 'required',
        'for_venda_sms' => 'required',
        'for_saldosms' => 'required',
        'for_valor_dolar_hoje' => 'required',
        'for_gravar_ligacoes' => 'required',
        'for_saldo0800cartoes' => 'required',
        'for_limite_lig_simultaneas' => 'required',
        'for_dar_mensagem_numerica' => 'required',
        'for_prefixo_fax' => 'required',
        'for_sms_provedor_proprio' => 'required',
        'for_end_url_provedor_sms' => 'required',
        'for_login_provedor_sms' => 'required',
        'for_senha_provedor_sms' => 'required',
        'for_texto_ddi_sms' => 'required',
        'for_banco2' => 'required',
        'for_agencia2' => 'required',
        'for_conta2' => 'required',
        'for_banco3' => 'required',
        'for_agencia3' => 'required',
        'for_conta3' => 'required',
        'for_usar_portabilidade' => 'required',
        'for_provedor_portabilidade' => 'required',
        'for_portabilidade_senha' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function forAdmin()
    {
        return $this->belongsTo(\App\Models\Admin::class, 'for_admin_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function representantes()
    {
        return $this->hasMany(\App\Models\Representante::class, 'rep_fornecedor_id');
    }
}
