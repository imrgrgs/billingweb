<div class="table-responsive">
    <table class="table" id="envioSms-table">
        <thead>
            <tr>
                <th>@lang('models/enviosms.fields.esms_data')</th>
        <th>@lang('models/enviosms.fields.esms_valor')</th>
        <th>@lang('models/enviosms.fields.esms_valor_rev')</th>
        <th>@lang('models/enviosms.fields.esms_valor_ass')</th>
        <th>@lang('models/enviosms.fields.esms_status')</th>
        <th>@lang('models/enviosms.fields.esms_assinante')</th>
        <th>@lang('models/enviosms.fields.esms_fone_destino')</th>
        <th>@lang('models/enviosms.fields.esms_mensagem')</th>
        <th>@lang('models/enviosms.fields.esms_fornecedor_id')</th>
        <th>@lang('models/enviosms.fields.esms_representante_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($envioSms as $envioSms)
            <tr>
                <td>{{ $envioSms->esms_data }}</td>
            <td>{{ $envioSms->esms_valor }}</td>
            <td>{{ $envioSms->esms_valor_rev }}</td>
            <td>{{ $envioSms->esms_valor_ass }}</td>
            <td>{{ $envioSms->esms_status }}</td>
            <td>{{ $envioSms->esms_assinante }}</td>
            <td>{{ $envioSms->esms_fone_destino }}</td>
            <td>{{ $envioSms->esms_mensagem }}</td>
            <td>{{ $envioSms->esms_fornecedor_id }}</td>
            <td>{{ $envioSms->esms_representante_id }}</td>
                <td>
                    {!! Form::open(['route' => ['envioSms.destroy', $envioSms->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('envioSms.show', [$envioSms->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('envioSms.edit', [$envioSms->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
