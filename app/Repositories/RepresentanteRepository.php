<?php

namespace App\Repositories;

use App\Models\Representante;
use App\Repositories\BaseRepository;

/**
 * Class RepresentanteRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:28 pm UTC
*/

class RepresentanteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Representante::class;
    }
}
