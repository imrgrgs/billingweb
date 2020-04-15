<div class="table-responsive">
    <table class="table" id="crececebers-table">
        <thead>
            <tr>
                <th>@lang('models/creceber.fields.rec_nrodoc')</th>
        <th>@lang('models/creceber.fields.rec_cliente_id')</th>
        <th>@lang('models/creceber.fields.rec_dtvencto')</th>
        <th>@lang('models/creceber.fields.rec_valor')</th>
        <th>@lang('models/creceber.fields.rec_nrparcela')</th>
        <th>@lang('models/creceber.fields.rec_historico')</th>
        <th>@lang('models/creceber.fields.rec_dtpagto')</th>
        <th>@lang('models/creceber.fields.rec_desconto')</th>
        <th>@lang('models/creceber.fields.rec_acrescimo')</th>
        <th>@lang('models/creceber.fields.rec_dtreprogramada')</th>
        <th>@lang('models/creceber.fields.rec_status')</th>
        <th>@lang('models/creceber.fields.rec_forma')</th>
        <th>@lang('models/creceber.fields.rec_nrdocpgto')</th>
        <th>@lang('models/creceber.fields.rec_planocontas_id')</th>
        <th>@lang('models/creceber.fields.rec_bancos_id')</th>
        <th>@lang('models/creceber.fields.rec_previsao')</th>
        <th>@lang('models/creceber.fields.rec_empresa_id')</th>
        <th>@lang('models/creceber.fields.rec_nossonumero')</th>
        <th>@lang('models/creceber.fields.rec_dtemissao')</th>
        <th>@lang('models/creceber.fields.rec_dtefetivacao')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($crececebers as $crececeber)
            <tr>
                <td>{{ $crececeber->rec_nrodoc }}</td>
            <td>{{ $crececeber->rec_cliente_id }}</td>
            <td>{{ $crececeber->rec_dtvencto }}</td>
            <td>{{ $crececeber->rec_valor }}</td>
            <td>{{ $crececeber->rec_nrparcela }}</td>
            <td>{{ $crececeber->rec_historico }}</td>
            <td>{{ $crececeber->rec_dtpagto }}</td>
            <td>{{ $crececeber->rec_desconto }}</td>
            <td>{{ $crececeber->rec_acrescimo }}</td>
            <td>{{ $crececeber->rec_dtreprogramada }}</td>
            <td>{{ $crececeber->rec_status }}</td>
            <td>{{ $crececeber->rec_forma }}</td>
            <td>{{ $crececeber->rec_nrdocpgto }}</td>
            <td>{{ $crececeber->rec_planocontas_id }}</td>
            <td>{{ $crececeber->rec_bancos_id }}</td>
            <td>{{ $crececeber->rec_previsao }}</td>
            <td>{{ $crececeber->rec_empresa_id }}</td>
            <td>{{ $crececeber->rec_nossonumero }}</td>
            <td>{{ $crececeber->rec_dtemissao }}</td>
            <td>{{ $crececeber->rec_dtefetivacao }}</td>
                <td>
                    {!! Form::open(['route' => ['crececebers.destroy', $crececeber->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('crececebers.show', [$crececeber->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('crececebers.edit', [$crececeber->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
