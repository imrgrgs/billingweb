<div class="table-responsive">
    <table class="table" id="cadFeriados-table">
        <thead>
            <tr>
                <th>@lang('models/cadferiados.fields.fer_data')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cadFeriados as $cadFeriado)
            <tr>
                <td>{{ $cadFeriado->fer_data }}</td>
                <td>
                    {!! Form::open(['route' => ['cadFeriados.destroy', $cadFeriado->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cadFeriados.show', [$cadFeriado->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cadFeriados.edit', [$cadFeriado->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
