<?php

namespace App\Repositories;

use App\Models\Fornecedor;
use App\Repositories\BaseRepository;

/**
 * Class FornecedorRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:14 pm UTC
*/

class FornecedorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Fornecedor::class;
    }
}
