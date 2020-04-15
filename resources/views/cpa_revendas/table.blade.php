<div class="table-responsive">
    <table class="table" id="cpaRevendas-table">
        <thead>
            <tr>
                <th>@lang('models/cparevenda.fields.cpa_representante_id')</th>
        <th>@lang('models/cparevenda.fields.cpa_data')</th>
        <th>@lang('models/cparevenda.fields.cpa_hora')</th>
        <th>@lang('models/cparevenda.fields.cpa_valor')</th>
        <th>@lang('models/cparevenda.fields.cpa_status')</th>
        <th>@lang('models/cparevenda.fields.cpa_dataliberou')</th>
        <th>@lang('models/cparevenda.fields.cpa_tipo')</th>
        <th>@lang('models/cparevenda.fields.cpa_historico')</th>
        <th>@lang('models/cparevenda.fields.cpa_boleto')</th>
        <th>@lang('models/cparevenda.fields.cpa_saldoanterior_rev')</th>
        <th>@lang('models/cparevenda.fields.cpa_comprovacao')</th>
        <th>@lang('models/cparevenda.fields.cpa_estorno_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cpaRevendas as $cpaRevenda)
            <tr>
                <td>{{ $cpaRevenda->cpa_representante_id }}</td>
            <td>{{ $cpaRevenda->cpa_data }}</td>
            <td>{{ $cpaRevenda->cpa_hora }}</td>
            <td>{{ $cpaRevenda->cpa_valor }}</td>
            <td>{{ $cpaRevenda->cpa_status }}</td>
            <td>{{ $cpaRevenda->cpa_dataliberou }}</td>
            <td>{{ $cpaRevenda->cpa_tipo }}</td>
            <td>{{ $cpaRevenda->cpa_historico }}</td>
            <td>{{ $cpaRevenda->cpa_boleto }}</td>
            <td>{{ $cpaRevenda->cpa_saldoanterior_rev }}</td>
            <td>{{ $cpaRevenda->cpa_comprovacao }}</td>
            <td>{{ $cpaRevenda->cpa_estorno_id }}</td>
                <td>
                    {!! Form::open(['route' => ['cpaRevendas.destroy', $cpaRevenda->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cpaRevendas.show', [$cpaRevenda->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cpaRevendas.edit', [$cpaRevenda->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
