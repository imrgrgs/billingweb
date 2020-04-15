<?php

namespace App\Repositories;

use App\Models\Assinante;
use App\Repositories\BaseRepository;

/**
 * Class AssinanteRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:35 pm UTC
*/

class AssinanteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Assinante::class;
    }
}
