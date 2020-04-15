<div class="table-responsive">
    <table class="table" id="crecAgentes-table">
        <thead>
            <tr>
                <th>@lang('models/crecagente.fields.rrv_nrodoc')</th>
        <th>@lang('models/crecagente.fields.rrv_cliente_id')</th>
        <th>@lang('models/crecagente.fields.rrv_dtvencto')</th>
        <th>@lang('models/crecagente.fields.rrv_valor')</th>
        <th>@lang('models/crecagente.fields.rrv_nrparcela')</th>
        <th>@lang('models/crecagente.fields.rrv_historico')</th>
        <th>@lang('models/crecagente.fields.rrv_dtpagto')</th>
        <th>@lang('models/crecagente.fields.rrv_desconto')</th>
        <th>@lang('models/crecagente.fields.rrv_acrescimo')</th>
        <th>@lang('models/crecagente.fields.rrv_dtreprogramada')</th>
        <th>@lang('models/crecagente.fields.rrv_status')</th>
        <th>@lang('models/crecagente.fields.rrv_forma')</th>
        <th>@lang('models/crecagente.fields.rrv_nrdocpgto')</th>
        <th>@lang('models/crecagente.fields.rrv_planocontas_id')</th>
        <th>@lang('models/crecagente.fields.rrv_bancos_id')</th>
        <th>@lang('models/crecagente.fields.rrv_previsao')</th>
        <th>@lang('models/crecagente.fields.rrv_empresa_id')</th>
        <th>@lang('models/crecagente.fields.rrv_nossonumero')</th>
        <th>@lang('models/crecagente.fields.rrv_dtemissao')</th>
        <th>@lang('models/crecagente.fields.rrv_dtefetivacao')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($crecAgentes as $crecAgente)
            <tr>
                <td>{{ $crecAgente->rrv_nrodoc }}</td>
            <td>{{ $crecAgente->rrv_cliente_id }}</td>
            <td>{{ $crecAgente->rrv_dtvencto }}</td>
            <td>{{ $crecAgente->rrv_valor }}</td>
            <td>{{ $crecAgente->rrv_nrparcela }}</td>
            <td>{{ $crecAgente->rrv_historico }}</td>
            <td>{{ $crecAgente->rrv_dtpagto }}</td>
            <td>{{ $crecAgente->rrv_desconto }}</td>
            <td>{{ $crecAgente->rrv_acrescimo }}</td>
            <td>{{ $crecAgente->rrv_dtreprogramada }}</td>
            <td>{{ $crecAgente->rrv_status }}</td>
            <td>{{ $crecAgente->rrv_forma }}</td>
            <td>{{ $crecAgente->rrv_nrdocpgto }}</td>
            <td>{{ $crecAgente->rrv_planocontas_id }}</td>
            <td>{{ $crecAgente->rrv_bancos_id }}</td>
            <td>{{ $crecAgente->rrv_previsao }}</td>
            <td>{{ $crecAgente->rrv_empresa_id }}</td>
            <td>{{ $crecAgente->rrv_nossonumero }}</td>
            <td>{{ $crecAgente->rrv_dtemissao }}</td>
            <td>{{ $crecAgente->rrv_dtefetivacao }}</td>
                <td>
                    {!! Form::open(['route' => ['crecAgentes.destroy', $crecAgente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('crecAgentes.show', [$crecAgente->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('crecAgentes.edit', [$crecAgente->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
