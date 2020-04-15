<div class="table-responsive">
    <table class="table" id="celularSms-table">
        <thead>
            <tr>
                <th>@lang('models/celularessms.fields.csms_num_cell')</th>
        <th>@lang('models/celularessms.fields.csms_nome')</th>
        <th>@lang('models/celularessms.fields.csms_grupo_id')</th>
        <th>@lang('models/celularessms.fields.csms_fornecedor_id')</th>
        <th>@lang('models/celularessms.fields.csms_representante_id')</th>
        <th>@lang('models/celularessms.fields.csms_assinante_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($celularSms as $celularSms)
            <tr>
                <td>{{ $celularSms->csms_num_cell }}</td>
            <td>{{ $celularSms->csms_nome }}</td>
            <td>{{ $celularSms->csms_grupo_id }}</td>
            <td>{{ $celularSms->csms_fornecedor_id }}</td>
            <td>{{ $celularSms->csms_representante_id }}</td>
            <td>{{ $celularSms->csms_assinante_id }}</td>
                <td>
                    {!! Form::open(['route' => ['celularSms.destroy', $celularSms->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('celularSms.show', [$celularSms->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('celularSms.edit', [$celularSms->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
