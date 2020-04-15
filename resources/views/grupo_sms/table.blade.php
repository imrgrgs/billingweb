<div class="table-responsive">
    <table class="table" id="grupoSms-table">
        <thead>
            <tr>
                <th>@lang('models/grupossms.fields.gsms_nome')</th>
        <th>@lang('models/grupossms.fields.gsms_fornecedor_id')</th>
        <th>@lang('models/grupossms.fields.gsms_representante_id')</th>
        <th>@lang('models/grupossms.fields.gsms_assinante_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($grupoSms as $grupoSms)
            <tr>
                <td>{{ $grupoSms->gsms_nome }}</td>
            <td>{{ $grupoSms->gsms_fornecedor_id }}</td>
            <td>{{ $grupoSms->gsms_representante_id }}</td>
            <td>{{ $grupoSms->gsms_assinante_id }}</td>
                <td>
                    {!! Form::open(['route' => ['grupoSms.destroy', $grupoSms->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('grupoSms.show', [$grupoSms->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('grupoSms.edit', [$grupoSms->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
