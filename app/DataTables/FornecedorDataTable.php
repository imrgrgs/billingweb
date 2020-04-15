<?php

namespace App\DataTables;

use App\Models\Fornecedor;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class FornecedorDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'fornecedores.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Fornecedor $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Fornecedor $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false, 'title' => __('crud.action')])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    [
                       'extend' => 'create',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-plus"></i> ' .__('auth.app.create').''
                    ],
                    [
                       'extend' => 'export',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-download"></i> ' .__('auth.app.export').''
                    ],
                    [
                       'extend' => 'print',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-print"></i> ' .__('auth.app.print').''
                    ],
                    [
                       'extend' => 'reset',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-undo"></i> ' .__('auth.app.reset').''
                    ],
                    [
                       'extend' => 'reload',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-refresh"></i> ' .__('auth.app.reload').''
                    ],
                ],
                 'language' => [
                   'url' => url('//cdn.datatables.net/plug-ins/1.10.12/i18n/English.json'),
                 ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'for_admin_id' => new Column(['title' => __('models/fornecedor.fields.for_admin_id'), 'data' => 'for_admin_id']),
            'for_razao' => new Column(['title' => __('models/fornecedor.fields.for_razao'), 'data' => 'for_razao']),
            'for_contexto' => new Column(['title' => __('models/fornecedor.fields.for_contexto'), 'data' => 'for_contexto']),
            'for_qualvalor' => new Column(['title' => __('models/fornecedor.fields.for_qualvalor'), 'data' => 'for_qualvalor']),
            'for_cnpj' => new Column(['title' => __('models/fornecedor.fields.for_cnpj'), 'data' => 'for_cnpj']),
            'for_inscrest' => new Column(['title' => __('models/fornecedor.fields.for_inscrest'), 'data' => 'for_inscrest']),
            'for_fantasia' => new Column(['title' => __('models/fornecedor.fields.for_fantasia'), 'data' => 'for_fantasia']),
            'for_rua' => new Column(['title' => __('models/fornecedor.fields.for_rua'), 'data' => 'for_rua']),
            'for_complem' => new Column(['title' => __('models/fornecedor.fields.for_complem'), 'data' => 'for_complem']),
            'for_bairro' => new Column(['title' => __('models/fornecedor.fields.for_bairro'), 'data' => 'for_bairro']),
            'for_cidade' => new Column(['title' => __('models/fornecedor.fields.for_cidade'), 'data' => 'for_cidade']),
            'for_estado' => new Column(['title' => __('models/fornecedor.fields.for_estado'), 'data' => 'for_estado']),
            'for_cep' => new Column(['title' => __('models/fornecedor.fields.for_cep'), 'data' => 'for_cep']),
            'for_email' => new Column(['title' => __('models/fornecedor.fields.for_email'), 'data' => 'for_email']),
            'for_banco' => new Column(['title' => __('models/fornecedor.fields.for_banco'), 'data' => 'for_banco']),
            'for_agencia' => new Column(['title' => __('models/fornecedor.fields.for_agencia'), 'data' => 'for_agencia']),
            'for_conta' => new Column(['title' => __('models/fornecedor.fields.for_conta'), 'data' => 'for_conta']),
            'for_saldo' => new Column(['title' => __('models/fornecedor.fields.for_saldo'), 'data' => 'for_saldo']),
            'for_login' => new Column(['title' => __('models/fornecedor.fields.for_login'), 'data' => 'for_login']),
            'for_senha' => new Column(['title' => __('models/fornecedor.fields.for_senha'), 'data' => 'for_senha']),
            'for_mudasenha' => new Column(['title' => __('models/fornecedor.fields.for_mudasenha'), 'data' => 'for_mudasenha']),
            'for_telefone1' => new Column(['title' => __('models/fornecedor.fields.for_telefone1'), 'data' => 'for_telefone1']),
            'for_telefone2' => new Column(['title' => __('models/fornecedor.fields.for_telefone2'), 'data' => 'for_telefone2']),
            'for_celular' => new Column(['title' => __('models/fornecedor.fields.for_celular'), 'data' => 'for_celular']),
            'for_status' => new Column(['title' => __('models/fornecedor.fields.for_status'), 'data' => 'for_status']),
            'for_data' => new Column(['title' => __('models/fornecedor.fields.for_data'), 'data' => 'for_data']),
            'for_basedolar' => new Column(['title' => __('models/fornecedor.fields.for_basedolar'), 'data' => 'for_basedolar']),
            'for_contato' => new Column(['title' => __('models/fornecedor.fields.for_contato'), 'data' => 'for_contato']),
            'for_saldoreal' => new Column(['title' => __('models/fornecedor.fields.for_saldoreal'), 'data' => 'for_saldoreal']),
            'for_fundador' => new Column(['title' => __('models/fornecedor.fields.for_fundador'), 'data' => 'for_fundador']),
            'for_comddi' => new Column(['title' => __('models/fornecedor.fields.for_comddi'), 'data' => 'for_comddi']),
            'for_dia_vencimento' => new Column(['title' => __('models/fornecedor.fields.for_dia_vencimento'), 'data' => 'for_dia_vencimento']),
            'for_contas_voip' => new Column(['title' => __('models/fornecedor.fields.for_contas_voip'), 'data' => 'for_contas_voip']),
            'for_valor_billing' => new Column(['title' => __('models/fornecedor.fields.for_valor_billing'), 'data' => 'for_valor_billing']),
            'for_tempo_ligacao' => new Column(['title' => __('models/fornecedor.fields.for_tempo_ligacao'), 'data' => 'for_tempo_ligacao']),
            'for_inicio_internacionais' => new Column(['title' => __('models/fornecedor.fields.for_inicio_internacionais'), 'data' => 'for_inicio_internacionais']),
            'for_inicio_nacionais' => new Column(['title' => __('models/fornecedor.fields.for_inicio_nacionais'), 'data' => 'for_inicio_nacionais']),
            'for_podemudarvlrs' => new Column(['title' => __('models/fornecedor.fields.for_podemudarvlrs'), 'data' => 'for_podemudarvlrs']),
            'for_finalizar_ligacao' => new Column(['title' => __('models/fornecedor.fields.for_finalizar_ligacao'), 'data' => 'for_finalizar_ligacao']),
            'for_sgs_comecar_cobrar' => new Column(['title' => __('models/fornecedor.fields.for_sgs_comecar_cobrar'), 'data' => 'for_sgs_comecar_cobrar']),
            'for_contas_gvt' => new Column(['title' => __('models/fornecedor.fields.for_contas_gvt'), 'data' => 'for_contas_gvt']),
            'for_mostrarassinonline' => new Column(['title' => __('models/fornecedor.fields.for_mostrarassinonline'), 'data' => 'for_mostrarassinonline']),
            'for_logo_master' => new Column(['title' => __('models/fornecedor.fields.for_logo_master'), 'data' => 'for_logo_master']),
            'for_especial' => new Column(['title' => __('models/fornecedor.fields.for_especial'), 'data' => 'for_especial']),
            'for_qtd_digitos_minimo' => new Column(['title' => __('models/fornecedor.fields.for_qtd_digitos_minimo'), 'data' => 'for_qtd_digitos_minimo']),
            'for_reinvite' => new Column(['title' => __('models/fornecedor.fields.for_reinvite'), 'data' => 'for_reinvite']),
            'for_prefvoipvoip' => new Column(['title' => __('models/fornecedor.fields.for_prefvoipvoip'), 'data' => 'for_prefvoipvoip']),
            'for_ringfalso' => new Column(['title' => __('models/fornecedor.fields.for_ringfalso'), 'data' => 'for_ringfalso']),
            'for_linguagem' => new Column(['title' => __('models/fornecedor.fields.for_linguagem'), 'data' => 'for_linguagem']),
            'for_ultimoconsumo' => new Column(['title' => __('models/fornecedor.fields.for_ultimoconsumo'), 'data' => 'for_ultimoconsumo']),
            'for_podeprocessar' => new Column(['title' => __('models/fornecedor.fields.for_podeprocessar'), 'data' => 'for_podeprocessar']),
            'for_senhaadmin' => new Column(['title' => __('models/fornecedor.fields.for_senhaadmin'), 'data' => 'for_senhaadmin']),
            'for_abrirwebphone' => new Column(['title' => __('models/fornecedor.fields.for_abrirwebphone'), 'data' => 'for_abrirwebphone']),
            'for_brpay' => new Column(['title' => __('models/fornecedor.fields.for_brpay'), 'data' => 'for_brpay']),
            'for_tempo_ligacao_cel' => new Column(['title' => __('models/fornecedor.fields.for_tempo_ligacao_cel'), 'data' => 'for_tempo_ligacao_cel']),
            'for_usar_4003' => new Column(['title' => __('models/fornecedor.fields.for_usar_4003'), 'data' => 'for_usar_4003']),
            'for_voiptovoip_semcredito' => new Column(['title' => __('models/fornecedor.fields.for_voiptovoip_semcredito'), 'data' => 'for_voiptovoip_semcredito']),
            'for_darmensagemsemcredito' => new Column(['title' => __('models/fornecedor.fields.for_darmensagemsemcredito'), 'data' => 'for_darmensagemsemcredito']),
            'for_sgs_comecar_cobrar_celular' => new Column(['title' => __('models/fornecedor.fields.for_sgs_comecar_cobrar_celular'), 'data' => 'for_sgs_comecar_cobrar_celular']),
            'for_mostrar_ligacoes_nao_cobradas' => new Column(['title' => __('models/fornecedor.fields.for_mostrar_ligacoes_nao_cobradas'), 'data' => 'for_mostrar_ligacoes_nao_cobradas']),
            'for_plataforma_exclusiva' => new Column(['title' => __('models/fornecedor.fields.for_plataforma_exclusiva'), 'data' => 'for_plataforma_exclusiva']),
            'for_limitar_digitos_ligacao' => new Column(['title' => __('models/fornecedor.fields.for_limitar_digitos_ligacao'), 'data' => 'for_limitar_digitos_ligacao']),
            'for_saldo4003' => new Column(['title' => __('models/fornecedor.fields.for_saldo4003'), 'data' => 'for_saldo4003']),
            'for_atualizado' => new Column(['title' => __('models/fornecedor.fields.for_atualizado'), 'data' => 'for_atualizado']),
            'for_venda_4003' => new Column(['title' => __('models/fornecedor.fields.for_venda_4003'), 'data' => 'for_venda_4003']),
            'for_terminacao_automatica' => new Column(['title' => __('models/fornecedor.fields.for_terminacao_automatica'), 'data' => 'for_terminacao_automatica']),
            'for_venda_0800_fixo' => new Column(['title' => __('models/fornecedor.fields.for_venda_0800_fixo'), 'data' => 'for_venda_0800_fixo']),
            'for_venda_0800_celular' => new Column(['title' => __('models/fornecedor.fields.for_venda_0800_celular'), 'data' => 'for_venda_0800_celular']),
            'for_socobrar_4003_secompletar' => new Column(['title' => __('models/fornecedor.fields.for_socobrar_4003_secompletar'), 'data' => 'for_socobrar_4003_secompletar']),
            'for_cobrar_4003_emumatarifaso' => new Column(['title' => __('models/fornecedor.fields.for_cobrar_4003_emumatarifaso'), 'data' => 'for_cobrar_4003_emumatarifaso']),
            'for_tipo_lig_permitidas_4003' => new Column(['title' => __('models/fornecedor.fields.for_tipo_lig_permitidas_4003'), 'data' => 'for_tipo_lig_permitidas_4003']),
            'for_tp_tarifacao_4003' => new Column(['title' => __('models/fornecedor.fields.for_tp_tarifacao_4003'), 'data' => 'for_tp_tarifacao_4003']),
            'for_tempo_dial_voip' => new Column(['title' => __('models/fornecedor.fields.for_tempo_dial_voip'), 'data' => 'for_tempo_dial_voip']),
            'for_tempo_dial_pstn' => new Column(['title' => __('models/fornecedor.fields.for_tempo_dial_pstn'), 'data' => 'for_tempo_dial_pstn']),
            'for_rechamar_congestion' => new Column(['title' => __('models/fornecedor.fields.for_rechamar_congestion'), 'data' => 'for_rechamar_congestion']),
            'for_rechamar_chanunavail' => new Column(['title' => __('models/fornecedor.fields.for_rechamar_chanunavail'), 'data' => 'for_rechamar_chanunavail']),
            'for_rechamar_noanswer' => new Column(['title' => __('models/fornecedor.fields.for_rechamar_noanswer'), 'data' => 'for_rechamar_noanswer']),
            'for_rechamar_busy' => new Column(['title' => __('models/fornecedor.fields.for_rechamar_busy'), 'data' => 'for_rechamar_busy']),
            'for_venda_sms' => new Column(['title' => __('models/fornecedor.fields.for_venda_sms'), 'data' => 'for_venda_sms']),
            'for_saldosms' => new Column(['title' => __('models/fornecedor.fields.for_saldosms'), 'data' => 'for_saldosms']),
            'for_valor_dolar_hoje' => new Column(['title' => __('models/fornecedor.fields.for_valor_dolar_hoje'), 'data' => 'for_valor_dolar_hoje']),
            'for_gravar_ligacoes' => new Column(['title' => __('models/fornecedor.fields.for_gravar_ligacoes'), 'data' => 'for_gravar_ligacoes']),
            'for_saldo0800cartoes' => new Column(['title' => __('models/fornecedor.fields.for_saldo0800cartoes'), 'data' => 'for_saldo0800cartoes']),
            'for_limite_lig_simultaneas' => new Column(['title' => __('models/fornecedor.fields.for_limite_lig_simultaneas'), 'data' => 'for_limite_lig_simultaneas']),
            'for_dar_mensagem_numerica' => new Column(['title' => __('models/fornecedor.fields.for_dar_mensagem_numerica'), 'data' => 'for_dar_mensagem_numerica']),
            'for_prefixo_fax' => new Column(['title' => __('models/fornecedor.fields.for_prefixo_fax'), 'data' => 'for_prefixo_fax']),
            'for_sms_provedor_proprio' => new Column(['title' => __('models/fornecedor.fields.for_sms_provedor_proprio'), 'data' => 'for_sms_provedor_proprio']),
            'for_end_url_provedor_sms' => new Column(['title' => __('models/fornecedor.fields.for_end_url_provedor_sms'), 'data' => 'for_end_url_provedor_sms']),
            'for_login_provedor_sms' => new Column(['title' => __('models/fornecedor.fields.for_login_provedor_sms'), 'data' => 'for_login_provedor_sms']),
            'for_senha_provedor_sms' => new Column(['title' => __('models/fornecedor.fields.for_senha_provedor_sms'), 'data' => 'for_senha_provedor_sms']),
            'for_texto_ddi_sms' => new Column(['title' => __('models/fornecedor.fields.for_texto_ddi_sms'), 'data' => 'for_texto_ddi_sms']),
            'for_banco2' => new Column(['title' => __('models/fornecedor.fields.for_banco2'), 'data' => 'for_banco2']),
            'for_agencia2' => new Column(['title' => __('models/fornecedor.fields.for_agencia2'), 'data' => 'for_agencia2']),
            'for_conta2' => new Column(['title' => __('models/fornecedor.fields.for_conta2'), 'data' => 'for_conta2']),
            'for_banco3' => new Column(['title' => __('models/fornecedor.fields.for_banco3'), 'data' => 'for_banco3']),
            'for_agencia3' => new Column(['title' => __('models/fornecedor.fields.for_agencia3'), 'data' => 'for_agencia3']),
            'for_conta3' => new Column(['title' => __('models/fornecedor.fields.for_conta3'), 'data' => 'for_conta3']),
            'for_usar_portabilidade' => new Column(['title' => __('models/fornecedor.fields.for_usar_portabilidade'), 'data' => 'for_usar_portabilidade']),
            'for_provedor_portabilidade' => new Column(['title' => __('models/fornecedor.fields.for_provedor_portabilidade'), 'data' => 'for_provedor_portabilidade']),
            'for_portabilidade_senha' => new Column(['title' => __('models/fornecedor.fields.for_portabilidade_senha'), 'data' => 'for_portabilidade_senha'])
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'fornecedoresdatatable_' . time();
    }
}
