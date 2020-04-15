<div class="table-responsive">
    <table class="table" id="cpaAgentes-table">
        <thead>
            <tr>
                <th>@lang('models/cpaagente.fields.cpa_agente_id')</th>
        <th>@lang('models/cpaagente.fields.cpa_data')</th>
        <th>@lang('models/cpaagente.fields.cpa_hora')</th>
        <th>@lang('models/cpaagente.fields.cpa_valor')</th>
        <th>@lang('models/cpaagente.fields.cpa_status')</th>
        <th>@lang('models/cpaagente.fields.cpa_dataliberou')</th>
        <th>@lang('models/cpaagente.fields.cpa_tipo')</th>
        <th>@lang('models/cpaagente.fields.cpa_historico')</th>
        <th>@lang('models/cpaagente.fields.cpa_boleto')</th>
        <th>@lang('models/cpaagente.fields.cpa_saldoanterior_rev')</th>
        <th>@lang('models/cpaagente.fields.cpa_comprovacao')</th>
        <th>@lang('models/cpaagente.fields.cpa_estorno_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cpaAgentes as $cpaAgente)
            <tr>
                <td>{{ $cpaAgente->cpa_agente_id }}</td>
            <td>{{ $cpaAgente->cpa_data }}</td>
            <td>{{ $cpaAgente->cpa_hora }}</td>
            <td>{{ $cpaAgente->cpa_valor }}</td>
            <td>{{ $cpaAgente->cpa_status }}</td>
            <td>{{ $cpaAgente->cpa_dataliberou }}</td>
            <td>{{ $cpaAgente->cpa_tipo }}</td>
            <td>{{ $cpaAgente->cpa_historico }}</td>
            <td>{{ $cpaAgente->cpa_boleto }}</td>
            <td>{{ $cpaAgente->cpa_saldoanterior_rev }}</td>
            <td>{{ $cpaAgente->cpa_comprovacao }}</td>
            <td>{{ $cpaAgente->cpa_estorno_id }}</td>
                <td>
                    {!! Form::open(['route' => ['cpaAgentes.destroy', $cpaAgente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cpaAgentes.show', [$cpaAgente->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cpaAgentes.edit', [$cpaAgente->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
