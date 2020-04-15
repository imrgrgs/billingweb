<div class="table-responsive">
    <table class="table" id="crecMasters-table">
        <thead>
            <tr>
                <th>@lang('models/crecmaster.fields.ram_nrodoc')</th>
        <th>@lang('models/crecmaster.fields.ram_cliente_id')</th>
        <th>@lang('models/crecmaster.fields.ram_dtvencto')</th>
        <th>@lang('models/crecmaster.fields.ram_valor')</th>
        <th>@lang('models/crecmaster.fields.ram_nrparcela')</th>
        <th>@lang('models/crecmaster.fields.ram_historico')</th>
        <th>@lang('models/crecmaster.fields.ram_dtpagto')</th>
        <th>@lang('models/crecmaster.fields.ram_desconto')</th>
        <th>@lang('models/crecmaster.fields.ram_acrescimo')</th>
        <th>@lang('models/crecmaster.fields.ram_dtreprogramada')</th>
        <th>@lang('models/crecmaster.fields.ram_status')</th>
        <th>@lang('models/crecmaster.fields.ram_forma')</th>
        <th>@lang('models/crecmaster.fields.ram_nrdocpgto')</th>
        <th>@lang('models/crecmaster.fields.ram_planocontas_id')</th>
        <th>@lang('models/crecmaster.fields.ram_bancos_id')</th>
        <th>@lang('models/crecmaster.fields.ram_previsao')</th>
        <th>@lang('models/crecmaster.fields.ram_empresa_id')</th>
        <th>@lang('models/crecmaster.fields.ram_nossonumero')</th>
        <th>@lang('models/crecmaster.fields.ram_dtemissao')</th>
        <th>@lang('models/crecmaster.fields.ram_dtefetivacao')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($crecMasters as $crecMaster)
            <tr>
                <td>{{ $crecMaster->ram_nrodoc }}</td>
            <td>{{ $crecMaster->ram_cliente_id }}</td>
            <td>{{ $crecMaster->ram_dtvencto }}</td>
            <td>{{ $crecMaster->ram_valor }}</td>
            <td>{{ $crecMaster->ram_nrparcela }}</td>
            <td>{{ $crecMaster->ram_historico }}</td>
            <td>{{ $crecMaster->ram_dtpagto }}</td>
            <td>{{ $crecMaster->ram_desconto }}</td>
            <td>{{ $crecMaster->ram_acrescimo }}</td>
            <td>{{ $crecMaster->ram_dtreprogramada }}</td>
            <td>{{ $crecMaster->ram_status }}</td>
            <td>{{ $crecMaster->ram_forma }}</td>
            <td>{{ $crecMaster->ram_nrdocpgto }}</td>
            <td>{{ $crecMaster->ram_planocontas_id }}</td>
            <td>{{ $crecMaster->ram_bancos_id }}</td>
            <td>{{ $crecMaster->ram_previsao }}</td>
            <td>{{ $crecMaster->ram_empresa_id }}</td>
            <td>{{ $crecMaster->ram_nossonumero }}</td>
            <td>{{ $crecMaster->ram_dtemissao }}</td>
            <td>{{ $crecMaster->ram_dtefetivacao }}</td>
                <td>
                    {!! Form::open(['route' => ['crecMasters.destroy', $crecMaster->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('crecMasters.show', [$crecMaster->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('crecMasters.edit', [$crecMaster->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
