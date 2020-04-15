<div class="table-responsive">
    <table class="table" id="logTarifacaos-table">
        <thead>
            <tr>
                <th>@lang('models/logtarifacao.fields.lgt_representante_id')</th>
        <th>@lang('models/logtarifacao.fields.lgt_assinante')</th>
        <th>@lang('models/logtarifacao.fields.lgt_tptarifacao')</th>
        <th>@lang('models/logtarifacao.fields.lgt_data_ini')</th>
        <th>@lang('models/logtarifacao.fields.lgt_hora_ini')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($logTarifacaos as $logTarifacao)
            <tr>
                <td>{{ $logTarifacao->lgt_representante_id }}</td>
            <td>{{ $logTarifacao->lgt_assinante }}</td>
            <td>{{ $logTarifacao->lgt_tptarifacao }}</td>
            <td>{{ $logTarifacao->lgt_data_ini }}</td>
            <td>{{ $logTarifacao->lgt_hora_ini }}</td>
                <td>
                    {!! Form::open(['route' => ['logTarifacaos.destroy', $logTarifacao->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('logTarifacaos.show', [$logTarifacao->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('logTarifacaos.edit', [$logTarifacao->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
