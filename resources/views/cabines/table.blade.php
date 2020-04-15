<div class="table-responsive">
    <table class="table" id="cabines-table">
        <thead>
            <tr>
                <th>@lang('models/cabines.fields.cab_data')</th>
        <th>@lang('models/cabines.fields.cab_hora')</th>
        <th>@lang('models/cabines.fields.cab_cliente')</th>
        <th>@lang('models/cabines.fields.cab_user_id')</th>
        <th>@lang('models/cabines.fields.cab_representante_id')</th>
        <th>@lang('models/cabines.fields.cab_fornecedor_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cabines as $cabine)
            <tr>
                <td>{{ $cabine->cab_data }}</td>
            <td>{{ $cabine->cab_hora }}</td>
            <td>{{ $cabine->cab_cliente }}</td>
            <td>{{ $cabine->cab_user_id }}</td>
            <td>{{ $cabine->cab_representante_id }}</td>
            <td>{{ $cabine->cab_fornecedor_id }}</td>
                <td>
                    {!! Form::open(['route' => ['cabines.destroy', $cabine->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cabines.show', [$cabine->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cabines.edit', [$cabine->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
