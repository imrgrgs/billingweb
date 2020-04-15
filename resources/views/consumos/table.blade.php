<div class="table-responsive">
    <table class="table" id="consumos-table">
        <thead>
            <tr>
                <th>@lang('models/consumo.fields.cns_assinante_id')</th>
        <th>@lang('models/consumo.fields.cns_data_ini')</th>
        <th>@lang('models/consumo.fields.cns_data_fin')</th>
        <th>@lang('models/consumo.fields.cns_segundos')</th>
        <th>@lang('models/consumo.fields.cns_destino')</th>
        <th>@lang('models/consumo.fields.cns_valor')</th>
        <th>@lang('models/consumo.fields.cns_valor_repr')</th>
        <th>@lang('models/consumo.fields.cns_valor_master')</th>
        <th>@lang('models/consumo.fields.cns_representante_id')</th>
        <th>@lang('models/consumo.fields.cns_fornecedor_id')</th>
        <th>@lang('models/consumo.fields.cns_terminacao_id')</th>
        <th>@lang('models/consumo.fields.cns_ip')</th>
        <th>@lang('models/consumo.fields.cns_uniqueid')</th>
        <th>@lang('models/consumo.fields.cns_cabine_id')</th>
        <th>@lang('models/consumo.fields.cns_valor_agente')</th>
        <th>@lang('models/consumo.fields.cns_valor_vendedor')</th>
        <th>@lang('models/consumo.fields.cns_tptarifacao')</th>
        <th>@lang('models/consumo.fields.cns_saldo_revendaagente')</th>
        <th>@lang('models/consumo.fields.cns_tarifa_assinante')</th>
        <th>@lang('models/consumo.fields.cns_fone_origem')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($consumos as $consumo)
            <tr>
                <td>{{ $consumo->cns_assinante_id }}</td>
            <td>{{ $consumo->cns_data_ini }}</td>
            <td>{{ $consumo->cns_data_fin }}</td>
            <td>{{ $consumo->cns_segundos }}</td>
            <td>{{ $consumo->cns_destino }}</td>
            <td>{{ $consumo->cns_valor }}</td>
            <td>{{ $consumo->cns_valor_repr }}</td>
            <td>{{ $consumo->cns_valor_master }}</td>
            <td>{{ $consumo->cns_representante_id }}</td>
            <td>{{ $consumo->cns_fornecedor_id }}</td>
            <td>{{ $consumo->cns_terminacao_id }}</td>
            <td>{{ $consumo->cns_ip }}</td>
            <td>{{ $consumo->cns_uniqueid }}</td>
            <td>{{ $consumo->cns_cabine_id }}</td>
            <td>{{ $consumo->cns_valor_agente }}</td>
            <td>{{ $consumo->cns_valor_vendedor }}</td>
            <td>{{ $consumo->cns_tptarifacao }}</td>
            <td>{{ $consumo->cns_saldo_revendaagente }}</td>
            <td>{{ $consumo->cns_tarifa_assinante }}</td>
            <td>{{ $consumo->cns_fone_origem }}</td>
                <td>
                    {!! Form::open(['route' => ['consumos.destroy', $consumo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('consumos.show', [$consumo->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('consumos.edit', [$consumo->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
