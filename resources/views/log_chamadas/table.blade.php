<div class="table-responsive">
    <table class="table" id="logChamadas-table">
        <thead>
            <tr>
                <th>@lang('models/logchamadas.fields.log_datahora')</th>
        <th>@lang('models/logchamadas.fields.log_destino')</th>
        <th>@lang('models/logchamadas.fields.log_texto')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($logChamadas as $logChamada)
            <tr>
                <td>{{ $logChamada->log_datahora }}</td>
            <td>{{ $logChamada->log_destino }}</td>
            <td>{{ $logChamada->log_texto }}</td>
                <td>
                    {!! Form::open(['route' => ['logChamadas.destroy', $logChamada->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('logChamadas.show', [$logChamada->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('logChamadas.edit', [$logChamada->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
