<div class="table-responsive">
    <table class="table" id="terminacaos-table">
        <thead>
            <tr>
                <th>@lang('models/terminacao.fields.pst_nome')</th>
        <th>@lang('models/terminacao.fields.pst_apelido')</th>
        <th>@lang('models/terminacao.fields.pst_extension')</th>
        <th>@lang('models/terminacao.fields.pst_fornecedor_id')</th>
        <th>@lang('models/terminacao.fields.pst_del_prefix')</th>
        <th>@lang('models/terminacao.fields.pst_channel')</th>
        <th>@lang('models/terminacao.fields.pst_status')</th>
        <th>@lang('models/terminacao.fields.pst_celular')</th>
        <th>@lang('models/terminacao.fields.pst_fixo')</th>
        <th>@lang('models/terminacao.fields.pst_saldo')</th>
        <th>@lang('models/terminacao.fields.pst_atualizado')</th>
        <th>@lang('models/terminacao.fields.pst_vlrfixo')</th>
        <th>@lang('models/terminacao.fields.pst_vlrcelular')</th>
        <th>@lang('models/terminacao.fields.pst_tp_tarifacao')</th>
        <th>@lang('models/terminacao.fields.pst_obs')</th>
        <th>@lang('models/terminacao.fields.pst_login')</th>
        <th>@lang('models/terminacao.fields.pst_senha')</th>
        <th>@lang('models/terminacao.fields.pst_ip_proxy')</th>
        <th>@lang('models/terminacao.fields.pst_reinvite')</th>
        <th>@lang('models/terminacao.fields.pst_ringfalso')</th>
        <th>@lang('models/terminacao.fields.pst_nomeficticio')</th>
        <th>@lang('models/terminacao.fields.pst_formacobranca')</th>
        <th>@lang('models/terminacao.fields.pst_finalidade')</th>
        <th>@lang('models/terminacao.fields.pst_participa_mcusto')</th>
        <th>@lang('models/terminacao.fields.pst_id_terminador')</th>
        <th>@lang('models/terminacao.fields.pst_sgs_comecar_cobrar')</th>
        <th>@lang('models/terminacao.fields.pst_sgs_comecar_cobrar_celular')</th>
        <th>@lang('models/terminacao.fields.pst_rota_automatica')</th>
        <th>@lang('models/terminacao.fields.pst_custoemdolar')</th>
        <th>@lang('models/terminacao.fields.pst_limite_maximo')</th>
        <th>@lang('models/terminacao.fields.pst_consumido')</th>
        <th>@lang('models/terminacao.fields.pst_qtde_utilizada')</th>
        <th>@lang('models/terminacao.fields.pst_configuracao')</th>
        <th>@lang('models/terminacao.fields.pst_fazerregister')</th>
        <th>@lang('models/terminacao.fields.pst_jaincluido')</th>
        <th>@lang('models/terminacao.fields.pst_codec1')</th>
        <th>@lang('models/terminacao.fields.pst_codec2')</th>
        <th>@lang('models/terminacao.fields.pst_codec3')</th>
        <th>@lang('models/terminacao.fields.pst_codec4')</th>
        <th>@lang('models/terminacao.fields.pst_codec5')</th>
        <th>@lang('models/terminacao.fields.pst_porta')</th>
        <th>@lang('models/terminacao.fields.pst_digitos_eliminar')</th>
        <th>@lang('models/terminacao.fields.pst_caracteres_incluir')</th>
        <th>@lang('models/terminacao.fields.pst_tech_prefix')</th>
        <th>@lang('models/terminacao.fields.pst_qtde_simultaneas')</th>
        <th>@lang('models/terminacao.fields.pst_codigo_operadora')</th>
        <th>@lang('models/terminacao.fields.pst_complemento_callerid')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($terminacaos as $terminacao)
            <tr>
                <td>{{ $terminacao->pst_nome }}</td>
            <td>{{ $terminacao->pst_apelido }}</td>
            <td>{{ $terminacao->pst_extension }}</td>
            <td>{{ $terminacao->pst_fornecedor_id }}</td>
            <td>{{ $terminacao->pst_del_prefix }}</td>
            <td>{{ $terminacao->pst_channel }}</td>
            <td>{{ $terminacao->pst_status }}</td>
            <td>{{ $terminacao->pst_celular }}</td>
            <td>{{ $terminacao->pst_fixo }}</td>
            <td>{{ $terminacao->pst_saldo }}</td>
            <td>{{ $terminacao->pst_atualizado }}</td>
            <td>{{ $terminacao->pst_vlrfixo }}</td>
            <td>{{ $terminacao->pst_vlrcelular }}</td>
            <td>{{ $terminacao->pst_tp_tarifacao }}</td>
            <td>{{ $terminacao->pst_obs }}</td>
            <td>{{ $terminacao->pst_login }}</td>
            <td>{{ $terminacao->pst_senha }}</td>
            <td>{{ $terminacao->pst_ip_proxy }}</td>
            <td>{{ $terminacao->pst_reinvite }}</td>
            <td>{{ $terminacao->pst_ringfalso }}</td>
            <td>{{ $terminacao->pst_nomeficticio }}</td>
            <td>{{ $terminacao->pst_formacobranca }}</td>
            <td>{{ $terminacao->pst_finalidade }}</td>
            <td>{{ $terminacao->pst_participa_mcusto }}</td>
            <td>{{ $terminacao->pst_id_terminador }}</td>
            <td>{{ $terminacao->pst_sgs_comecar_cobrar }}</td>
            <td>{{ $terminacao->pst_sgs_comecar_cobrar_celular }}</td>
            <td>{{ $terminacao->pst_rota_automatica }}</td>
            <td>{{ $terminacao->pst_custoemdolar }}</td>
            <td>{{ $terminacao->pst_limite_maximo }}</td>
            <td>{{ $terminacao->pst_consumido }}</td>
            <td>{{ $terminacao->pst_qtde_utilizada }}</td>
            <td>{{ $terminacao->pst_configuracao }}</td>
            <td>{{ $terminacao->pst_fazerregister }}</td>
            <td>{{ $terminacao->pst_jaincluido }}</td>
            <td>{{ $terminacao->pst_codec1 }}</td>
            <td>{{ $terminacao->pst_codec2 }}</td>
            <td>{{ $terminacao->pst_codec3 }}</td>
            <td>{{ $terminacao->pst_codec4 }}</td>
            <td>{{ $terminacao->pst_codec5 }}</td>
            <td>{{ $terminacao->pst_porta }}</td>
            <td>{{ $terminacao->pst_digitos_eliminar }}</td>
            <td>{{ $terminacao->pst_caracteres_incluir }}</td>
            <td>{{ $terminacao->pst_tech_prefix }}</td>
            <td>{{ $terminacao->pst_qtde_simultaneas }}</td>
            <td>{{ $terminacao->pst_codigo_operadora }}</td>
            <td>{{ $terminacao->pst_complemento_callerid }}</td>
                <td>
                    {!! Form::open(['route' => ['terminacaos.destroy', $terminacao->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('terminacaos.show', [$terminacao->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('terminacaos.edit', [$terminacao->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
