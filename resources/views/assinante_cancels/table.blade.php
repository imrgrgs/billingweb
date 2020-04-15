<div class="table-responsive">
    <table class="table" id="assinanteCancels-table">
        <thead>
            <tr>
                <th>@lang('models/userscancel.fields.atv_user_id')</th>
        <th>@lang('models/userscancel.fields.atv_data')</th>
        <th>@lang('models/userscancel.fields.atv_hora')</th>
        <th>@lang('models/userscancel.fields.atv_atualizado_ant')</th>
        <th>@lang('models/userscancel.fields.atv_atualizado_atu')</th>
        <th>@lang('models/userscancel.fields.atv_representante_id')</th>
        <th>@lang('models/userscancel.fields.atv_fornecedor_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($assinanteCancels as $assinanteCancel)
            <tr>
                <td>{{ $assinanteCancel->atv_user_id }}</td>
            <td>{{ $assinanteCancel->atv_data }}</td>
            <td>{{ $assinanteCancel->atv_hora }}</td>
            <td>{{ $assinanteCancel->atv_atualizado_ant }}</td>
            <td>{{ $assinanteCancel->atv_atualizado_atu }}</td>
            <td>{{ $assinanteCancel->atv_representante_id }}</td>
            <td>{{ $assinanteCancel->atv_fornecedor_id }}</td>
                <td>
                    {!! Form::open(['route' => ['assinanteCancels.destroy', $assinanteCancel->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('assinanteCancels.show', [$assinanteCancel->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('assinanteCancels.edit', [$assinanteCancel->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
