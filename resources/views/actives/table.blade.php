<div class="table-responsive">
    <table class="table" id="actives-table">
        <thead>
            <tr>
                <th>@lang('models/active.fields.act_origem')</th>
        <th>@lang('models/active.fields.act_destino')</th>
        <th>@lang('models/active.fields.act_usuario')</th>
        <th>@lang('models/active.fields.act_contexto')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($actives as $active)
            <tr>
                <td>{{ $active->act_origem }}</td>
            <td>{{ $active->act_destino }}</td>
            <td>{{ $active->act_usuario }}</td>
            <td>{{ $active->act_contexto }}</td>
                <td>
                    {!! Form::open(['route' => ['actives.destroy', $active->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('actives.show', [$active->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('actives.edit', [$active->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
