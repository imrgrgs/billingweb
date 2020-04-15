<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Assinante
 * @package App\Models
 * @version April 15, 2020, 12:35 pm UTC
 *
 * @property \App\Models\Representante representante
 * @property string username
 * @property string password
 * @property string name
 * @property string end1
 * @property string end2
 * @property string cep
 * @property string cidade
 * @property string bairro
 * @property string pais
 * @property integer tipo
 * @property string ddd
 * @property string fone
 * @property string sipddd
 * @property string sipfone
 * @property boolean voicemail
 * @property string email
 * @property string softphone
 * @property string datacadastro
 * @property time horacadastro
 * @property string atualizado
 * @property string empresa
 * @property string ramoatividade
 * @property string mostrar_lista
 * @property string mostrar_ativo
 * @property string estado
 * @property boolean status
 * @property boolean qtdeemail
 * @property string dtnewsletter
 * @property string ip
 * @property string|\Carbon\Carbon dtultonline
 * @property string convencional
 * @property string foto
 * @property string extensao
 * @property string telefone1
 * @property string telefone2
 * @property string telefone3
 * @property string fax
 * @property string tp_pessoa
 * @property string cnpj_cpf
 * @property integer representante_id
 * @property number percacrescimo
 * @property string mudasenha
 * @property string server1
 * @property string server2
 * @property string server3
 * @property string tempos
 * @property string pode_atualizar
 * @property integer aparelho_id
 * @property string login_agente
 * @property string avisar_fimcreditos
 * @property string login_grupo
 * @property string prepos
 * @property integer plano_id
 * @property string senha_painel
 * @property number vlr_fixo
 * @property number vlr_celular
 * @property string liberar_fixo
 * @property string liberar_celular
 * @property integer ligacoes_simultaneas
 * @property string pode_mudar_senha_ata
 * @property string protocolo
 * @property string master
 * @property string alias
 * @property string email2
 * @property string voiptovoip
 * @property number valor_voiptovoip
 * @property string linguagem
 * @property integer tabelaespecial_id
 * @property number vlr_mensalidade
 * @property integer dia_cobrar_mensalidade
 * @property number vlr_avisar_fim_cred
 * @property string liberar_ddi
 * @property string limitar_voiptovoip_vlr
 * @property string creditos_vencem
 * @property string dt_vencer_creditos
 * @property string ligar_semddd
 * @property integer tempo_maximo_ligacoes
 * @property string siga_me
 * @property integer dialplain_qtdeliminar
 * @property string dialplain_adicionar
 * @property integer pin_number
 * @property string user_cabine
 * @property integer id_cabine
 * @property string mac_address
 * @property string tp_tarifacao
 * @property string nrserie_ata
 * @property string gravar_chamadas
 * @property string assinante_indicador
 * @property number comissao_indicador
 * @property string mostrar_valores
 * @property string tp_protocolo
 * @property number taxa_conexao
 * @property number taxa_desconexao
 * @property string retornar_callingcard
 * @property string ligacao_callback
 * @property integer sgs_comecar_cobrar
 * @property integer sgs_comecar_cobrar_celular
 * @property string ddd_a_bloquear
 * @property string bloquear_fixo_celular_todas
 * @property integer gruposvoip_id
 * @property string|\Carbon\Carbon dt_ult_reducao_simultaneas
 * @property string qualify
 * @property integer tech_prefix
 * @property integer dialplain_diferenciado_inter_eliminar
 * @property string usa_4003
 * @property number venda_4003
 * @property number venda_0800_fixo
 * @property number venda_0800_celular
 * @property string socobrar_4003_secompletar
 * @property string cobrar_4003_emumatarifaso
 * @property string tipo_lig_permitidas_4003
 * @property string tp_tarifacao_4003
 * @property string usa_sms
 * @property number venda_sms
 * @property integer usr_terminacao_id
 * @property integer usr_terminacao2_id
 * @property integer usr_terminacao3_id
 * @property integer usr_terminacao_cel_id
 * @property integer usr_terminacao2_cel_id
 * @property integer usr_terminacao3_cel_id
 * @property integer usr_terminacao_int_id
 * @property integer usr_terminacao2_int_id
 * @property integer usr_terminacao3_int_id
 * @property string falar_saldo
 * @property string tipo_cliente
 * @property number valor_contacorrente
 * @property string pode_ficar_negativo
 * @property string usr_observacoes
 * @property string enviar_calerid
 * @property number limite_ficar_negativo
 * @property string pode_transferir
 * @property string reinvite_audio
 * @property integer taxa_conexao_segundos
 * @property integer taxa_desconexao_segundos
 * @property integer tabelaespecial_callingcard_id
 * @property string portabilidade
 * @property string codigo_rn_liberado
 * @property integer tipo_restricao_ligacao
 * @property string usr_telegram_token
 * @property string usr_mostra_revenda
 * @property string acessoippainel
 */
class Assinante extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'username',
        'password',
        'name',
        'end1',
        'end2',
        'cep',
        'cidade',
        'bairro',
        'pais',
        'tipo',
        'ddd',
        'fone',
        'sipddd',
        'sipfone',
        'voicemail',
        'email',
        'softphone',
        'datacadastro',
        'horacadastro',
        'atualizado',
        'empresa',
        'ramoatividade',
        'mostrar_lista',
        'mostrar_ativo',
        'estado',
        'status',
        'qtdeemail',
        'dtnewsletter',
        'ip',
        'dtultonline',
        'convencional',
        'foto',
        'extensao',
        'telefone1',
        'telefone2',
        'telefone3',
        'fax',
        'tp_pessoa',
        'cnpj_cpf',
        'representante_id',
        'percacrescimo',
        'mudasenha',
        'server1',
        'server2',
        'server3',
        'tempos',
        'pode_atualizar',
        'aparelho_id',
        'login_agente',
        'avisar_fimcreditos',
        'login_grupo',
        'prepos',
        'plano_id',
        'senha_painel',
        'vlr_fixo',
        'vlr_celular',
        'liberar_fixo',
        'liberar_celular',
        'ligacoes_simultaneas',
        'pode_mudar_senha_ata',
        'protocolo',
        'master',
        'alias',
        'email2',
        'voiptovoip',
        'valor_voiptovoip',
        'linguagem',
        'tabelaespecial_id',
        'vlr_mensalidade',
        'dia_cobrar_mensalidade',
        'vlr_avisar_fim_cred',
        'liberar_ddi',
        'limitar_voiptovoip_vlr',
        'creditos_vencem',
        'dt_vencer_creditos',
        'ligar_semddd',
        'tempo_maximo_ligacoes',
        'siga_me',
        'dialplain_qtdeliminar',
        'dialplain_adicionar',
        'pin_number',
        'user_cabine',
        'id_cabine',
        'mac_address',
        'tp_tarifacao',
        'nrserie_ata',
        'gravar_chamadas',
        'assinante_indicador',
        'comissao_indicador',
        'mostrar_valores',
        'tp_protocolo',
        'taxa_conexao',
        'taxa_desconexao',
        'retornar_callingcard',
        'ligacao_callback',
        'sgs_comecar_cobrar',
        'sgs_comecar_cobrar_celular',
        'ddd_a_bloquear',
        'bloquear_fixo_celular_todas',
        'gruposvoip_id',
        'dt_ult_reducao_simultaneas',
        'qualify',
        'tech_prefix',
        'dialplain_diferenciado_inter_eliminar',
        'usa_4003',
        'venda_4003',
        'venda_0800_fixo',
        'venda_0800_celular',
        'socobrar_4003_secompletar',
        'cobrar_4003_emumatarifaso',
        'tipo_lig_permitidas_4003',
        'tp_tarifacao_4003',
        'usa_sms',
        'venda_sms',
        'usr_terminacao_id',
        'usr_terminacao2_id',
        'usr_terminacao3_id',
        'usr_terminacao_cel_id',
        'usr_terminacao2_cel_id',
        'usr_terminacao3_cel_id',
        'usr_terminacao_int_id',
        'usr_terminacao2_int_id',
        'usr_terminacao3_int_id',
        'falar_saldo',
        'tipo_cliente',
        'valor_contacorrente',
        'pode_ficar_negativo',
        'usr_observacoes',
        'enviar_calerid',
        'limite_ficar_negativo',
        'pode_transferir',
        'reinvite_audio',
        'taxa_conexao_segundos',
        'taxa_desconexao_segundos',
        'tabelaespecial_callingcard_id',
        'portabilidade',
        'codigo_rn_liberado',
        'tipo_restricao_ligacao',
        'usr_telegram_token',
        'usr_mostra_revenda',
        'acessoippainel'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'username' => 'string',
        'password' => 'string',
        'name' => 'string',
        'end1' => 'string',
        'end2' => 'string',
        'cep' => 'string',
        'cidade' => 'string',
        'bairro' => 'string',
        'pais' => 'string',
        'tipo' => 'integer',
        'ddd' => 'string',
        'fone' => 'string',
        'sipddd' => 'string',
        'sipfone' => 'string',
        'voicemail' => 'boolean',
        'email' => 'string',
        'softphone' => 'string',
        'datacadastro' => 'date',
        'atualizado' => 'string',
        'empresa' => 'string',
        'ramoatividade' => 'string',
        'mostrar_lista' => 'string',
        'mostrar_ativo' => 'string',
        'estado' => 'string',
        'status' => 'boolean',
        'qtdeemail' => 'boolean',
        'dtnewsletter' => 'date',
        'ip' => 'string',
        'dtultonline' => 'datetime',
        'convencional' => 'string',
        'foto' => 'string',
        'extensao' => 'string',
        'telefone1' => 'string',
        'telefone2' => 'string',
        'telefone3' => 'string',
        'fax' => 'string',
        'tp_pessoa' => 'string',
        'cnpj_cpf' => 'string',
        'representante_id' => 'integer',
        'percacrescimo' => 'float',
        'mudasenha' => 'string',
        'server1' => 'string',
        'server2' => 'string',
        'server3' => 'date',
        'tempos' => 'string',
        'pode_atualizar' => 'string',
        'aparelho_id' => 'integer',
        'login_agente' => 'string',
        'avisar_fimcreditos' => 'string',
        'login_grupo' => 'string',
        'prepos' => 'string',
        'plano_id' => 'integer',
        'senha_painel' => 'string',
        'vlr_fixo' => 'float',
        'vlr_celular' => 'float',
        'liberar_fixo' => 'string',
        'liberar_celular' => 'string',
        'ligacoes_simultaneas' => 'integer',
        'pode_mudar_senha_ata' => 'string',
        'protocolo' => 'string',
        'master' => 'string',
        'alias' => 'string',
        'email2' => 'string',
        'voiptovoip' => 'string',
        'valor_voiptovoip' => 'float',
        'linguagem' => 'string',
        'tabelaespecial_id' => 'integer',
        'vlr_mensalidade' => 'float',
        'dia_cobrar_mensalidade' => 'integer',
        'vlr_avisar_fim_cred' => 'float',
        'liberar_ddi' => 'string',
        'limitar_voiptovoip_vlr' => 'string',
        'creditos_vencem' => 'string',
        'dt_vencer_creditos' => 'date',
        'ligar_semddd' => 'string',
        'tempo_maximo_ligacoes' => 'integer',
        'siga_me' => 'string',
        'dialplain_qtdeliminar' => 'integer',
        'dialplain_adicionar' => 'string',
        'pin_number' => 'integer',
        'user_cabine' => 'string',
        'id_cabine' => 'integer',
        'mac_address' => 'string',
        'tp_tarifacao' => 'string',
        'nrserie_ata' => 'string',
        'gravar_chamadas' => 'string',
        'assinante_indicador' => 'string',
        'comissao_indicador' => 'float',
        'mostrar_valores' => 'string',
        'tp_protocolo' => 'string',
        'taxa_conexao' => 'float',
        'taxa_desconexao' => 'float',
        'retornar_callingcard' => 'string',
        'ligacao_callback' => 'string',
        'sgs_comecar_cobrar' => 'integer',
        'sgs_comecar_cobrar_celular' => 'integer',
        'ddd_a_bloquear' => 'string',
        'bloquear_fixo_celular_todas' => 'string',
        'gruposvoip_id' => 'integer',
        'dt_ult_reducao_simultaneas' => 'datetime',
        'qualify' => 'string',
        'tech_prefix' => 'integer',
        'dialplain_diferenciado_inter_eliminar' => 'integer',
        'usa_4003' => 'string',
        'venda_4003' => 'float',
        'venda_0800_fixo' => 'float',
        'venda_0800_celular' => 'float',
        'socobrar_4003_secompletar' => 'string',
        'cobrar_4003_emumatarifaso' => 'string',
        'tipo_lig_permitidas_4003' => 'string',
        'tp_tarifacao_4003' => 'string',
        'usa_sms' => 'string',
        'venda_sms' => 'float',
        'usr_terminacao_id' => 'integer',
        'usr_terminacao2_id' => 'integer',
        'usr_terminacao3_id' => 'integer',
        'usr_terminacao_cel_id' => 'integer',
        'usr_terminacao2_cel_id' => 'integer',
        'usr_terminacao3_cel_id' => 'integer',
        'usr_terminacao_int_id' => 'integer',
        'usr_terminacao2_int_id' => 'integer',
        'usr_terminacao3_int_id' => 'integer',
        'falar_saldo' => 'string',
        'tipo_cliente' => 'string',
        'valor_contacorrente' => 'float',
        'pode_ficar_negativo' => 'string',
        'usr_observacoes' => 'string',
        'enviar_calerid' => 'string',
        'limite_ficar_negativo' => 'float',
        'pode_transferir' => 'string',
        'reinvite_audio' => 'string',
        'taxa_conexao_segundos' => 'integer',
        'taxa_desconexao_segundos' => 'integer',
        'tabelaespecial_callingcard_id' => 'integer',
        'portabilidade' => 'string',
        'codigo_rn_liberado' => 'string',
        'tipo_restricao_ligacao' => 'integer',
        'usr_telegram_token' => 'string',
        'usr_mostra_revenda' => 'string',
        'acessoippainel' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipo' => 'required',
        'voicemail' => 'required',
        'status' => 'required',
        'percacrescimo' => 'required',
        'server1' => 'required',
        'server2' => 'required',
        'tempos' => 'required',
        'pode_atualizar' => 'required',
        'vlr_fixo' => 'required',
        'vlr_celular' => 'required',
        'master' => 'required',
        'vlr_mensalidade' => 'required',
        'dia_cobrar_mensalidade' => 'required',
        'vlr_avisar_fim_cred' => 'required',
        'liberar_ddi' => 'required',
        'limitar_voiptovoip_vlr' => 'required',
        'creditos_vencem' => 'required',
        'tempo_maximo_ligacoes' => 'required',
        'dialplain_qtdeliminar' => 'required',
        'pin_number' => 'required',
        'user_cabine' => 'required',
        'id_cabine' => 'required',
        'gravar_chamadas' => 'required',
        'comissao_indicador' => 'required',
        'mostrar_valores' => 'required',
        'tp_protocolo' => 'required',
        'taxa_conexao' => 'required',
        'taxa_desconexao' => 'required',
        'retornar_callingcard' => 'required',
        'ligacao_callback' => 'required',
        'sgs_comecar_cobrar' => 'required',
        'sgs_comecar_cobrar_celular' => 'required',
        'dt_ult_reducao_simultaneas' => 'required',
        'qualify' => 'required',
        'tech_prefix' => 'required',
        'dialplain_diferenciado_inter_eliminar' => 'required',
        'usa_4003' => 'required',
        'venda_4003' => 'required',
        'venda_0800_fixo' => 'required',
        'venda_0800_celular' => 'required',
        'socobrar_4003_secompletar' => 'required',
        'cobrar_4003_emumatarifaso' => 'required',
        'tipo_lig_permitidas_4003' => 'required',
        'tp_tarifacao_4003' => 'required',
        'usa_sms' => 'required',
        'venda_sms' => 'required',
        'falar_saldo' => 'required',
        'tipo_cliente' => 'required',
        'valor_contacorrente' => 'required',
        'pode_ficar_negativo' => 'required',
        'usr_observacoes' => 'required',
        'enviar_calerid' => 'required',
        'limite_ficar_negativo' => 'required',
        'pode_transferir' => 'required',
        'reinvite_audio' => 'required',
        'taxa_conexao_segundos' => 'required',
        'taxa_desconexao_segundos' => 'required',
        'portabilidade' => 'required',
        'codigo_rn_liberado' => 'required',
        'tipo_restricao_ligacao' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function representante()
    {
        return $this->belongsTo(\App\Models\Representante::class, 'representante_id');
    }
}
