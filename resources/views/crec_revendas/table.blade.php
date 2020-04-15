<div class="table-responsive">
    <table class="table" id="crecRevendas-table">
        <thead>
            <tr>
                <th>@lang('models/crecrevenda.fields.rrv_nrodoc')</th>
        <th>@lang('models/crecrevenda.fields.rrv_cliente_id')</th>
        <th>@lang('models/crecrevenda.fields.rrv_dtvencto')</th>
        <th>@lang('models/crecrevenda.fields.rrv_valor')</th>
        <th>@lang('models/crecrevenda.fields.rrv_nrparcela')</th>
        <th>@lang('models/crecrevenda.fields.rrv_historico')</th>
        <th>@lang('models/crecrevenda.fields.rrv_dtpagto')</th>
        <th>@lang('models/crecrevenda.fields.rrv_desconto')</th>
        <th>@lang('models/crecrevenda.fields.rrv_acrescimo')</th>
        <th>@lang('models/crecrevenda.fields.rrv_dtreprogramada')</th>
        <th>@lang('models/crecrevenda.fields.rrv_status')</th>
        <th>@lang('models/crecrevenda.fields.rrv_forma')</th>
        <th>@lang('models/crecrevenda.fields.rrv_nrdocpgto')</th>
        <th>@lang('models/crecrevenda.fields.rrv_planocontas_id')</th>
        <th>@lang('models/crecrevenda.fields.rrv_bancos_id')</th>
        <th>@lang('models/crecrevenda.fields.rrv_previsao')</th>
        <th>@lang('models/crecrevenda.fields.rrv_empresa_id')</th>
        <th>@lang('models/crecrevenda.fields.rrv_nossonumero')</th>
        <th>@lang('models/crecrevenda.fields.rrv_dtemissao')</th>
        <th>@lang('models/crecrevenda.fields.rrv_dtefetivacao')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($crecRevendas as $crecRevenda)
            <tr>
                <td>{{ $crecRevenda->rrv_nrodoc }}</td>
            <td>{{ $crecRevenda->rrv_cliente_id }}</td>
            <td>{{ $crecRevenda->rrv_dtvencto }}</td>
            <td>{{ $crecRevenda->rrv_valor }}</td>
            <td>{{ $crecRevenda->rrv_nrparcela }}</td>
            <td>{{ $crecRevenda->rrv_historico }}</td>
            <td>{{ $crecRevenda->rrv_dtpagto }}</td>
            <td>{{ $crecRevenda->rrv_desconto }}</td>
            <td>{{ $crecRevenda->rrv_acrescimo }}</td>
            <td>{{ $crecRevenda->rrv_dtreprogramada }}</td>
            <td>{{ $crecRevenda->rrv_status }}</td>
            <td>{{ $crecRevenda->rrv_forma }}</td>
            <td>{{ $crecRevenda->rrv_nrdocpgto }}</td>
            <td>{{ $crecRevenda->rrv_planocontas_id }}</td>
            <td>{{ $crecRevenda->rrv_bancos_id }}</td>
            <td>{{ $crecRevenda->rrv_previsao }}</td>
            <td>{{ $crecRevenda->rrv_empresa_id }}</td>
            <td>{{ $crecRevenda->rrv_nossonumero }}</td>
            <td>{{ $crecRevenda->rrv_dtemissao }}</td>
            <td>{{ $crecRevenda->rrv_dtefetivacao }}</td>
                <td>
                    {!! Form::open(['route' => ['crecRevendas.destroy', $crecRevenda->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('crecRevendas.show', [$crecRevenda->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('crecRevendas.edit', [$crecRevenda->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
