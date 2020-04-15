<div class="table-responsive">
    <table class="table" id="ligOnlines-table">
        <thead>
            <tr>
                <th>@lang('models/ligonline.fields.onl_fornecedor_id')</th>
        <th>@lang('models/ligonline.fields.onl_representante_id')</th>
        <th>@lang('models/ligonline.fields.onl_agente_id')</th>
        <th>@lang('models/ligonline.fields.onl_assinante_id')</th>
        <th>@lang('models/ligonline.fields.onl_username')</th>
        <th>@lang('models/ligonline.fields.onl_tempo')</th>
        <th>@lang('models/ligonline.fields.onl_destino')</th>
        <th>@lang('models/ligonline.fields.onl_status')</th>
        <th>@lang('models/ligonline.fields.onl_nome')</th>
        <th>@lang('models/ligonline.fields.onl_terminacao_id')</th>
        <th>@lang('models/ligonline.fields.onl_channel_origem')</th>
        <th>@lang('models/ligonline.fields.onl_channel_destino')</th>
        <th>@lang('models/ligonline.fields.onl_cabine_id')</th>
        <th>@lang('models/ligonline.fields.onl_nro_origem')</th>
        <th>@lang('models/ligonline.fields.onl_callingcard')</th>
        <th>@lang('models/ligonline.fields.onl_ip_servidor')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ligOnlines as $ligOnline)
            <tr>
                <td>{{ $ligOnline->onl_fornecedor_id }}</td>
            <td>{{ $ligOnline->onl_representante_id }}</td>
            <td>{{ $ligOnline->onl_agente_id }}</td>
            <td>{{ $ligOnline->onl_assinante_id }}</td>
            <td>{{ $ligOnline->onl_username }}</td>
            <td>{{ $ligOnline->onl_tempo }}</td>
            <td>{{ $ligOnline->onl_destino }}</td>
            <td>{{ $ligOnline->onl_status }}</td>
            <td>{{ $ligOnline->onl_nome }}</td>
            <td>{{ $ligOnline->onl_terminacao_id }}</td>
            <td>{{ $ligOnline->onl_channel_origem }}</td>
            <td>{{ $ligOnline->onl_channel_destino }}</td>
            <td>{{ $ligOnline->onl_cabine_id }}</td>
            <td>{{ $ligOnline->onl_nro_origem }}</td>
            <td>{{ $ligOnline->onl_callingcard }}</td>
            <td>{{ $ligOnline->onl_ip_servidor }}</td>
                <td>
                    {!! Form::open(['route' => ['ligOnlines.destroy', $ligOnline->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ligOnlines.show', [$ligOnline->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('ligOnlines.edit', [$ligOnline->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
