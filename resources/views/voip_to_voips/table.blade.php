<div class="table-responsive">
    <table class="table" id="voipToVoips-table">
        <thead>
            <tr>
                <th>@lang('models/voiptovoip.fields.vtov_origem')</th>
        <th>@lang('models/voiptovoip.fields.vtov_destino')</th>
        <th>@lang('models/voiptovoip.fields.vtov_representante_id')</th>
        <th>@lang('models/voiptovoip.fields.vtov_fornecedor_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($voipToVoips as $voipToVoip)
            <tr>
                <td>{{ $voipToVoip->vtov_origem }}</td>
            <td>{{ $voipToVoip->vtov_destino }}</td>
            <td>{{ $voipToVoip->vtov_representante_id }}</td>
            <td>{{ $voipToVoip->vtov_fornecedor_id }}</td>
                <td>
                    {!! Form::open(['route' => ['voipToVoips.destroy', $voipToVoip->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('voipToVoips.show', [$voipToVoip->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('voipToVoips.edit', [$voipToVoip->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
